Add unlimited number
<hr>
<?php
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
    $x = 0; 
    $y = 0;
    while($x <= $n){
        $y = $x + $y;
        echo "The number is $x: $y <br>";
        $x++;
    }
}
?>

<form action="" method="get">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>