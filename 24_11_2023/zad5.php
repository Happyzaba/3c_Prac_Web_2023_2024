<?php 
    $a = 4;
    $b = -6;
    $Eo = 0.0001;
    $Ex = 0.0001;

    $Fa = Function_Calculation($a);
    $Fb = Function_Calculation($b);

    if ($Fa * $Fb > 0) {
        echo("Funkcja nie spełnia założeń <br>");
    }
    else{
        do {
            $Xo = XSpaceZero($a,$b);
            $Fo = Function_Calculation($Xo); 
            if (abs($Fo) < $Eo) {
                echo($Xo);
                break;
            }
            else if(($Fa * $Fo) < 0){
               $b = $Xo;
            }
            else{
                $a = $Xo;
                $Fa = $Fo;
            }
        } while (abs($a - $b) > $Ex);
    }
       
    function XSpaceZero($a, $b) {
        return (($a+$b)/2);
    }

    function Function_Calculation($x) {
        return (2*$x + 2);
    }
?>