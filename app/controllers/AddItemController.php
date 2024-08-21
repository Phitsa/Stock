<?php

use App\Models\Item;

$name        = $_POST["itemName"];
$price       = $_POST["itemPrice"];
$description = $_POST["itemDescription"];
$tags        = $_POST["itemTags"];
$quantity    = $_POST["itemQuantity"];
$input       = 1;

$item = new Item($name, $price, $description, $tags, $quantity, $input, null);
$item->store();

header("Location: /products");

