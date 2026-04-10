<?php
// ============================================================
// UNBOND – Members Area Access Gate
// Datei: public_html/members/index.php
//
// WIE ES FUNKTIONIERT:
// 1. Käuferin kauft auf Elopage
// 2. Elopage leitet nach Kauf weiter zu:
//    https://unbond.de/members/?token=UNBOND_SECRET_2026
// 3. Diese Datei prüft den Token
// 4. Bei gültigem Token: E-Book wird angezeigt
// 5. Bei ungültigem Token: Weiterleitung zur Kaufseite
//
// SICHERHEITSHINWEIS:
// Dieses System schützt durch ein geteiltes Geheimnis (Shared Secret).
// Es ist für ein digitales E-Book vollkommen ausreichend.
// Wer den Link kennt, hat Zugang – genau wie bei einem Download-Link.
// ============================================================

// ── Konfiguration ───────────────────────────────────────────
// DIESEN TOKEN in Elopage als "Danke-Seite" URL eintragen:
// https://unbond.de/members/?token=UNBOND_ACCESS_2026
// Token hier ändern wenn nötig (z.B. alle paar Monate)
define('ACCESS_TOKEN', 'UNBOND_ACCESS_2026');

// URL zur Kaufseite – wohin bei ungültigem Zugang weitergeleitet wird
define('SHOP_URL', 'https://unbond.de/#ebook');

// ── Token prüfen ────────────────────────────────────────────
$token = isset($_GET['token']) ? trim($_GET['token']) : '';

// Token in Session speichern (damit Nutzerin nicht bei jedem
// Seitenaufruf den Token-Parameter in der URL braucht)
session_start();

if ($token === ACCESS_TOKEN) {
    // Gültiger Token → in Session speichern
    $_SESSION['unbond_access'] = true;
    $_SESSION['unbond_token']  = $token;
}

// Zugang prüfen: entweder aktueller Token oder Session gültig
$hasAccess = ($token === ACCESS_TOKEN) || 
             (isset($_SESSION['unbond_access']) && $_SESSION['unbond_access'] === true);

if (!$hasAccess) {
    // Kein gültiger Zugang → zur Kaufseite
    header('Location: ' . SHOP_URL);
    exit;
}

// ── Zugang gewährt → E-Book ausliefern ──────────────────────
// Ab hier wird das E-Book angezeigt.
// Wir lesen die E-Book-HTML-Datei ein und geben sie aus.

$ebookFile = __DIR__ . '/ebook/index.html';

if (!file_exists($ebookFile)) {
    // Fallback falls E-Book-Datei fehlt
    http_response_code(500);
    echo '<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>UNBOND</title></head><body style="font-family:sans-serif;text-align:center;padding:60px;"><h1>E-Book wird vorbereitet</h1><p>Bitte versuche es in Kürze erneut oder schreibe uns: <a href="mailto:milena@unbond.de">milena@unbond.de</a></p></body></html>';
    exit;
}

// Sicherheitsheader
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: no-store, no-cache, must-revalidate');

// E-Book-Inhalt ausgeben
readfile($ebookFile);
