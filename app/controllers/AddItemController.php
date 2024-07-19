<?php

use App\Models\Item;

$name = $_POST["itemName"];
$price = $_POST["itemPrice"];
$description = $_POST["itemDescription"];
$tags = $_POST["itemTags"];

$item = new Item($name,null,$price);
$item->store();

header("/products");
?>
