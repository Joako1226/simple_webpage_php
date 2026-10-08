<?php

include("../functions/user_functions.php");

// userLogged();

$text = [];

include("../includes/header.php");
include("../includes/navbar_test.php");
include("../controllers/islogged_controller.php");
isLogged();

include("../functions/cart_functions.php");
include("../includes/footer.php");
print_r($_SESSION["user_logged"]);
?>