<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["'username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (checkLogin($username, $password, $_SESSION["users"])) {
            $_SESSION["user_logged"] = checkLogin($username, $password, $_SESSION["users"]);
            header("Location: ../views/products.php");
          exit;
        }
    }
        header("Location: /views/home.php");
}
