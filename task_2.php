print n number
<hr>
<?php
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
for($x = 1; $x <= $n; $x++){
    echo "The number is: $x <br>";
}
}
?>

<form action="" method="post">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>