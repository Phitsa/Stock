<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper h-full">
        <div class="sidebar">
            <h1 class="fsize-title inter c-white">Stock</h1>
            <a href="/" class="nav-link"         <?=$url === "/"         ? 'Style="background-color: #C87AC5"' : null ?> >Home</a>
            <a href="/products" class="nav-link" <?=$url === "/products" ? 'Style="background-color: #C87AC5"' : null ?> >Products</a>
            <a href="/settings" class="nav-link" <?=$url === "/settings" ? 'Style="background-color: #C87AC5"' : null ?> >Settings</a>
        </div>