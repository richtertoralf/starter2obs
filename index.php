<?php
session_start();

// Pfad zur Konfigurationsdatei
$configFilePath = "config.json";

// Überprüft, ob das Anmeldeformular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Liest die Benutzerdaten aus der Konfigurationsdatei
    $config = json_decode(file_get_contents($configFilePath), true);
    $usernameFromConfig = $config["username"];
    $passwordFromConfig = $config["password"];

    // Überprüft, ob der Benutzername und das Passwort korrekt sind
    if ($_POST["username"] == $usernameFromConfig && $_POST["password"] == $passwordFromConfig) {
        // Setzt die Session-Variable, um den Zugriff zu erlauben
        $_SESSION["loggedin"] = true;
        
        // Weiterleitung zur Funktionsseite (view.html)
        header("Location: view.html");
        exit();
    } else {
        // Zeigt eine Fehlermeldung, wenn die Anmeldedaten falsch sind
        header("Location: index.php?error=1"); // Weiterleitung zur Anmeldeseite mit Fehlermeldung
        exit();
    }
}

// Hier wird das HTML-Formular von login-form.html eingebunden
include('login-form.html');
?>
