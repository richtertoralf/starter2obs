>Tool um Daten aus Winlaufen mit OBS-Studio zu nutzen - Starter anzeigen  
>Diese Webanwendung kann als Browserquelle direkt in OBS-Studio eingebunden werden.

# Projektname: Starter2OBS

## Beschreibung:
Starter2OBS ist ein Webanwendungsprojekt, das zur Verwaltung und Anzeige von Starterdaten für Skisportveranstaltungen entwickelt wurde. Die Anwendung ermöglicht die einfache Authentifizierung von Benutzern, das Hochladen von Starterlisten im CSV-Format und die Anzeige von Starterinformationen in Echtzeit.

## Funktionen:

### Anmeldung und Benutzerauthentifizierung:
Die Anwendung bietet eine Anmeldeseite, auf der Benutzer ihre Anmeldeinformationen eingeben können. Die Benutzerauthentifizierung erfolgt anhand von Benutzername und Passwort, die in einer Konfigurationsdatei (config.json) gespeichert sind.

### Hochladen von Starterlisten:
Benutzer können CSV-Dateien hochladen, die Starterinformationen enthalten. Die Anwendung überprüft die Datei auf das richtige Format und die erforderlichen Spaltenköpfe.

### Echtzeit-Anzeige von Starterinformationen:
Nach dem Hochladen einer Starterliste werden die Starterinformationen in Echtzeit angezeigt. Die Anwendung aktualisiert die Anzeige alle 5 Sekunden und zeigt die Starter an, die innerhalb den nächsten 10 Sekunden starten werden.

### Verschieben von Anzeigelementen:
Die Anwendung ermöglicht es Benutzern, Anzeigeelemente auf der Benutzeroberfläche, auch in OBS-Studio, zu verschieben und die neuen Positionen anzuzeigen. Dies erleichtert die Anpassung der Anzeige an individuelle Bedürfnisse.

## Technologien:

PHP für die Backend-Logik
HTML, CSS und JavaScript für die Benutzeroberfläche und die Anzeige von Starterinformationen
CSV-Dateien für die Speicherung der Starterdaten
XMLHttpRequest für die Aktualisierung der Anzeige in Echtzeit
PHP-Session-Management für die Benutzerauthentifizierung und die Speicherung von Benachrichtigungen

## Verwendung:
- Klone das Repository auf deinem lokalen Computer oder einem Server in der Cloud
- Konfiguriere die Anmeldedaten (Benutzer und Passwort) in der config.json-Datei.
- Starte die Anwendung auf einem Webserver, der PHP unterstützt.
- Binde die Webanwendung als Browserquelle in OBS-Studio ein
- Melde dich an, um die Starterdaten hochzuladen und anzuzeigen. Das geht in OBS über den Button "interagieren".

>Hinweis: Stelle sicher, dass alle erforderlichen Abhängigkeiten und Webserverkonfigurationen gemäß den Anforderungen der verwendeten Technologien installiert und durchgeführt sind.

## dringend abzuändern
- Die Benutzer und Passwortdaten in der Datei config.json sind zu hashen
- die Datei ist z.B. nach /etc/starter2obs zu verschieben.
- cloud-init für die schnelle Installation auf einem vServer z.B. Hetzner erstellen

## sinnvolle Erweiterungen
- Doppelstart implementieren
- individueller Start, ohne Zeit, z. B. wie beim Skispringen implementieren

## optionale Ereiterungen
- die nächsten 10 Starter in einem Fenster laufend anzeigen





