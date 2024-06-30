<?php

$url = $_SERVER["REQUEST_URI"];
$links = 
[
    '/' => 'views/home.php',
    '/products' => 'views/products.php',
    '/settings' => 'views/settings.php',
    '/add-item' => 'views/add-item.php',
];
// lembrar de usar parse_url
require $links[$url];