<!DOCTYPE html>
<html lang="PL-pl">
    <head>
        <meta charset="UTF-8">
            <link rel="stylesheet" href="styl5.css">
        <title>Portal społeczny</title>
    </head>
    <body>
        <?php 
            $db = new mysqli('localhost','root','','portal');
        ?>
        <header>
        <div id="leftbanner">
            <h2>Nasze osiedle</h2>
        </div>
        <div id = "rightbanner">
            <?php
                $q = "SELECT COUNT(*) FROM dane";
                $result = $db->query($q);
                $row = $result->fetch_row();
                $count = $row[0];
                echo "<h5> Liczba uzytkownikow portalu: $count</h5>";
                ?>
        </div>
        </header>
        <div id="left">
            <h3>Logowanie</h3>
            <form action="uzytkownicy.php" method="post">
                Login<br>
                <input type="text" name="login" id = "login"><br>
                Hasło<br>
                <input type="password" name="haslo" id="haslo"><br>
                <input type="submit" value="Zaloguj">
            </form>
        </div>
        <div id="right">
            <h3>Wizytówka</h3>
            <div id="card">
                <?php
                    if (isset($_POST['login']) && isset($_POST['password'])){
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                    }
                    /*if($login != "" && $password != "")
                        $passwordHash = sha1($password)
                        $q = "SELECT * FROM uzytkownicy WHERE login = \$login\"";
                        $result = $db->query($q);
                        if($result->num_rows == 0)
                            echo "Login nie istnieje"
                        */   
                ?>
            </div>
        </div>
        <footer id="footer">
            Stronę wykonał: Wiktor Fidler
        </footer>
        <?php $db-> close();?>
    </body>
</html>