<?php
    $year = 2.34;
    if(is_numeric($year)) {

        if ($year % 4 ==0 && $year % 100  != 0 || $year % 400 == 0) {
            echo("Rok jest przestepny<br>");
        }
        else 
            echo("Rok nie jest przestepny<br>");
    
            $century = ceil($year / 100);
                echo("Stulecie ". $century);
        }
    
    else {
        echo("zle dane");
    }
?>