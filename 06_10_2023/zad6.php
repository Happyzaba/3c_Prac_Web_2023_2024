<?php
    $year = 2000;
    if ($year % 4 ==0 && $year % 100  != 0 || $year % 400 == 0) {
        echo("Rok jest przestepny<br>");
    }
    else {
        echo("Rok nie jest przestepny<br>");
    }
    switch ($year) {
        case $year % 4 == 0 && $year % 100 != 0 || $year %400 == 0:
            echo("Rok jest przestepny<br>");
            break;
        default:
            echo("Rok nie jest przestepny<br>");
            break;
    }
?>
