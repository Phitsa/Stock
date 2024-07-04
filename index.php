<?php
require "vendor/autoload.php";


$url = "/test";
$links = 
[
    '/'           => 'views/home.php',
    '/products'   => 'views/products.php',
    '/settings'   => 'views/settings.php',
    '/add-item'   => 'views/add-item.php',
    '/test'       => 'views/test.php',
];

// lembrar de usar parse_url
require $links[$url];
