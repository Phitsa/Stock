<?php

$router->get('/',          'views/home.php');
$router->get('/products',  'views/products.php');
$router->get('/tag',       'views/tag.php');
$router->get('/add-item',  'views/add-item.php');
$router->get('/add-tag',   'views/add-tag.php');

$router->post('/AddItemController', 'app/controllers/AddItemController.php');
$router->post('/AddTagController',  'app/controllers/AddTagController.php');