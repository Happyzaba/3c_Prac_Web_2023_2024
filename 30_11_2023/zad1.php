<?php
    $number = 2;
    if (is_numeric($number)) {
    
        if ($number > 0) {
            echo("Liczba jest wieksza od zera");
        }
        else if($number == 0) {
            echo("Liczba jest rowna zero");
        }
        else 
        echo("Liczbe jest mniejsza od zera");
    }
    else{
        echo("zle dane");
    }
?>