<?php
$url = $_SERVER["REQUEST_URI"];
?>

<?php require __DIR__ . "/partials/head.php" ?>

<div class="h-200 w-full">
    <div class="wrapper al-center h-200 m-x-40 flex-spacebt-center">
      <h1 class="c-5d5d5d inter fsize-title">All Items</h1>

       <a class="button" href="/add-item">ADD ITEM</a>
    </div>
    <div class="line m-x-40"></div>

    <div class="search-container m-40 ">
        <i class="fas fa-search search-icon"></i>
        <input type="text" class="search-bar" placeholder="Search Item">
    </div>
    <div class="flex-spacebt-center w-200 m-x-40 h-10 ">
        <p class="inter c-92">Items: <span class="c-0">1</span></p>
        <p class="inter c-92">Total Quantity: <span class="c-0">2</span></p>
        <p class="inter c-92">Total Value: R$<span class="c-0">230,00</span></p>
    </div>
</div>

<?php require __DIR__ . "/partials/footer.php"; ?>