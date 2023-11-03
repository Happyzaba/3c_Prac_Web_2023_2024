<?php
    $number = 3;
    if (is_numeric($number)) {

        if ($number % 2==0 ) {
        echo("jest parzysta<br>");
        }
        else 
        echo("jest nieparzysta<br>");
    }
    else{
        echo("zle dane");
    }
?>