<?php
$url = $_SERVER["REQUEST_URI"];
?>

<?php require "partials/head.php"?>
<div class="h-full w-full flex-column">

    <div class="wrapper al-center m-x-40 flex-spacebt-center">
        <h1 class="c-5d5d5d inter fsize-title">Add Item</h1>
    </div>
    <div class="line m-x-40"></div>

    <div class=" w-full flex-c flex-fit flex-row">
        <form class="m-40 form-template w-400" action="/test" method="post">

            <div class="">
                <label for="item-name">Name</label><br>
                <input class="form-input" type="text"   name="item-name"  required>
            </div>
            <input type="submit" value="ADD">
        </form>
    </div>
</div>
<?php require "partials/footer.php"?>