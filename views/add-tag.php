<?php require "partials/head.php"?>
<div class="h-full w-full flex-column">

    <div class="wrapper al-center m-x-40 flex-spacebt-center">
        <h1 class="c-5d5d5d inter fsize-title">Add Tag</h1>
    </div>
    <div class="line m-x-40"></div>

    <form action="AddTagController" method="post">
        <div class="m-40">
            <div>
                <label for="tagName" class="inter">Name</label>
            </div>    
            <input type="text" name="tagName" class="input-add" required>
        </div>
        <div class="m-40">
            <input type="submit" value="Submit" class="submit">
        </div>
    </form>
    
</div>
<?php require "partials/footer.php"?>