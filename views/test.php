<?php

use App\Models\Item;

$name = $_POST["test"];
$price = $_POST["numbertest"];

$item = new Item($name,null,$price);
$item->store();

header("/products");
?>
