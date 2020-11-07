 Odd Number
<hr>
<?php
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
    $sum = 0;

    for($x = 0; $x <= $n; $x++){
        $p = $x % 2;

        if($p == 1){
            $sum = $sum + $x;
            echo "$x is an odd number <br>";
        }
    }

    echo "Sum of odd number is $sum";
 
}

?>
<form action="" method="post">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>