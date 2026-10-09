<?php

include("../controllers/islogged_controller.php");

isLogged();

include("../functions/user_functions.php");

$text = [];

include("../includes/header.php");
include("../includes/navbar_test.php");

include("../functions/cart_functions.php");
include("../includes/footer.php");