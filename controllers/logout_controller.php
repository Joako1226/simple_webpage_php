<?php
session_start();

function logOut() {
    unset($_SESSION["user_logged"]);
    header("Location: ../views/home.php");
    exit;
}

if (isset($_GET["logout"])) {
    logOut();
}
?>