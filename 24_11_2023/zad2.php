<?php 
    for ($i = 100; $i > 90; $i--) { 
        echo( $i . "<br>");
    }

    $number = 100;
    while ($number > 90) {
        echo($number-- . "<br>");
    }
    $number = 100;
    do {
        echo($number-- . "<br>");
    } while ($number > 90);
?>