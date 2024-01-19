<?php
    echo "Dziękujemy! Rejestacja przebiegła pomyślnie". "<br>";
 
    echo "Wprowadzone dane:<br>";

    echo "Imie:".trim($_POST['imie'])."<br>";
 
    echo "Nazwisko:".trim($_POST['nazwisko'])."<br>";

    echo "Adres zamieszkania:".trim($_POST['sp'])."<br>";
 
    echo "Ocena JP:".trim($_POST['ocenaJP'])."<br>";
 
    echo "Ocena JA:".trim($_POST['ocenaJA'])."<br>";
 
    echo "Ocena Matematyka:".trim($_POST['ocenaMat'])."<br>";
 
    echo "Wyniki egzaminow:".trim($_POST['egzJP'])."<br>";
 
    echo "Wyniki z J angielskiego:".trim($_POST['egzJA'])."<br>";
 
    echo "Wyniki z J polskiego:".trim($_POST['egzJP'])."<br>";
 
    echo "Wyniki z Matematyki:".trim($_POST['egzaMat'])."<br>";
 
    if (!empty($_POST['dodatkowyEgz'])) {
        echo "<p>".$_POST['dodatkowyEgz'];
    } else {
        echo "<p>".$_POST['nazwisko']." : nie ma zadnego dodatkowego egzaminu <br>";
    }
    
    echo "<br>";
    if (!isset($_POST['akt'])) {
        echo "Prosze zaznaczyc jakas aktywnosc";
    } else{
        echo "Aktywnosci: " .trim($_POST['akt'])."<br>";
    }

    echo"Świadectwo z wyróżnieniem: ";
    if(!empty($_POST['wyr'])){
        echo "Tak";
    }
    else{
        echo "Nie";
    }

?>
 