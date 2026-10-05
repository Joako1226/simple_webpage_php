<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["text"])) {
        $text = $_POST["text"];
        header("Location: ../views/products.php?filter=$text");
    }
}
