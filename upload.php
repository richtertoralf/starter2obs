<?php
session_start(); // Session starten, um $_SESSION zu verwenden

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["csvFile"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . "Startliste.csv";
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($_FILES["csvFile"]["name"], PATHINFO_EXTENSION));

    // Überprüfen Sie, ob die Datei eine CSV-Datei ist
    if ($fileType != "csv") {
        $_SESSION["upload_message"] = "Nur CSV-Dateien sind erlaubt.";
        $uploadOk = 0;
    }

    // Überprüfen Sie die Dateigröße (optional)
    if ($_FILES["csvFile"]["size"] > 1000000) {
        $_SESSION["upload_message"] = "Die Datei ist zu groß.";
        $uploadOk = 0;
    }

    // Wenn keine Fehler vorliegen, die Datei auf dem Server speichern und überprüfen
    if ($uploadOk) {
        if (move_uploaded_file($_FILES["csvFile"]["tmp_name"], $targetFile)) {
            // Überprüfen Sie die Spaltenköpfe der CSV-Datei
            $requiredHeaders = array("Name", "Vorname", "Verein", "Verband", "StNr", "Klasse", "Strecke", "Startzeit", "Jahrgang", "Geschlecht", "Nation");
            $file = fopen($targetFile, "r");
            $fileHeaders = fgetcsv($file);

            if ($fileHeaders !== false && count(array_diff($requiredHeaders, $fileHeaders)) === 0) {
                // CSV-Datei hat die erforderlichen Spaltenköpfe
                $rowCount = 0;
                while (($row = fgetcsv($file)) !== false) {
                    // Verarbeiten Sie die Zeilen der CSV-Datei hier nach Bedarf
                    $rowCount++;
                }
                fclose($file);
                $_SESSION["upload_message"] = "Die Datei wurde hochgeladen und als 'Startliste.csv' gespeichert. Anzahl der Starter: $rowCount";

                // Führe starterAnzeige.js aus (Ajax-Aufruf)
                echo '<script src="js/starterAnzeige.js"></script>';
            } else {
                $_SESSION["upload_message"] = "Die CSV-Datei hat nicht die erforderlichen Spaltenköpfe und wurde deshalb nicht gespeichert";
            }
        } else {
            $_SESSION["upload_message"] = "Beim Hochladen der Datei ist ein Fehler aufgetreten.";
        }
    }
    // Wenn ein Fehler auftritt, zurück zur Hauptseite mit der Fehlermeldung
    header("Location: view.php");
    exit();
}
?>
