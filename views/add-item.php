<?php
use App\Models\Tag;

$getTags = new Tag();

$tags = $getTags->listTags();
?>

<?php require "partials/head.php"?>
<div class="h-full w-full flex-column">

    <div class="wrapper al-center m-x-40 flex-spacebt-center">
        <h1 class="c-5d5d5d inter fsize-title">Add Item</h1>
    </div>
    <div class="line m-x-40"></div>

    <form action="AddItemController" method="post">
        <div class="wrapper">
            <div class="m-35">
                <div>
                    <label for="itemName" class="inter">Name</label>
                </div>    
                <input type="text" name="itemName" class="input-add" required>
            </div>

            <div class="m-35">
                <div>
                    <label for="itemPrice" class="inter">Price</label>
                </div>
                <input type="number" name="itemPrice" class="input-add" required>
            </div>
        </div>
        
        <div class=" wrapper">
            
            <div class="m-35">
                <div>
                    <label for="itemDescription" class="inter">Description</label>
                </div>    
                <textarea name="itemDescription" class="input-add"></textarea>
            </div>
                <div class="m-35">
                    <div>
                    <label for="itemQuantity" class="inter">Amount</label>
                    </div>
                    <input type="number" name="itemQuantity" class="input-add">
                </div>
            </div>

        
            <div class="m-35">
                <div>
                    <label for="itemTags" class="inter">Tags</label>
                </div>
                <div class="w-300">
                    <select name="itemTags[]" id="tags" multiple>
                        <?php 
                        
                        foreach($tags as $tag) {
                            echo "<option value=".$tag['id'].">".$tag['name']."</option>";
                        }

                        ?>
                    </select>
                    <script>
                    new MultiSelectTag('tags')
                    </script>
                </div>
            </div>
        
        <div class="m-35">
            <input type="submit" value="Submit" class="submit">
        </div>
    </form>
</div>
<?php require "partials/footer.php"?>