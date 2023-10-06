<?php
    $number = 120;
    if ($number >= 100 && $number < 150) {
        echo("Liczba w przedziale<br>");
    }
    else{
        echo("liczba z poza przedzialu<br>");
        }

        switch ($number >= 100 && $number < 150) {
            case 0:
                echo("z poza przedzialu<br>");
                break;
            
            default:
                echo("w przedziale<br>");
                break;
        }
?>
