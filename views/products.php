<?php
include("../includes/header.php");
include("../includes/navbar_test.php");

include("../includes/banner.php");
loadBanner($text["laptops"], $text["best"], null, "laptop_banner.jpg");

include("../functions/products_functions.php");
displayProducts();
?>