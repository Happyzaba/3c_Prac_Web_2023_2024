<?php
    $grade_percent = 98;
    if(is_numeric($grade_percent)) {
        
        if ($grade < 100 && $grade >= 90) {
            echo("Celujacy");
        }
        else if ($grade <= 89 && $grade >= 75) {
            echo("Bardzo dobry");
        }
        else if ($grade <= 74 && $grade >= 60) {
            echo("Dobry");
        }
        else if ($grade <= 60 && $grade >= 46) {
            echo("Dostateczny");
        }
        else if ($grade <= 45 && $grade >= 30) {
            echo("Dopuszczajacy");
        }
        else 
        echo("Niedostateczny");
        }

    else {
        echo("zle dane");
    }
?>