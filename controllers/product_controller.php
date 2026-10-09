<?php

include("../functions/image_functions.php");
include("../model/routes.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $brand = $_POST["brand"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $screen = $_POST["screen"];
    $ram = $_POST["ram"];
    $CPU = $_POST["CPU"];
    $storage = $_POST["storage"];
    $graphics_card = $_POST["graphics_card"];

    if (isset($_FILES["image"])) {
        $image = $_FILES["image"];
        $imageName = checkImageProfile($image);
        $destination = $directories["uploadDir"] . $imageName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $destination);
    } else {
        $imageName = "default.png";
    }

    $id = count($_SESSION["products"]) + 1;

    $newProduct = [
        "id" => $id,
        "brand" => $brand,
        "name" => $name,
        "price" => $price,
        "description" => $description,
        "image" => $imageName,
        "features" => [
            "screen" => $screen,
            "ram" => $ram,
            "CPU" => $CPU,
            "storage" => $storage,
            "graphics_card" => $graphics_card
        ]
    ];

    array_push($_SESSION["products"], $newProduct);

    header("Location: ../views/products.php");
    exit;
}

?>