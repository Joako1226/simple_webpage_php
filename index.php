<?php
//L'index ha de carregar el model i redirigir al home
session_start();
include('./config/config.php');
include('./model/users.php');
include('./model/items.php');
include('./model/routes.php');
header('Location: ./views/home.php');
exit;

?>
