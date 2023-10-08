<!DOCTYPE html>
<html lang="de">

<head>
    <!-- Meta-Informationen für die Codierung und Anzeige -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starter2OBS</title>

    <!-- Verweis auf das externe CSS-Stylesheet -->
    <link rel="stylesheet" href="css/styles_view.css">
</head>

<body>

    <?php
    // Start der PHP-Sitzung für Benutzerauthentifizierung
    session_start();
    // Überprüft, ob der Benutzer eingeloggt ist
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        // Wenn der Benutzer nicht eingeloggt ist, wird er zur Anmeldeseite weitergeleitet
        header("Location: index.php");
        exit();
    }
    ?>

    <main>
        <!-- Bereich für die Anzeige der aktuellen Uhrzeit des Clients-->
        <section>
            <p id="aktuelleUhrzeit" class="movable"></p>
        </section>

        <!-- Bereich für das CSV-Upload-Formular -->
        <section id="upload" class="upload-section">
            <h2>neue CSV-Datei hochladen</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="csvFile" id="csvFile" accept=".csv" required>
                <button type="submit">Hochladen</button>
            </form>
        </section>

        <!-- Bereich für Benutzerinformationen und Upload-Benachrichtigungen -->
        <section id="user-info" class="upload-section <?php echo isset($_SESSION["upload_message"]) ? '' : 'hide'; ?>">
            <p>
            <?php
            
            session_start();
            if (isset($_SESSION["upload_message"])) {
                echo htmlspecialchars($_SESSION["upload_message"]);
                unset($_SESSION["upload_message"]);
                // JavaScript zum Ausblenden dieser section nach 6 Sekunden, wenn eine Nachricht vorhanden ist
                echo '<script>
                setTimeout(function() {
                    document.getElementById("user-info").classList.add("hide");
                    }, 6000);
                 </script>';
            }
            ?>
            </p>
        </section>

        <!-- Bereich für die Anzeige der Starterinformationen -->
        <section id="starter">
            <p id="startzeit" class="starter-style movable"></p>
            <p id="stNr" class="starter-style movable"></p>
            <p id="vorname" class="starter-style movable"></p>
            <p id="name" class="starter-style movable"></p>
            <p id="verein" class="starter-style movable"></p>
            <p id="verband" class="starter-style movable"></p>
            <p id="nation" class="starter-style movable"></p>
        </section>
    </main>

    <!-- Verweise auf externe JavaScript-Dateien für die Funktionalitäten -->
    <script src="js/clock.js"></script>
    <script src="js/starterAnzeige.js"></script>
    <script src="js/move.js"></script>
</body>

</html>
