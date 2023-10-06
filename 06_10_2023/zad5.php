<?php
    $age = 26;

    if ($age < 11) {
        echo("dziecko<br>");
    }
    else if($age >= 11 && $age <= 17){
        echo("nastolatek<br>");
    }
    else{
        echo("dorosły<br>");
    }
   
    switch (true) {
        case $age < 11:
            echo("dziecko<br>");
            break;
        case $age >= 18:
            echo("dorosly<br>");
            break;
        default:
            echo("nastolatek<br>");
            break;
    }
?>
