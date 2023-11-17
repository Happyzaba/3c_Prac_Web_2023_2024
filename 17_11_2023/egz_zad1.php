<?php
    $pl = 5;
    $choice = "USD";//Opcje to EUR, FRK, USD

    switch ($choice) {
        case "EUR":
            echo(round($pl * 4.32));
            break;
        case "FRK":
            echo(round($pl * 3.21));
            break;
        case "USD":
            echo(round($pl * 3,98));
            break;
    }
?>