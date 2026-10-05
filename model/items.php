<?php 

$items = [

    [
        "id" => 1,
        "brand" => "Acer",
        "name" => "Nitro V15",
        "price" => 1000,
        "description" => "A good gaming laptop",
        "image" => "av15.png",
        "features" => [
            "screen" => 15.6,
            "ram" => 16,
            "CPU" => "Ryzen 7 7735HS",
            "storage" => "1TB",
            "graphics_card" => "RTX 4060 Laptop"
        ]
    ],

    [
        "id" => 2,
        "brand" => "ASUS",
        "name" => "TUF Gaming A15",
        "price" => 1200,
        "description" => "Powerful gaming laptop",
        "image" => "tuff_a15.png",
        "features" => [
            "screen" => 15.6,
            "ram" => 16,
            "CPU" => "Ryzen 7 7735HS",
            "storage" => "1TB",
            "graphics_card" => "RTX 4060 Laptop"
        ]
    ],

    [
        "id" => 3,
        "brand" => "Lenovo",
        "name" => "Legion 5",
        "price" => 1400,
        "description" => "High performance laptop for gaming",
        "image" => "lenovo_legion5.png",
        "features" => [
            "screen" => 16,
            "ram" => 32,
            "CPU" => "Ryzen 7 7840HS",
            "storage" => "1TB",
            "graphics_card" => "RTX 4070 Laptop"
        ]
    ],

    [
        "id" => 4,
        "brand" => "HP",
        "name" => "Victus 16",
        "price" => 1100,
        "description" => "Affordable gaming laptop",
        "image" => "victus16.jpg",
        "features" => [
            "screen" => 16.1,
            "ram" => 16,
            "CPU" => "Intel Core i7-13700H",
            "storage" => "1TB",
            "graphics_card" => "RTX 4060 Laptop"
        ]
    ],

    [
        "id" => 5,
        "brand" => "MSI",
        "name" => "Katana 15",
        "price" => 1300,
        "description" => "Gaming laptop for demanding games",
        "image" => "therock.gif",
        "features" => [
            "screen" => 15.6,
            "ram" => 16,
            "CPU" => "Intel Core i7-13620H",
            "storage" => "1TB",
            "graphics_card" => "RTX 4060 Laptop"
        ]
    ]

];
$_SESSION["products"] = $items;

?>