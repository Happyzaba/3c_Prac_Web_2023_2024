<?php 
    for ($i=100, $j = 0; $j < 5; $i++) { 
        if ($i % 5 == 0) {
            $j++;
            echo($i . "<br>");
        }
    }

    $number = 100;
    $j = 0;
    
    while ($j < 5) {
        if($number % 5 == 0 ) {
            $j++;
            echo($number . "<br>");
        }
        $number++;
    }

    $number = 100;
    $j = 0;
    
    do {
        if($number % 5 == 0) {
            $j++;
            echo($number . "<br>");
        }
        $number++;
    } while ($j < 5);
?>