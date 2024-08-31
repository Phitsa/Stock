<?php

require "vendor/autoload.php";  // Verifique o caminho

use App\Models\Router;

$router = new Router();

$routes = require 'views/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

require $router->route($uri, $method);