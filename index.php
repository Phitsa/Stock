<?php
require "vendor/autoload.php";

$url = $_SERVER["REQUEST_URI"];
$links = 
[
    '/'           => 'views/home.php',
    '/products'   => 'views/products.php',
    '/settings'   => 'views/settings.php',
    '/add-item'   => 'views/add-item.php',
    '/test'       => 'views/test.php',
    '/add-tag'    => 'views/add-tag.php',
    '/tag'        => 'views/tag.php',
    '/AddItemController' => 'app/controllers/AddItemController.php',
];

// lembrar de usar parse_url
require $links[$url];
