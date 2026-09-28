<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["lang"])) {
            $_SESSION['LANG_APP'] = $_GET["lang"];
            $redirectPage = $_GET["redirect"];
        }
    header('Location: ../views/'. $redirectPage);
    exit;
    }
?>