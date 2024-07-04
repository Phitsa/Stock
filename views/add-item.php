<?php
$url = $_SERVER["REQUEST_URI"];
?>

<?php require "partials/head.php"?>
<form action="/test" method="post">
<input type="text" name="test">
<input type="number" name="numbertest" id="">
<input type="submit" value="">
</form>
<?php require "partials/footer.php"?>