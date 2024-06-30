<?php
$url = $_SERVER["REQUEST_URI"];
if ($url === "/" ) {
    require "views/home.php";
}

if ($url === "/products") {
    require "views/products.php";
}

if ($url === "/settings") {
    require "views/settings.php";
}
