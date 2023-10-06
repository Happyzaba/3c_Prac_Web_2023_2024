<?php
    $number1 = 4;
    $number2 = 4;
    if($number1 % $number2 == 0){
        echo("bez reszty z dzielenia<br>");
    }
    else 
        echo("reszta z dzielenia<br>");
        
        switch ($number1 % $number2 == 0) {
            case 0:
                echo("reszta z dzielenia<br>");
                break;
            
            default:
                echo("bez reszty z dzielenia<br>");
                break;
        }
?>
