<?php
    $sideA = 3; 
    $sideB = 4;
    $sideC = 6;
        if(is_numeric($sideA || $sideB || $sideC)) {
            
        if($sideA * $sideA + $sideB * $sideB == $sideC * $sideC){
            echo("Trojakat jest prostokatny");
        }
        else if($sideA * $sideA + $sideB * $sideB < $sideC * $sideC){
            echo("Trojkat jest rozwarto");
        }
        else{
            echo("Trojakt jest ostro");
        }
    }
    else{
        echo("zle dane");
    }
?>