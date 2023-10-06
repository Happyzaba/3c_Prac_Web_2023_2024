<?php
  $number1 = 6;
  $number2 = 5;
  $number3 = 109;
  
  if ($number1 < $number2 && $number1 < $number3) {
    echo("najmniejsza jest liczba 1<br>");
    }
    else if ($number2 < $number3) {
    echo("najmniejsza jest liczba 2<br>");
    }
    else{
        echo("najmniejsza jest liczba 3<br>");
    }

    switch ($number1.$number2.$number3) {
        case $number1 < $number2 && $number1 < $number3:
            echo("najmniejsza jest liczba 1<br>");
            break;
        case $number2 < $number3:
            echo("najmniejsza jest liczba 2<br>");
            break;
        default:
            echo("najmniejsza jest liczba 3<br>");
            break;
    }
?>
