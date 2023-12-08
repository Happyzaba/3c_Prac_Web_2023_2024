<?php 
    $sum = 0;
    for ($i=100; $i < 200; $i++) { 
        if($i % 2 == 0){
            $sum += $i;
        }
    }     
    echo($sum);
?>