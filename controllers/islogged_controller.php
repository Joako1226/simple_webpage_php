<?php

function isLogged() {
    if (!isset($_SESSION["user_logged"])) {
        header("Location: ../views/login.php");
        exit;
    }
}

function isAdmin() {
    if (!isset($_SESSION["user_logged"]) || $_SESSION["user_logged"]["rol"] !== "admin") {
        header("Location: ../views/login.php");
        exit;
    }
}