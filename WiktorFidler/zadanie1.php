<?php
    setcookie("username", "Wiktor Fidler");

    echo  $_COOKIE["username"];     

    setcookie("username","Jaki Random");

    setcookie("username","oiuhf",time() - 1);

    if(!isset($_COOKIE['visited'])){
        $ile = 1;
    } else{
        $ile = (int)$_COOKIE['visited'];
        if($ile < 1)
            $ile = 1;
        $ile++;
    }
    setcookie("visited", "$ile");
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Licznik odwiedzen</title>
    </head>
    <body>
        <p>
            <?php
            if($ile == 10)
                echo "odweidziles nas 10 razy"
            ?>
        </p>
    </body>

</html>