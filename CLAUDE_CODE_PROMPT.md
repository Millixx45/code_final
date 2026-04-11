# UNBOND – Content-Erweiterung: Claude Code Prompt

## Projektübersicht

Du arbeitest an **UNBOND – Breaking Chains**, einem HTML-basierten 10-Schritte-Begleitprogramm für lesbische/queere Frauen nach toxischen Beziehungen. Die Datei ist eine monolithische Single-Page-App:

**Datei:** `UNBOND_Breaking_Chains_replit_per_12

### Technische Architektur
- Single HTML file mit eingebettetem CSS (`:root`-Variablen) und JS
- Sections als `<div class="section-page" id="section-XXX">` — nur `.active` wird angezeigt
- Hamburger-Navigation mit Sidebar (`.side-nav`)
- Jedes Modul folgt dem Muster: **Einleitung - Story → Diagnose → Lösung → Übungen → Deep Dive**
- CSS-Variablen: `--bordeaux`, `--sage-green`, `--terracotta`, `--mauve`, `--cream`, `--graphite`, `--dark-green`, `--warning`
- Fonts: Montserrat (Überschriften), Lato (Fließtext)
- Responsive Design mit Media Queries vorhanden

### Section-IDs (Reihenfolge)
```
section-cover → section-vorwort → section-toc → section-einleitung
→ section-toxicometer → section-routing → section-kapitel0
→ section-modul1 … section-modul10 → section-glossar – section Bonusmodule D,F,E
```

### Referenzdokument
Lies GitHub/code_final/unbond_gap_analyse.pplx.md` – dort findest du die vollständige Gap-Analyse mit allen 15 Lücken, Modulzuordnungen, Lernzielen, Disclaimern und konkreten Übungen. Achtung die Bonusmodule werden dort als nicht vorhanden ausgewiesen, diese wurden jedoch mitlerweile erstellt. Sie weichen an manchen Stellen von der gängigen Formatierung ab, bitte korrigiere die Formatierung und passe sie den anderen Modulen an. Hochgeladen fidnest du auch zwei Mary und Sandra Fotos, die du jeweils links neben die Story setzt (achte darauf, dass das Design und die Formatierung einheitlich bleibt) 

---

## Strategie: Minimaler Umbau, maximaler Impact

### Grundprinzip
1. **Zuerst bestehende Kapitel anreichern** — neue Unterabschnitte innerhalb bestehender `section-page`-Divs einfügen
2. **Neue Inhalte als Bonusmodule** — am Ende vor `section-glossar` einfügen, sodass die bestehende Modulreihenfolge unverändert bleibt
3. **Navigation ergänzen** — nur die Sidebar-Links und das Inhaltsverzeichnis aktualisieren
4. **Kein Renumbering** — Modul 1-10 und Bonusmodule bleiben bleiben, neue Kapitel werden als fortführende Bonusmodule ausgewiesen und bekommen neue ID´s





Beispielhaftes Vorgehen bei der Kapitelerstellung

Inhalt erstellen:
- **Story-Abschnitt** (Mary & Sandra): Erstelle einen Geschichte, passend zu den Geschichten der anderen Kapitel
- **Diagnose:** Psychoedukation zu Thema als eigenständiger, wissenschaftlih orientierter TExt - **Lösung:** wissenschaftlich fundierte Lösung und Anleitung zur Lösung des Problems unter Diagnose
--- **Deep Dive Box:** wissenschaftlich Fundierte Rweiterung des Themas, Keypoints
- **3 interaktive Übungen 
Eventuell zusätzliche Unterkapitel 
--Transformationsziele


PHASE 1: Überprüfung: Bestehende Kapitel anreichern (Priorität HOCH 🔴
Folgende Inhalte wurden in einem zweiten Schritt bereits angereichert, bitte überprüfe die Umsetzung und sollte etwas fhelen, erstelle die passenden Inhalte wie folgt: )

1.1 → section-modul4 (Schritt 04: No Contact) – Breadcrumbing & Digitale Manipulation
Einfügeort: Nach dem bestehenden No-Contact-Kontrakt-Abschnitt, vor dem Deep Dive.
Neues Unterkapitel 4.2: „Breadcrumbing – Die Krümel-Falle"
Inhalt erstellen:
• Story-Abschnitt (Mary & Sandra): Sandra schickt nach 3 Wochen No Contact ein einzelnes Herz-Emoji um 23:47 Uhr. Mary greift nach dem Handy, Herzschlag rast – der Dopamin-Kick ist stärker als jede rationale Entscheidung.
• Diagnose: Psychoedukation zu Breadcrumbing als eigenständigem Manipulationsmuster. Erklärung: Minimale Signale (Emoji, Like, Story-Aufruf, Unblockieren) die Hoffnung reaktivieren, ohne echtes Beziehungsangebot. Neurobiologischer Mechanismus: Intermittierende Verstärkung → Variable Ratio Schedule (wie Spielautomaten).
• Lösung: 24h-Pause-Protokoll: „Reagiere nie in den ersten 24 Stunden. Schreibe stattdessen in dein Journal, was dein Gehirn erhofft."
• Übung: Breadcrumb-Decoder (als interaktive Übung mit aufklappbaren Feldern):
• 7 Tage lang jedes minimale Signal notieren
• Pro Signal 3 Spalten: (1) Was war das Signal? (2) Was hoffte mein Gehirn? (3) Ist diese Hoffnung realistisch?
• Erkenne das Muster: Signale ohne Substanz = Kontrolle, nicht Liebe
• Disclaimer-Box (wie bestehende Krisen-Banner im Code): „Bei Kontaktaufnahme mit bedrohlichem Charakter: Krisenhotline 0800 111 0 111 (kostenlos, 24/7). Dieses Modul ersetzt keine rechtliche Beratung."
Neues Unterkapitel 4.3: „Digitale Manipulation – Die Blockade-Psychologie"
Inhalt erstellen:
• Story-Abschnitt: Sandra blockiert Mary auf Instagram. Zwei Tage später entblockt sie – Mary sieht die Story „Glücklich wie nie" mit der Neuen. Am nächsten Tag: wieder blockiert.
• Diagnose: Erklärung des bewussten Blockierens/Unblockierens als Kontrolldemonstration. Digitale Signale als Trigger: Emojis, Likes, Story-Aufrufe. „Jeder Benachrichtigungston kann zum Trigger werden."
• Lösung: Digitale Kontakt-Hygiene — konkrete Schritte:
1. Alle Benachrichtigungen von Konten der Ex deaktivieren
2. Mute/Restrict statt Blockieren (um Nachricht zu vermeiden)
3. 48h-Wartefenster für jede digitale Reaktion
• Übung: Emoji-Immunität (interaktiv):
• Nimm dein Handy, öffne Social Media
• Deaktiviere alle Benachrichtigungen von Konten der Ex
• Schreibe: „Was erhoffe ich mir, wenn ich auf ein Emoji antworte?"
• Lies deine Antwort laut vor. Warte 48h. Hat sich die Hoffnung je erfüllt?
• Deep Dive Box: Intermittent Reinforcement erklärt (Fisher, Arabi) — warum das Gehirn auf unvorhersagbare Belohnung stärker reagiert als auf konstante

1.2 → section-modul3 (Schritt 03: Rosa-Brille abnehmen) – Gaslighting-Alltagsprotokoll
Einfügeort: Nach dem bestehenden Gaslighting-Log, vor dem Deep Dive.
Neues Unterkapitel 3.5: „Gaslighting-Notbremse – In-the-Moment-Protokoll"
Inhalt erstellen:
• Story: Sandra sagt: „Das habe ich nie gesagt. Du bist paranoid." Mary zweifelt – hat sie sich das wirklich eingebildet?
• Diagnose: Psychoedukation zu Erklärungsschleifen: Warum Beweisen und Argumentieren bei Gaslighting nie hilft. Die Gaslighterin braucht deine Zustimmung zu ihrer Version, nicht die Wahrheit.
• Lösung: 3-Schritt-Notbremse:
1. NICHT erklären – stoppe den Impuls, dich zu rechtfertigen
2. Notieren – schreibe sofort auf, was passiert ist (Uhrzeit, Worte, Fakten)
3. Rote-Kreuz-Stopp – sage innerlich: „Ich brauche ihre Zustimmung nicht, um meine Realität zu kennen."
• Übung: Wahrnehmungs-Anker (interaktiv):
• Nimm ein Notizbuch und notiere jeden Abend die 3 wichtigsten Ereignisse des Tages (Uhrzeit, konkrete Worte, Fakten)
• Wenn Nachrichten von der Ex Dinge anders darstellen: Schau in deine Notizen
• Deine Aufzeichnung ist dein Beweis
• Disclaimer: „Gaslighting kann tiefe Zweifel an der eigenen Wahrnehmung hinterlassen. Bei persistenter Realitätsunsicherheit: professionelle Hilfe empfohlen."

1.3 → section-modul9 (Schritt 09: Bindungsmuster & Inneres Kind) – 4 neue Unterabschnitte
Schritt 09 wird am stärksten erweitert. Füge die folgenden Unterabschnitte nach dem bestehenden „Inneres Kind"-Abschnitt ein:
Unterkapitel 9.2: „Weaponized Diagnosis – Wenn deine Geschichte zur Waffe wird"
• Story: Sandra sagt zu Mary: „Kein Wunder, bei deiner Vergangenheit mit Alkohol. Du bist nicht stabil genug für eine Beziehung."
• Psychoedukation: Weaponized Diagnosis — Täterinnen nutzen ADHS, Suchtgeschichte oder Therapie als Kontrollmittel
• Übung: Clean-Narrativ — 3 Schritte:
1. Meine Heilungsgeschichte in 3 Sätzen (ohne Wertung, nur Fakten)
2. Wie hat sie dieses Wissen gegen mich eingesetzt?
3. Was würde ich einer Freundin mit derselben Geschichte sagen? → Brief an mich selbst
• Disclaimer: „Substanzabhängigkeit und ADHS erfordern medizinische Begleitung. Dieses Modul ersetzt keine Suchttherapie."
Unterkapitel 9.3: „Schema-Wurzeln – Warum ich anfällig war"
• Story: Mary erkennt in der Therapie, dass Sandras Love-Bombing exakt das füllte, was ihre Mutter nie gab – bedingungslose Aufmerksamkeit.
• Psychoedukation: Einführung in 5 Schema-Domänen (nach Young), besonders Domäne 1 (Abgetrenntheit & Ablehnung) und 4 (Fremdbezogenheit)
• Übung: Schema-Entdecker — Selbstcheck:
1. Lies die 5 Domänen und wähle die 2-3 resonantesten Schemata
2. Schreibe: „Wann habe ich dieses Schema zum ersten Mal gespürt?" (Kindheit)
3. „Wie hat das Love-Bombing dieses Schema kurz ‚geheilt'?"
4. Erkenne: Die Anziehung war real – sie wurde von einem echten Bedürfnis gespeist
• Disclaimer: „Schema-Therapie in der Tiefe erfordert professionelle Begleitung. Dieses Modul gibt erste Orientierung."
Unterkapitel 9.4: „Parts Work – Deine inneren Anteile verstehen"
• Story: Mary hört zwei Stimmen in sich – eine will zurück zu Sandra, die andere weiß, dass es Gift ist. Beide schreien gleichzeitig.
• Psychoedukation: IFS-Grundkonzepte — Exiles (verbannte verletzliche Anteile), Manager (kontrollierende Beschützer), Firefighter (reaktive Beschützer). Das Kern-Selbst als ruhiger innerer Zeuge.
• Übung: Anteile-Interview (5 Min. täglich):
1. „Welcher Teil von mir will zurück?" – Lass diesen Anteil sprechen
2. Antworte aus deinem Kern-Selbst: „Ich verstehe deine Angst. Du versuchst mich zu schützen."
3. Wiederhole täglich, bis sich der Anteil beruhigt
• Disclaimer: „Bei starker Dissoziation oder intensiven Flashbacks: IFS nur mit therapeutischer Begleitung."
Unterkapitel 9.5: „Selbstmitgefühl als Superkraft"
• Story: Mary versucht, nett zu sich selbst zu sein – aber sofort kommt: „Du hast es doch verdient. Du bist selbst schuld." Das ist kein Charakter. Das ist ein Symptom.
• Psychoedukation: CFT Drei-Systeme-Modell (Bedrohungs-, Antriebs-, Beruhigungssystem). Warum Selbstkritik nach narzisstischem Missbrauch automatisch anspringt. Der Widerstand gegen Selbstmitgefühl als Trauma-Symptom.
• Übung: Mitfühlender Brief:
1. Schreibe einen Brief an dich selbst wie an eine gute Freundin: „Liebe [Name], ich sehe, wie viel du durchgemacht hast..."
2. Sei konkret und mitfühlend
3. Lies den Brief laut vor
4. Spüre den Unterschied zur inneren Kritikerstimme
• Soothing Breathing: 6 Atemzüge mit verlängertem Ausatmen (Vagus-Aktivierung)
• Disclaimer: „CFT-Ansätze sind keine Medizin. Bei anhaltender Depression: fachärztliche Abklärung."

1.4 → section-modul8 (Schritt 08: WLW-Dynamiken) – Szene-Dynamiken & Internalisierte Homophobie
Unterkapitel 8.3: „Szene-Dynamiken – Wenn deine Community zum Minenfeld wird"
• Story: Mary meidet die einzige Lesbenbar der Stadt, weil Sandra dort Stammgast ist. Ihre Freundinnen fragen: „Warum kommst du nicht mehr?"
• Psychoedukation: Small-Pool-Problem. Szene-Exklusion als Missbrauchsfolge. Ersetzbarkeits-Mythos im Community-Kontext.
• Übung: Szene-Karte:
1. Zeichne eine mentale Karte aller Orte/Online-Spaces, wo die Ex präsent ist
2. Markiere: 🔴 hoher Trigger / ?? mittel / 🟢 sicher
3. Finde 3 neue Orte/Gruppen, wo sie nicht präsent ist
4. Besuche einen davon diese Woche
• Disclaimer: „Isolation ist ein Missbrauchseffekt. Du entscheidest, wann du dich in Gemeinschaftsräume traust."
Unterkapitel 8.4: „Internalisierte Homophobie als Trauma-Verstärker"
• Story: Mary fragt sich zum ersten Mal: „Habe ich den Missbrauch toleriert, weil ich tief drinnen glaubte, als queere Frau nicht mehr zu verdienen?"
• Reflexionsübung: Innere Botschaft entlarven:
1. Welche Sätze über queere Frauen hast du gehört (intern/extern)?
2. Welche hast du geglaubt?
3. Welche haben dazu beigetragen, Missbrauch zu tolerieren?
4. Schreibe eine Gegenbotschaft: „Queere Frauen verdienen Würde, Schutz und echte Liebe – genauso wie alle anderen."

1.5 → section-modul3 (Schritt 03) – Doppelstandard & Radical Acceptance
Unterkapitel 3.6: „Der Doppelstandard – Wenn sie mit der Neuen macht, was sie dir verweigerte"
• Story: Mary sieht auf Instagram: Sandra und die Neue beim gemeinsamen Urlaub. Sandra hatte Mary immer gesagt: „Ich bin nicht der Urlaubs-Typ."
• Übung: 3-Spalten-Wahrheit:
• Spalte A: Was hat sie mir verweigert?
• Spalte B: Was macht sie mit der Neuen?
• Spalte C: „Das ist ihr Muster, nicht mein Defizit."
• Lies Spalte C laut vor — so oft, bis du beginnst, es zu glauben.
Unterkapitel 3.7 (oder in Schritt 07): „Radical Acceptance – Sie wird sich nicht ändern"
• Psychoedukation: Radical Acceptance nach Durvasula/Linehan. Akzeptanz ≠ Zustimmung. Es ist keine Niederlage, sondern Befreiung.
• Übung: Acceptance-Protokoll:
1. Schreibe: „Ich akzeptiere, dass sie nicht die Person ist, die ich liebte."
2. Lies 10 Mal. Notiere alle Widerstände.
3. Antworte auf jeden: „Ja, und – das ändert das Gesamtmuster nicht."
4. 21 Tage wiederholen.
• Disclaimer: „Radical Acceptance bedeutet nicht, den Schmerz wegzumachen. Bei Suizidalität: Krisenhotline 0800 111 0 111."

1.6 → section-kapitel0 (Kapitel 0) – Love Addiction & Täterpsychologie
In Kap. 0.5 (Sucht-Check) erweitern: Love Addiction Framework (Mellody/Schaeffer)
• Ergänze nach dem bestehenden Sucht-Check:
• Love Addict/Avoidant-Tango als Erklärungsmodell
• Schaeffer-Tabelle: Liebessucht vs. gesunde Liebe (als interaktive Vergleichstabelle)
• Reparenting-Konzept: „Was gebe ich mir jetzt selbst, was in der Kindheit fehlte?"
• Übung: Tango-Erkenner: Links Love Addict, rechts Love Avoidant, konkrete Szenen zuordnen
In Kap. 0.3 (Narzissmus) erweitern: Täterpsychologie nach Bancroft
• Ergänze nach dem Weaponized Virtue Checker:
• Entitlement als Kernkonzept (Missbrauch als willentliches Verhalten, nicht Störung)
• Queere Adaption von Bancrofts Modell
• Übung: Entitlement-Check: 5 Verhaltensweisen aufschreiben → „Das ist Entitlement, nicht Reaktion auf mich"

PHASE 2: Überprüfung der neu erstellten Bonusmodule 
2.1 → Neues Bonusmodul: „Disenfranchised Grief – Trauerarbeit"
Section ID: section-bonus-grief
Navigationsgruppe: „BONUS" in der Sidebar
Inhalt:
• Story: Marys Freundin sagt: „Sei doch froh, dass du raus bist!" Mary denkt: „Aber niemand versteht, dass ich trauere."
• Psychoedukation: Disenfranchised Grief — warum toxische Beziehungen echte Trauer hinterlassen, die gesellschaftlich nicht anerkannt wird. Was man verliert: Zukunftstraum, Identität, verlorene Jahre, Bindung an Kinder.
• Übung: Verlust-Inventar (3 Spalten):
1. Was ich verloren habe (konkret)
2. Wie ich gerne getrauert hätte
3. Was mir hätte helfen sollen
• Sage laut: „Dieser Verlust ist real. Meine Trauer ist berechtigt."
• Abschiedsritual: Brief an das verlorene Ich
• Disclaimer: „Intensive Trauerarbeit kann vorübergehend destabilisieren. Telefonseelsorge: 0800 111 0 111."
2.2 → Neues Bonusmodul: „Forensische Dokumentation – Behördeneinsatz als Waffe"
Section ID: section-bonus-forensik
Inhalt:
• Story: Sandra droht: „Ich rufe das Jugendamt. Du bist psychisch instabil." Mary erstarrt – und genau das ist der Plan.
• Psychoedukation: Behörden (Polizei, Jugendamt, Anwaltsbriefe) als Eskalationstaktik. Rechtliche Grundlagen: Was darf sie, was nicht?
• Übung: Dokumentations-Chronik:
• Privates, verschlüsseltes Dokument erstellen
• Format: Datum, Uhrzeit, genaue Beschreibung jedes Vorfalls
• Screenshots sichern
• Für Schutz, nicht für Konfrontation
• Handlungsplan bei rechtlicher Bedrohung:
1. Anwaltskontakt aufnehmen
2. Beratungsstelle kontaktieren (Frauenhauskoordinierung: 08000 116 016)
3. Nicht auf Provokation reagieren
• Disclaimer: „⚠️ Dieses Modul ersetzt keine Rechtsberatung. Bei laufenden Verfahren sofort Anwaltskontakt."

---WICHTIG: Erstelle zuerst einen Plan, bevor du code schreibst, indem du fehlende Inhalte aufzeigst und beschreibst, wie du die Inhalte füllst. Mir angibst welche Abbildungen und Infografiken fehlen, ob es Wiederholungen gibt oder Unstimmigkeiten in der Konsistenz und spreche diesen mit mir ab. Am Besten Tabellarisch

## PHASE 3: Navigation & Inhaltsverzeichnis aktualisieren

### 3.1 Sidebar (`.side-nav`) erweitern
Füge nach dem Link zu Modul 10 eine neue Navigationsgruppe hinzu:

```html
<div class="nav-group">BONUS</div>
<a href="#" onclick="showSection('bonus-grief')"><span class="nav-num">B1</span> Trauerarbeit</a>
<a href="#" onclick="showSection('bonus-forensik')"><span class="nav-num">B2</span> Forensische Dok.</a>
```

### 3.2 Inhaltsverzeichnis (section-toc) erweitern
Füge am Ende der bestehenden TOC-Liste die Bonusmodule hinzu.

### 3.3 Progress-Bar-Berechnung anpassen
Die JS-Funktion für die Progress Bar muss die neuen Sections mitzählen.

---

## HTML/CSS-Patterns zum Nachahmen

### Übungs-Box (bestehend im Code)
```html
<div style="background:rgba(122,158,138,0.10);border-left:4px solid var(--sage-green);border-radius:12px;padding:22px 24px;margin:22px 0;">
  <div style="font-family:'Montserrat',sans-serif;font-weight:700;font-size:0.95rem;color:var(--dark-green);margin-bottom:10px;">
    ✍️ Übung: [TITEL]
  </div>
  <p>[ANLEITUNG]</p>
</div>
```

### Disclaimer/Krisen-Banner (bestehend)
```html
<div style="background:rgba(196,131,110,0.12);border-left:4px solid var(--terracotta);border-radius:12px;padding:18px 22px;margin:22px 0;">
  <strong style="color:var(--terracotta);">⚠️ Wichtig:</strong>
  <span>[DISCLAIMER TEXT]</span>
</div>
```

### Story-Abschnitt (bestehend)
```html
<div class="story-phase">
  <div class="phase-label">STORY</div>
  <p><em>[STORY TEXT MIT MARY & SANDRA]</em></p>
</div>
```

### Deep Dive Box (bestehend)
```html
<details style="margin:18px 0;">
  <summary style="font-family:'Montserrat',sans-serif;font-weight:700;font-size:0.92rem;color:var(--mauve);cursor:pointer;">
    🔬 Deep Dive: [TITEL]
  </summary>
  <div style="padding:14px 0 0;">
    [INHALT]
  </div>
</details>
```

### Diagnose-Abschnitt (bestehend)
```html
<div class="story-phase">
  <div class="phase-label" style="background:var(--bordeaux);">DIAGNOSE</div>
  <p>[PSYCHOEDUKATION]</p>
</div>
```

### Lösung-Abschnitt (bestehend)
```html
<div class="story-phase">
  <div class="phase-label" style="background:var(--sage-green);">LÖSUNG</div>
  <p>[LÖSUNG / TOOLS]</p>
</div>
```

---

## Arbeitsanweisungen

1. **Lies zuerst** die gesamte HTML-Datei, um die bestehenden Patterns zu verstehen
2. **Lies die Gap-Analyse** (`unbond_gap_analyse.pplx.md`) für Detailinfos zu jeder Lücke
3. **Arbeite phasenweise:** Phase 1 komplett → Phase 2 → Phase 3
4. **Innerhalb Phase 1:** Beginne mit überprüfung 1.1 (Modul 4 – Breadcrumbing), dann 1.2 (Modul 3), dann 1.3 (Modul 9 – 4 Unterkapitel), dann 1.4 (Modul 8), dann 1.5 (Modul 3 Ergänzungen), dann 1.6 (Kapitel 0)
5. **Teste nach jeder Phase** ob die Navigation funktioniert und die neuen Sections erreichbar sind. Sollte irgendwo die Möglochkeit bestehen bzw es beser ssein eine Infografik einzusetzen anstatt text, dann mache mich darauf aufmerksam. 
6. **Sprachstil:** Du-Ansprache (wie im Rest des Buchs). Story-Teile emotional und bildhaft. Diagnose-Teile sachlich mit Fachbegriffen. Übungen konkret und handlungsorientiert. 1. Queersensible Sprache
• Verzicht auf das Substantiv: Das Wort „Lesbe“ wird oft als abwertend oder reduzierend empfunden und ab sofort aus dem Wording gestrichen.
• Wertschätzende Formulierungen: Wir nutzen stattdessen respektvolle, inklusive und einladende Begriffe wie „lesbische Frauen“, „queere Frauen“, „WLW (Women Loving Women)“ oder sprechen von „sapphischen Beziehungen“.
• Validierung der Lebensrealität: Wenn wir über queere spezifische Themen sprechen (wie den kleinen Dating-Pool oder Community-Überschneidungen), tun wir das immer validierend und sachlich, um den sogenannten „Minority Stress“ als reale, strukturelle Belastung anzuerkennen, ohne Stereotypen zu bedienen.
2. Traumasensible Sprache
Traumasensibel zu schreiben bedeutet, der Leserin die Handlungsmacht (Agency) zurückzugeben und Scham abzubauen. Das erreichen wir durch folgende Anpassungen:
• Entpathologisierung: Reaktionen auf toxischen Liebeskummer werden niemals als „Verrücktheit“, „Drama“ oder „Schwäche“ bezeichnet. Wir benennen sie stets als das, was sie sind: kluge, neurobiologische Schutz- und Überlebensmechanismen des Körpers (wie kPTBS oder das Feuern der Amygdala).
• Schamentgiftung: Wir werten das Verhalten der Frauen nicht ab. Selbst dysfunktionale Reaktionen (wie das unzählige Schreiben von Nachrichten) benennen wir validierend als biologische Notwehr („Reactive Abuse“) und nicht als Fehler.
• Vom Opfer zur Gestalterin: Wir vermeiden es, Frauen passiv in der „Opferrolle“ festzuhalten. Die Sprache orientiert sich am Konzept deines Programms: Wir begleiten sie sprachlich vom „Opfer-Narrativ“ zur „Überlebenden“ und schließlich zur selbstbestimmten „Gestalterin“ ihres Lebens.
• Einladend statt fordernd: Ein traumatisiertes Nervensystem reagiert negativ auf Druck und harte Anweisungen. Übungen und Schritte werden daher stets als Optionen und Einladungen formuliert („Wenn es sich für dich sicher anfühlt, kannst du versuchen…“ oder „Ein erster, sanfter Schritt könnte sein…“).

7. **Konsistenz:** Verwende exakt die bestehenden CSS-Klassen und HTML-Patterns — keine neuen Styles erfinden
8. **Umfang pro Unterkapitel:** ~200-400 Zeilen HTML (wie die bestehenden Unterkapitel)
9. **Keine externen Abhängigkeiten** — alles bleibt in der einen HTML-Datei

---

## Checkliste nach Abschluss

- [ ] Alle 15 Lücken aus der Gap-Analyse überprüft
- [ ] Phase 1: 6 bestehende Module um insgesamt ~12 neue Unterkapitel erweitert
- [ ] Phase 3: Sidebar-Navigation enthält alle neuen Sections
- [ ] Phase 3: Inhaltsverzeichnis aktualisiert
- [ ] Phase 3: Progress Bar zählt neue Sections mit
- [ ] Jedes Unterkapitel enthält: Einleitung, Story, Diagnose, Lösung, mind. 3 Übungen, Transformtionziele (inklusive gamifikation, 3 von 5 müssen erfüllt sein)
- [ ] Alle Disclaimer enthalten konkrete Krisenhotline-Nummern
- [ ] HTML validiert (keine offenen Tags)
- [ ] Navigation funktioniert (showSection-Aufrufe korrekt)
- [ ] Sprachstil konsistent mit Rest des Buchs
.- alle Infografiken im richtigen Format integriert, alle abbildungen vorhanden
