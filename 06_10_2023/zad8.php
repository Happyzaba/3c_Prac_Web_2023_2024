<?php
    $number1 = 2;
    $number2 = 1;
    $number3 = 3;

    if ($number1 == $number2 || $number1 == $number3) {
        echo("trzy liczby sa rowne<br>");
    }
    else if($number2 == $number3){
        echo("dwie liczby sa rowne<br>");
    }
    else{
        echo("zadna liczba nie jest rowna<br>");
    }
    switch (true) {
        case $number1 == $number2 || $number1 == $number3:
            echo("trzy liczby sa rowne<br>");
            break;
        case $number2 == $number3:
            echo("dwie liczby sa rowne<br>");
            break;
        default:
            echo("zadna liczba nie jest rowna<br>");
            break;
    }
?>
