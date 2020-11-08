Multiplex unlimited number
<hr>
<?php
$y = 1;
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
    
    for($x = 1; $x <= $n; $x++){
        $y = $y*$x;
        echo "Multiply Of $x: $y <br>";
    }
}
?>

<form action="" method="get">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>