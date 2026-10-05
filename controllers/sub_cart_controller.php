<?php
session_start();
$id = $_GET["id"];
if($_SESSION["kart"][$id]["quantity"] <= 1){
    unset($_SESSION["kart"][$id]);
    header("location: ../views/cart.php");
}else{
$_SESSION["kart"][$id]["quantity"]--;
header("location: ../views/cart.php");
}

exit;
?>