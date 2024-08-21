<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
</head>
<body class="wrapper">
    <div class="sidebar">
        <h1 class="fsize-title inter c-white">Stock</h1>
        <a href="/"         class="nav-link" <?=$url === "/"         ? 'Style="background-color: #c86ac8"' : null ?> >Home</a>
        <a href="/products" class="nav-link" <?=$url === "/products" ? 'Style="background-color: #c86ac8"' : null ?> <?=$url === "/add-item"      ? 'Style="background-color: #c86ac8"' : null ?> >Products</a>
        <a href="/tag"      class="nav-link" <?=$url === "/tag"      ? 'Style="background-color: #c86ac8"' : null ?> <?=$url === "/add-tag"       ? 'Style="background-color: #c86ac8"' : null ?> >Tags</a>
    </div>
    