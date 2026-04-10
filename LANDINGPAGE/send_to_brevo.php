<?php
// ============================================================
// UNBOND – Brevo Opt-In Handler v2
// Datei: send_to_brevo.php
// ============================================================

define('BREVO_API_KEY',      'DEIN_BREVO_API_KEY');
define('BREVO_LIST_REPORT',  1);   // Liste A: alle Report-Empfängerinnen
define('BREVO_LIST_NURTURE', 2);   // Liste B: 7-Tage-Mails (nur mit Checkbox)
define('ALLOWED_ORIGIN',     'https://unbond.de');

header('Access-Control-Allow-Origin: ' . ALLOWED_ORIGIN);
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(204); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Ungültige Anfrage']); exit;
}

$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);

$email   = isset($data['email'])   ? filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL) : '';
$vorname = isset($data['vorname']) ? htmlspecialchars(trim($data['vorname']), ENT_QUOTES, 'UTF-8') : '';
$profil  = isset($data['profil'])  ? htmlspecialchars(trim($data['profil']),  ENT_QUOTES, 'UTF-8') : 'unbekannt';
$zustand = isset($data['zustand']) ? htmlspecialchars(trim($data['zustand']), ENT_QUOTES, 'UTF-8') : '';
$score   = isset($data['score'])   ? intval($data['score']) : 0;
$nurture = isset($data['nurture']) ? (bool)$data['nurture'] : false;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Ungültige E-Mail-Adresse']); exit;
}

$listIds = [BREVO_LIST_REPORT];
if ($nurture) $listIds[] = BREVO_LIST_NURTURE;

$attributes = [
    'PROFIL'     => $profil,
    'ZUSTAND'    => $zustand,
    'SCORE'      => $score,
    'NURTURE'    => $nurture ? 'true' : 'false',
    'TEST_DATUM' => date('Y-m-d'),
];
if (!empty($vorname)) $attributes['FIRSTNAME'] = $vorname;

$payload = [
    'email'         => $email,
    'updateEnabled' => true,
    'listIds'       => $listIds,
    'attributes'    => $attributes,
];

$ch = curl_init('https://api.brevo.com/v3/contacts');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($payload),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Accept: application/json',
        'api-key: ' . BREVO_API_KEY,
    ],
    CURLOPT_TIMEOUT => 15,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if (in_array($httpCode, [201, 204])) {
    echo json_encode(['success' => true]); exit;
}

$brevoData = json_decode($response, true);
if ($httpCode === 400 && isset($brevoData['code']) && $brevoData['code'] === 'duplicate_parameter') {
    echo json_encode(['success' => true]); exit;
}

$errMsg = isset($brevoData['message']) ? $brevoData['message'] : 'Fehler beim Speichern';
error_log('Brevo API error: HTTP ' . $httpCode . ' | ' . $response);
http_response_code(500);
echo json_encode(['success' => false, 'error' => $errMsg]);
