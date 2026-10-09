<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function isLogged() {
    if (!isset($_SESSION["user_logged"])) {
        header("Location: ../views/login.php");
        exit;
    }
}

function isAdminExit() {
    if (
        !isset($_SESSION["user_logged"]) ||
        $_SESSION["user_logged"]["rol"] !== "admin"
    ) {
        header("Location: ../views/home.php");
        exit;
    }
}

function isAdmin() {
    return isset($_SESSION["user_logged"]) &&
        $_SESSION["user_logged"]["rol"] === "admin";
}