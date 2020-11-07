Unlimited Even Number
<hr>
<?php
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
    $y = 1;
    for($x = 1; $x <= $n; $x++){
        $p = $x % 2;
        

        if($p == 0){
            $y = $y * $x;
            echo "$x is an even number <br>";
        }
    }
    echo "Multiple of even number is $y <br>";
 
}

?>
<form action="" method="post">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>