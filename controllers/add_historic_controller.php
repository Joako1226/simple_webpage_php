<?php

session_start();

if (!isset($_SESSION['kart']) || empty($_SESSION['kart'])) {
    header("Location: ../views/cart.php");
    exit;
}

$kart = $_SESSION['kart'];

$cart = [];

foreach ($kart as $item) {

    $cart[] = [
        'name' => $item['item']['name'],
        'price' => $item['item']['price'],
        'qty' => $item['quantity']
    ];
}

$order = [
    'date' => date('Y-m-d H:i:s'),
    'cart' => $cart
];

if (!isset($_SESSION['user_history'])) {
    $_SESSION['user_history'] = [];
}

$_SESSION['user_history'][] = $order;

$_SESSION['kart'] = [];

header("Location: ../views/historic.php");
exit;
