<?php 
include("../functions/user_functions.php"); 
include("../functions/image_functions.php"); 
include("../model/routes.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
    $name = $_POST["name"]; 
    $username = $_POST["username"]; 
    $password = $_POST["pass1"]; 
    $password2 = $_POST["pass2"]; 
    $mail = $_POST["mail"]; 
    
 
    if (!checkMail($mail)) { 
        // missatge error 
    } 
 
     
    if (isset($_FILES['image'])) { 
        $image = $_FILES['image'];
        $imageName = checkImageProfile($image); 
        $destination = $directories["uploadDir"] . $imageName; 
        move_uploaded_file($_FILES['image']['tmp_name'], $destination); 
    } else { 
        $imageName = 'default.png'; 
    } 
 
 
    $newUser =  
        [ 
            "id" => 0, 
            "name" => $name, 
            "username" => "$username", 
            //Desem el password encriptat 
            "password" => password_hash($password, PASSWORD_DEFAULT), 
            "mail" => $mail, 
            "rol" => "user", 
            "image" => $imageName 
        ]; 
    array_push($_SESSION['users'], $newUser); 
    $_SESSION['user_logged'] = $newUser;
    header("Location: ../views/products.php"); 
} 
 
?>