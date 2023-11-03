<?php
    $price = 5;
    $category = 2;
    if(is_numeric($price || $category)) {
        
        switch ($category) {
            case 1:
                echo("pieczywo ".$price * 0.53);
                break;
            case 2:
                echo("odziez ".$price * 2.65);
                break;
            case 3:
                echo("elektronika ".$price * 5.60);
                break;
        }
    }
    else {
        echo("zle dane");
    }
?>