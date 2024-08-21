<?php
use App\Models\Item;

$item = new Item();
$uniqueItemsCount   = $item->countItens();
$totalStockQuantity = $item->countStock();
$totalValue         = $item->countTotalValue();
?>

<?php require __DIR__ . "/partials/head.php"; ?>

<div class="w-full">
    <div class="wrapper al-center h-200 m-x-40 flex-spacebt-center">
      <h1 class="c-5d5d5d inter fsize-title">All Items</h1>

       <a class="button" href="/add-item">ADD ITEM</a>
    </div>
    <div class="line m-x-40"></div>

    <div class="flex-row w-500 m-x-40 h-10 ">
        <p class="inter c-92 p-r-30">Items: <span          class="c-0"><?= $uniqueItemsCount;?></span></p>
        <p class="inter c-92 p-r-30">Total Quantity: <span class="c-0"><?= $totalStockQuantity;?></span></p>
        <p class="inter c-92 p-r-30">Total Value: <span    class="c-0"><?= '$' . $totalValue;?></span></p>
    </div>
</div>

<?php require __DIR__ . "/partials/footer.php"; ?>