<?php
    $number = 2;
    if ($number > 0) {
        echo("wieksza od zera<br>");
     }
    else if($number == 0){
        echo("rowne zero<br>");
     }
    else{
       echo("mniejsze od zera<br>");
     }
     
    switch ($number) {
       case $number > 0:
           echo("wieksze od zera<br>");
           break;
        case $number < 0:
           echo("mniejsze od zera<br>");    
           break;
        default:
            echo("rowne zero<br>");
           break;
 }
?>
