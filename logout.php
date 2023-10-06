<?php
session_start();

// Beendet die Session
session_unset();
session_destroy();

// Weiterleitung zur Anmeldeseite (index.php)
header("Location: index.php");
exit();
?>
