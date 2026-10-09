<?php
    session_start();
    unset($_SESSION["user_logged"]);
    unset($_SESSION["kart"]);
    header("Location: ../views/home.php");
    exit;
?>