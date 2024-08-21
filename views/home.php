<?php
use App\Models\Item;

$item = new Item();
$uniqueItemsCount   = $item->countItens();
$totalStockQuantity = $item->countStock();
$totalValue         = $item->countTotalValue();
?>

<?php require "partials/head.php"?>
    
    <div class="h-full w-full flex-column">

        <div class="wrapper al-center m-x-40 flex-spacebt-center">
            <h1 class="c-5d5d5d inter fsize-title">Dashboard</h1>
        </div>
        <div class="line m-x-40"></div>
        

        <div class="flex-just-c w-full h-vp m-t-80">
            <div class="w-700">
                
                <p class="inter-5 c-46">Inventory Summary</p>
                
                <div class="w-full h-full flex-row flex-spacebt m-t-40">
                    <div class="summary-box flex-c flex-column">
                        <p class="inter-5 c-46 m-0 f-z-2r"><?= $uniqueItemsCount;?></p>    
                        <p class="inter c-92 m-0">Items<span class="c-0">
                    </div>
                    <div class="summary-box flex-c flex-column">
                        <p class="inter-5 c-46 m-0 f-z-2r"><?= $totalStockQuantity;?></p>    
                        <p class="inter c-92 m-0">Total Quantity<span class="c-0">
                    </div>
                    <div class="summary-box flex-c flex-column">
                        <p class="inter-5 c-46 m-0 f-z-2r"><?= '$' . $totalValue;?></p>    
                        <p class="inter c-92 m-0">Total Value<span class="c-0">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require "partials/footer.php"?>