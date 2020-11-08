unlimited Even Number
<hr>
<?php
if(isset($_REQUEST["submit"])){
    $n = $_REQUEST["number"];
    
  
   
        for($x = 0; $x <= $n; $x++){
            $y = $x % 2;
            
            if($y == 0){
               
                echo "$x is an even number<br>";
                
                
            }
    }
   
}
?>
<form action="" method="post">
    <input type="number" name="number">
    <input type="submit" value="submit" name="submit">
</form>