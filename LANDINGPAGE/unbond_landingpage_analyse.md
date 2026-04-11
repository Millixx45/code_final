# UNBOND Landing Page – Analyse, Optimierungsliste & Schritt-für-Schritt-Anleitung

*Analyse auf Basis des Marketing-Konzepts, der Systemanweisung und der aktuellen index_v15.html | Stand: April 2026*

---

## Executive Summary

Die Landing Page (index_v15.html) ist visuell ansprechend, technisch solide aufgebaut und enthält mit dem integrierten ToxiCometer ein starkes Conversion-Element. Die Glasmorphismus-Ästhetik, das Farbsystem und die Typografie sind konsistent und professionell. Gleichzeitig gibt es **17 konkrete Optimierungspunkte**, von denen 5 als kritisch einzustufen sind – sie betreffen Umsatz, Rechtskonformität und Glaubwürdigkeit.

Die wichtigsten Probleme auf einen Blick:

- **Preis zu hoch:** 27 € liegt über der empfohlenen Impulskauf-Schwelle von 19–24 €
- **Kauflink defekt:** elopage.com/PLATZHALTER führt ins Leere – kein Kauf möglich
- **Zahleninkonsistenz:** Hero sagt „25 Fragen", ToxiCometer hat 15 Fragen
- **Keine echten Testimonials:** Alle drei Testimonials sind Platzhalter
- **„Heilungsprogramm" als Bezeichnung** riskiert HWG-Relevanz

---

## Teil 1: Optimierungsliste

### Kritische Fehler (Prio 1 – sofort beheben)

#### 1. Kauflink ist ein Platzhalter

**IST:** `href="https://elopage.com/PLATZHALTER"` (Zeile 2788)
**SOLL:** Funktionierender Kauflink über CopeCart (empfohlen im Marketing-Konzept) oder Ablefy (elopage)
**Warum kritisch:** Kein Kauf möglich. Jede Besucherin, die kaufen will, verliert das Vertrauen.
**Empfehlung:** CopeCart einrichten (keine Grundgebühr, 4,9 % + 1 € Transaktionsgebühr, DSGVO-konform) – das Marketing-Konzept empfiehlt CopeCart explizit für Phase 1.

#### 2. Fragenanzahl-Inkonsistenz im Hero

**IST:** Hero-Text sagt „25 Fragen · 3 Minuten · 100% anonym" (Zeile 2492), der tatsächliche ToxiCometer hat **15 Fragen** (TOX_QUESTIONS-Array im JavaScript)
**SOLL:** „15 Fragen · 2 Minuten · 100% anonym"
**Warum kritisch:** Widersprüchliche Angaben zerstören Glaubwürdigkeit. Nutzerinnen, die nach 15 Fragen fertig sind, könnten verwirrt sein – oder die, die „25 Fragen" lesen, starten gar nicht erst (zu lang).

#### 3. Preis liegt über Impulskauf-Schwelle

**IST:** ~~49 €~~ 27 € (Zeile 2783–2784)
**SOLL:** ~~49 €~~ 19–24 € (Marketing-Konzept-Empfehlung)
**Warum relevant:** 27 € liegt knapp über der psychologischen Impulskauf-Schwelle von 24 €. Im Marketing-Konzept wird detailliert begründet, warum 19–24 € für ein unbekanntes Produkt einer noch nicht etablierten Marke die richtige Einstiegsspanne ist. 3 eBook-Verkäufe à 24 € decken bereits alle Phase-1-Fixkosten.
**Empfehlung:** Preis auf 24 € senken. Anker-Effekt beibehalten (~~49 €~~ 24 €).

#### 4. Alle Testimonials sind Platzhalter

**IST:** Drei Testimonials mit „[Platzhalter – echtes Testimonial einfügen]" bzw. „[Platzhalter]" (Zeilen 2742, 2747, 2752)
**SOLL:** Echte Testimonials oder Abschnitt entfernen
**Warum kritisch:** Platzhalter-Testimonials sind schlimmer als keine Testimonials. Sie signalisieren, dass das Produkt noch nicht getestet wurde, und könnten als Täuschungsversuch wahrgenommen werden (UWG § 5 – irreführende Werbung). Drei erfundene 5-Sterne-Bewertungen mit Pseudo-Namen und Städten sind ein ernsthaftes Vertrauens- und Rechtsproblem.
**Empfehlung:** Bis echte Testimonials vorliegen – Abschnitt komplett entfernen oder durch „Was UNBOND bietet"-Feature-Sektion ersetzen. Alternative: Beta-Leserinnen rekrutieren (z. B. über Telegram-Community) und echtes Feedback einholen.

#### 5. „Heilungsprogramm" – problematische Bezeichnung

**IST:** „Das erste Heilungsprogramm speziell für lesbische Frauen & WLW" (Zeile 2760)
**SOLL:** „Das erste Selbsthilfeprogramm speziell für lesbische Frauen & WLW"
**Warum relevant:** Die Bezeichnung „Heilungsprogramm" suggeriert therapeutische Wirkung und kann HWG-Relevanz auslösen. Das Marketing-Konzept warnt explizit davor, mit therapeutischer Wirkung zu werben. Der eigene Impressums-Text (Zeile 4212) definiert UNBOND korrekt als „digitales Selbsthilfe-Informationsprodukt" und betont die FernUSG-Abgrenzung. Die Hero-Sektion (Zeile 2483) spricht korrekt von „Selbsthilfeprogramm" – aber die eBook-Sektion widerspricht dem.
**Empfehlung:** Durchgehend „Selbsthilfeprogramm" oder „Begleitprogramm" verwenden. Nie „Heilung", „heilt", „therapiert".

---

### Wichtige Optimierungen (Prio 2 – innerhalb 1–2 Wochen)

#### 6. Impressum unvollständig

**IST:** „Ingeborg-Drewitz-Allee [Hausnummer bitte ergänzen]" (Zeile 4199)
**SOLL:** Vollständige Adresse mit Hausnummer
**Warum:** Ein unvollständiges Impressum verstößt gegen § 5 TMG / § 5 DDG und kann abgemahnt werden.

#### 7. Social Proof Bar entfernt

**IST:** `<!-- SOCIAL PROOF BAR REMOVED -->` (Zeile 2458)
**SOLL:** Entweder echte Kennzahlen anzeigen oder strategisch platzieren
**Empfehlung:** Für Phase 1 weglassen (ehrlich). Sobald echte Zahlen vorhanden sind (z. B. „500+ Toxicometer-Tests durchgeführt"), einbauen. Fake-Zahlen sind kontraproduktiv.

#### 8. Datenschutz-Platzhalter bei Google Fonts

**IST:** Datenschutzerklärung enthält „[Platzhalter: ggf. Self-Hosting als Alternative ergänzen]" (Zeile 4228)
**SOLL:** Entweder Google Fonts selbst hosten (DSGVO-sicherer) oder den Platzhalter-Text durch eine klare Erklärung ersetzen
**Empfehlung:** Google Fonts lokal hosten. Das eliminiert den externen Verbindungsaufbau zu Google-Servern, vereinfacht die DSGVO-Erklärung und beschleunigt die Ladezeit. Alternativ: Platzhalter-Text entfernen und aktuelle Rechtslage korrekt beschreiben.

#### 9. Meta-Description hat doppeltes Anführungszeichen

**IST:** `content="...wissenschaftlich fundiert."">`  (Zeile 10) – doppeltes `"` am Ende
**SOLL:** Korrektes Schließen des Attributs
**Warum:** Kann bei manchen Parsern die OG-Meta-Daten brechen und Social-Media-Previews beeinträchtigen.

#### 10. Kein Schema-Markup (FAQPage, Product)

**IST:** Keine strukturierten Daten
**SOLL:** FAQPage-Schema für die FAQ-Sektion + Product-Schema für das eBook
**Warum:** FAQ-Schema kann Rich Snippets in Google-Suchergebnissen auslösen – besonders wertvoll für die Low-Competition-Keywords wie „toxische Beziehung lesbisch". Das Marketing-Konzept empfiehlt explizit Schema-Markup für FAQs und Kurse.

#### 11. Cookie-Banner erwähnt nur Google Fonts

**IST:** „Diese Seite verwendet Google Fonts (externe Ressource)" (Zeile 2451)
**SOLL:** Auch Brevo-Integration erwähnen (send_to_brevo.php sendet Daten an externen Server)
**Warum:** Die Brevo-Verbindung bei Email-Opt-in ist eine Datenübertragung an einen Drittanbieter. Das muss im Cookie-Banner oder zumindest in der Datenschutzerklärung transparent sein. Die Datenschutzerklärung erwähnt Brevo (Zeile 4230), aber der Cookie-Banner nicht.

#### 12. Exit-Intent-Popup nur bei Desktop

**IST:** Exit-Intent basiert auf `mouseleave` (Zeile 4107) – funktioniert nur mit Maus
**SOLL:** Mobile Alternative einbauen (z. B. Scroll-basiert: wenn Nutzerin nach oben scrollt oder nach X Sekunden Inaktivität)
**Warum:** Laut Marketing-Konzept ist die Zielgruppe 25–45 Jahre – diese Altersgruppe nutzt primär Mobile. Ein Exit-Intent, der nur am Desktop funktioniert, verpasst den Großteil der Zielgruppe.

---

### Strategische Verbesserungen (Prio 3 – Phase 2)

#### 13. Ergebnis-Preview vor Email-Gate fehlt

**IST:** Nach dem ToxiCometer wird das Ergebnis im Result-Modal angezeigt, dann kommt die Opt-in-Gabel mit Zustandsauswahl und Email-Eingabe
**SOLL:** Kurze Ergebnis-Vorschau OHNE Email, dann Email-Gate für den vollständigen Report
**Warum:** Das Marketing-Konzept empfiehlt explizit den „Foot-in-the-door"-Effekt: Ergebnis-Preview VOR dem Email-Gate zeigen. Das macht Nutzerinnen 2× wahrscheinlicher bereit, die Email anzugeben. Aktuell wird das psychologische Profil im Modal angezeigt und DANN die Email-Abfrage – das ist bereits nah dran, aber der Flow könnte noch klarer getrennt werden (Teaser → Gate → Vollreport).

#### 14. send_to_brevo.php – Fehlerbehandlung

**IST:** Bei Exit-Intent-OptIn (Zeile 4166): `catch(e) { /* silent fail – still show success */ }` – Nutzerin bekommt Erfolgs-Feedback, auch wenn der Request fehlschlägt
**SOLL:** Zumindest eine neutrale Bestätigung, die nicht verspricht, dass die Email angekommen ist
**Warum:** Eine Nutzerin, die ihren Report nie erhält, verliert das Vertrauen endgültig.

#### 15. Bildoptimierung fehlt

**IST:** Bilder (suchtkreislauf.png etc.) haben `width="1024" height="1024"` – volle Größe, kein `srcset`, kein WebP
**SOLL:** Responsive Bilder mit `srcset` und modernen Formaten (WebP/AVIF)
**Warum:** Ladezeit beeinflusst Core Web Vitals und damit SEO-Rankings. Bei Mobile-Nutzerinnen (Hauptzielgruppe) besonders relevant.

#### 16. Kein Favicon-Fallback

**IST:** `<link rel="icon" type="image/png" href="favicon.png">` – nur ein Format
**SOLL:** Zusätzlich Apple Touch Icon und SVG-Fallback
**Warum:** Detail-Optimierung für verschiedene Browser und Geräte.

#### 17. Chart.js aus CDN geladen

**IST:** `<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>` (Zeile 19)
**SOLL:** Lokal hosten oder Version pinnen (`chart.js@4.x.x`)
**Warum:** Externe CDN-Abhängigkeit kann brechen (Version-Update, CDN-Ausfall). Außerdem eine zusätzliche externe Verbindung, die in der Datenschutzerklärung erwähnt werden sollte.

---

## Teil 2: Analyse des Hetero-Inklusions-Statements

### Die Frage

Auf der Landing Page steht direkt unter dem Hero-CTA:

> 🌍 **Auch für heterosexuelle Frauen:** Die Inhalte sind für Beziehungen zwischen Frauen optimiert – die beschriebenen Phänomene wie Trauma Bonding, Gaslighting und Narzissmus sind jedoch **geschlechtsunabhängig** und lassen sich 1:1 auf jede Beziehungskonstellation übertragen.

Zusätzlich gibt es eine FAQ-Frage: „Kann ich UNBOND auch nutzen, wenn ich heterosexuell bin?"

### Empfehlung: Statement aus dem Hero entfernen, nur in der FAQ behalten

**Warum das Hero-Statement die Marke verwässert:**

1. **Positionierungs-Widerspruch:** Der gesamte Hero kommuniziert: „Speziell für lesbische & queere Frauen – kein hetero-zentrischer Ratgeber." Direkt darunter steht: „Auch für heterosexuelle Frauen." Das ist ein klassischer Positionierungsfehler – wer für alle ist, ist für niemanden. Die Kernzielgruppe (queere Frauen) fühlt sich weniger gesehen, wenn der nächste Absatz das Alleinstellungsmerkmal relativiert.

2. **First-Mover-Vorteil wird geschwächt:** Das Marketing-Konzept identifiziert die Nische „queer + toxische Beziehung" als den strategisch wertvollsten Vorteil von UNBOND. Es gibt **keinen** DACH-Wettbewerber in dieser Nische. Diesen Vorteil im Hero zu relativieren, ist strategisch kontraproduktiv.

3. **SEO-Signalvermischung:** Die Meta-Description, der Title-Tag und die H1 kommunizieren klar „lesbische Frauen & WLW". Das Hetero-Statement sendet ein widersprüchliches Signal an Suchmaschinen über die tatsächliche Zielgruppe der Seite.

4. **Conversion-Psychologie:** Queere Frauen, die endlich ein Programm finden, das explizit für sie gemacht ist, erleben einen starken Identifikationsmoment. Das Statement „auch für heterosexuelle Frauen" bricht diesen Moment. Es signalisiert: „Du bist nicht die Hauptzielgruppe – du bist eine von vielen."

**Warum die FAQ-Version funktioniert:**

Die FAQ „Kann ich UNBOND auch nutzen, wenn ich heterosexuell bin?" ist strategisch korrekt. Sie beantwortet eine legitime Frage, ohne die Hero-Positionierung zu verwässern. Wer diese Frage hat, scrollt ohnehin zum FAQ-Bereich. Die Antwort dort ist sachlich und gut formuliert.

**Konkreter Vorschlag:**

- **Hero:** Hetero-Note-Div komplett entfernen (Zeilen 2495–2503)
- **FAQ:** Bestehende FAQ-Antwort beibehalten – sie ist gut formuliert
- **Optional:** Auf einer separaten „Über UNBOND"-Seite oder im Blog einen Artikel „Ist UNBOND nur für lesbische Frauen?" veröffentlichen, der die Universalität der Inhalte erklärt und gleichzeitig die Nischen-Positionierung stärkt

---

## Teil 3: Schritt-für-Schritt-Anleitung

### Phase A: Kritische Fixes (Woche 1)

| # | Aufgabe | Aufwand | Priorität |
|---|---------|---------|-----------|
| A1 | Kauflink einrichten: CopeCart-Account erstellen, eBook hochladen, Preis 24 € setzen, Kauflink auf Landing Page ersetzen | 2–3 Stunden | Höchste |
| A2 | Fragenanzahl korrigieren: „25 Fragen" → „15 Fragen", „3 Minuten" → „2 Minuten" | 5 Minuten | Höchste |
| A3 | Preis anpassen: 27 € → 24 € (Preisanzeige in Zeile 2784) | 5 Minuten | Hoch |
| A4 | „Heilungsprogramm" → „Selbsthilfeprogramm" (Zeile 2760) | 5 Minuten | Hoch |
| A5 | Testimonials-Sektion entfernen oder durch Feature-Sektion ersetzen | 30 Minuten | Hoch |
| A6 | Hetero-Note aus Hero entfernen (Zeilen 2495–2503) | 5 Minuten | Hoch |
| A7 | Impressum: Hausnummer ergänzen (Zeile 4199) | 5 Minuten | Hoch |
| A8 | OG-Meta doppeltes Anführungszeichen fixen (Zeile 10) | 2 Minuten | Mittel |

### Phase B: Wichtige Verbesserungen (Woche 2–3)

| # | Aufgabe | Aufwand | Priorität |
|---|---------|---------|-----------|
| B1 | Google Fonts lokal hosten: Fonts herunterladen, als lokale Dateien einbinden, externe Google-Links entfernen | 1 Stunde | Hoch |
| B2 | Datenschutz-Platzhalter fixen: Google-Fonts-Passage aktualisieren, Brevo-Erwähnung prüfen | 30 Minuten | Hoch |
| B3 | Cookie-Banner um Brevo-Hinweis erweitern (oder in Datenschutzerklärung deutlicher machen) | 30 Minuten | Mittel |
| B4 | FAQPage-Schema-Markup hinzufügen (JSON-LD im Head) | 45 Minuten | Mittel |
| B5 | Product-Schema-Markup für eBook hinzufügen | 30 Minuten | Mittel |
| B6 | Mobile Exit-Intent implementieren (scroll-basiert oder timeout-basiert) | 1–2 Stunden | Mittel |
| B7 | Chart.js lokal hosten oder Version pinnen | 15 Minuten | Niedrig |

### Phase C: Strategische Optimierungen (Monat 2+)

| # | Aufgabe | Aufwand | Priorität |
|---|---------|---------|-----------|
| C1 | Echte Testimonials sammeln: Beta-Leserinnen über Telegram/Instagram rekrutieren | Laufend | Hoch |
| C2 | Ergebnis-Preview vor Email-Gate klarer trennen (Foot-in-the-door) | 2–3 Stunden | Mittel |
| C3 | Bildoptimierung: WebP-Versionen erstellen, srcset einbauen | 1–2 Stunden | Mittel |
| C4 | send_to_brevo.php: Fehlerbehandlung bei Exit-Intent verbessern | 30 Minuten | Niedrig |
| C5 | SEO-Blogartikel „Toxicometer: Ist meine Beziehung toxisch?" veröffentlichen | 3–4 Stunden | Hoch |
| C6 | Social Proof Bar mit echten Zahlen einbauen (sobald vorhanden) | 30 Minuten | Mittel |

---

## Teil 4: Zusammenfassung – Was gut funktioniert

Nicht alles muss geändert werden. Folgende Elemente sind bereits stark:

- **ToxiCometer-Integration direkt auf der Landing Page** – strategisch goldrichtig. Das Quiz als embedded Element (statt externer Link) minimiert Friction und hält Nutzerinnen auf der Seite.
- **Profilbasiertes Ergebnis mit Radar-Chart** – die psychologischen Profile (Narzisstisch, Borderline-ähnlich, Covert etc.) mit visueller Darstellung sind ein starker Differenzierungsfaktor.
- **Brevo-Integration mit Zustandsabfrage** (Gabel: „Noch in der Beziehung" / „Frisch getrennt" / „Schon länger raus") – ermöglicht segmentierte Email-Sequenzen. Das ist fortgeschrittenes Email-Marketing.
- **Exit-Intent-Logik** – wird nur angezeigt, wenn der Test abgeschlossen aber kein Report angefordert wurde. Intelligente Bedingungslogik, nicht nervig.
- **DSGVO-Checkbox bei Opt-in** – korrekt implementiert mit Validierung.
- **Glasmorphismus-Design** – visuell konsistent, modern, passt zum Thema (Tiefe, Schichten, Durchscheinen).
- **SEO-Grundlagen** – Meta-Title, Description und Keywords sind vorhanden und enthalten die wichtigsten Nischen-Keywords.
- **FAQ-Sektion** – inhaltlich stark, adressiert die richtigen Fragen, SEO-relevant.
- **FernUSG-Hinweis im Impressum** – rechtlich vorausschauend und korrekt formuliert.
- **Zugangs-Modal für Bestandskäuferinnen** – gute UX-Entscheidung, zeigt Professionalität.

---

*Diese Analyse basiert auf dem UNBOND Marketing-Konzept (April 2026), der Systemanweisung sowie der vollständigen Code-Analyse der index_v15.html (4.230 Zeilen). Alle Zeilenangaben beziehen sich auf die aktuelle Version der Datei.*
