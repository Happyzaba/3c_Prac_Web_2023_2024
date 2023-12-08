<?php 
    for ($i = 1; $i < 11; $i++) {
        echo($i . "<br>" . sqrt($i) . "<br>"); 
    }

    $number = 1;
    while ($number <= 10) {
        echo($number . "<br>" . sqrt($number) . "<br>");
        $number++;
    }

    $number = 1;
    do {
        echo($number . "<br>" . sqrt($number) . "<br>");
        $number++;
    } while ($number <= 10);
?>