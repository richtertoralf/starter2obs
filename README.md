# starter2obs
Tool um Daten aus Winlaufen mit OBS-Studio zu nutzen - Starter anzeigen

## Beschreibung:
Starter2OBS ist eine Webanwendung, die für die Darstellung von Startinformationen in Echtzeit entwickelt wurde. Die Anwendung liest Startdaten aus einer CSV-Datei aus und zeigt sie dynamisch auf einer Webseite an. Dieses Projekt ist besonders für den Einsatz in Sportveranstaltungen geeignet, wo Echtzeitinformationen über Starter benötigt werden.

## Funktionalitäten:

### Benutzerauthentifizierung
Die Anwendung erfordert eine Benutzeranmeldung. Unangemeldete Benutzer werden auf die Anmeldeseite weitergeleitet.
### Echtzeitaktualisierung
Die Anwendung aktualisiert die Startinformationen alle 5 Sekunden, um die neuesten Daten anzuzeigen.
Dynamische Datendarstellung: Die Startnummer, Startzeit, Vorname, Nachname, Verein, Verband und Nationalität des aktuellen Starters werden dynamisch auf der Webseite angezeigt.
### CSV-Datenverarbeitung
Die Anwendung verwendet eine CSV-Datei mit Starterinformationen, die einmalig beim Laden der Webseite in den Browser über einen XMLHttpRequest geladen und verarbeitet werden.

### Verwendete Technologien
- Frontend: HTML, CSS, JavaScript
- Backend: PHP (für Benutzerauthentifizierung)
- Datenverarbeitung: JavaScript für das Parsen und Verarbeiten von CSV-Daten
- Datenquelle: CSV-Datei mit Starterinformationen

### Anleitung zur Verwendung
Anmeldung: Benutzer müssen sich anmelden, um Zugang zur Startinformationsseite zu erhalten.
Datenquelle: Stellen Sie sicher, dass die CSV-Datei (StartlisteEinzelstart.csv) im richtigen Format vorliegt und die erforderlichen Datenfelder enthält.
Echtzeitaktualisierung: Die Startinformationen werden automatisch alle 5 Sekunden aktualisiert, um die neuesten Starterdaten anzuzeigen.
Darstellung: Die aktuellen Starterinformationen, einschließlich Startnummer, Startzeit, Vorname, Nachname, Verein, Verband und Nationalität, werden auf der Webseite angezeigt.
Hinweis: Dieses Projekt ist ein Beispiel für die Verarbeitung und Anzeige von Echtzeitdaten aus einer CSV-Datei und kann an spezifische Anforderungen angepasst werden. Es dient als Grundlage für die Entwicklung ähnlicher Anwendungen, die Echtzeitinformationen anzeigen müssen.

Autor:
Toralf Richter

Lizenz:
noch offen
