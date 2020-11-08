Even/odd number
<hr>
<?php
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
    $p = $n%2;
    if($p == 0){
        echo "The Number is Even";
    }else{
        echo "The Number is Odd";
    }
}  
?>

<form action="" method="get">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>