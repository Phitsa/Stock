<?php
$url = $_SERVER["REQUEST_URI"];
?>

<?php require "partials/head.php"?>
<div class="h-full w-full flex-column">

    <div class="wrapper al-center m-x-40 flex-spacebt-center">
        <h1 class="c-5d5d5d inter fsize-title">Add Item</h1>
    </div>
    <div class="line m-x-40"></div>

    <form action="AddItemController" method="post">
        <div class="m-40">
            <div>
                <label for="itemName" class="inter">Name</label>
            </div>    
            <input type="text" name="itemName" class="input-add" required>
        </div>

        <div class="m-40">
            <div>
                <label for="itemPrice" class="inter">Price</label>
            </div>
            <input type="number" name="itemPrice" class="input-add" required>
        </div>

        <div class="m-40">
            <div>
                <label for="itemDescription" class="inter">Description</label>
            </div>    
            <textarea name="itemDescription" class="input-add"></textarea>
        </div>
        

        <div class="m-40">
            <label for="item-tags" class="inter">Tags</label>
            <div class="w-300">
                <select name="item-tags" id="tags" multiple>
                    <option value="1">Pichau</option>
                    <option value="2">Tenis</option>
                </select>
                <script>
                new MultiSelectTag('tags')
                </script>
            </div>
        </div>
        <div class="m-40">
            <input type="submit" value="Submit" class="submit">
        </div>
    </form>
</div>
<?php require "partials/footer.php"?>