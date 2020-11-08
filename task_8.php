Add unlimited even number
<hr>
<?php
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
    $sum = 0;

    for($x = 0; $x <= $n; $x++){
        $y = $x % 2;


        if($y == 0){
            $sum = $sum + $x;
            echo "$x is an even number <br>";
        }
    }
    
    echo "Sum of even number is: $sum";
}
?>


<form action="" method="get">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>
