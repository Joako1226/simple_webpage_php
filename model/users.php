<?php
$users = [
    [
        "id" => 0,
        "name" => "Joaquin Gutierrez",
        "username" => "admin",
        //Desem el password encriptat
        "password" => password_hash('123', PASSWORD_DEFAULT),
        "mail" => "joaquin@123.com",
        "rol" => "admin",
        "image" => 'default.png'
    ],
    [
        "id" => 1,
        "name" => "Raquel Boronat",
        "username" => "raquel",
        "password" => password_hash('123', PASSWORD_DEFAULT),
        "mail" => "raquel.boronat@cirvianum.cat",
        "rol" => "user",
        "image" => 'default.png'
    ]
];
$_SESSION['users'] = $users;