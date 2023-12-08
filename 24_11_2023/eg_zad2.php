<?php 
    $sum = 0;
    $number = 10;
    do {
            $sum += $number;
            $number++;
    } while ($sum < 1000);
    echo($sum . "<br>");
?>