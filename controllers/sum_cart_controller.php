<?php
session_start();
$kart = $_SESSION["kart"];
$id = $_GET["id"];
$_SESSION["kart"][$id]["quantity"]++;
header("location: ../views/cart.php");
exit;
?>