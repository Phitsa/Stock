<?php

use App\Models\Tag;

$name = $_POST['tagName'];

$tag = new Tag($name);
$tag->store();

header("Location: /products");