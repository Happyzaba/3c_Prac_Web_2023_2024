<?php
   $number = 2;
    if ($number % 2==0 ) {
        echo("jest parzysta<br>");
    }
    else 
        echo("jest nieparzysta<br>");

        switch ($number % 2 == 0) {
            case 0:
                echo("not even<br>");
                break;
            
            default:
                echo("even<br>");
                break;
        }
?>
