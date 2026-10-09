<?php

include("../functions/products_functions.php");
include("./islogged_controller.php");

isLogged();

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["id"])) {
    header("Location: ../views/products.php");
    exit;
}

$itemId = $_POST["id"];
$itemToAdd = getItemById($itemId);

if ($itemToAdd === false) {
    header("Location: ../views/products.php");
    exit;
}

if (!isset($_SESSION["kart"])) {
    $_SESSION["kart"] = [];
}

if (isset($_SESSION["kart"][$itemId])) {
    $_SESSION["kart"][$itemId]["quantity"]++;
} else {
    $_SESSION["kart"][$itemId] = [
        "item" => $itemToAdd,
        "quantity" => 1
    ];
}

header("Location: ../views/products.php");
exit;