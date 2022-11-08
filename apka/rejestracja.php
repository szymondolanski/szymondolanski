<?php
session_start();

//walidacja danych formularza
if(isset($_POST['zaloz'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];

    $walidacja = true;
    if(strlen($imie) < 3){
        $walidacja = false;
        $_SESSION['imie_error'] = 'Wpisz poprawne imię';
    }
    if(filter_var($email, FILTER_VALIDATE_EMAIL) = false)
    {
        $walidacja = false;
        $_SESSION['email_error'] = 'Wpisz poprawny email';
    }
    if(ctype_alnum($login)){
        $walidacja = false;
        $_SESSION['login_error'] = 'Wpisz poprawny login, musi sięskładać z liter i cyfr (bez polskich znakow)';
    }
    if($haslo1 != $haslo2){
        $walidacja = false;
        $_SESSION['pass_error'] = 'Podane hasła są różne';
    }


    if($walidacja){
        //obluga bazy danych
        require_once('baza.php');

            mysqli_report(MYSQLI_REPORT_STRICT);
            try{
                $polaczenie = new mysqli($serwer, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e){
                $_SESSION['error'] = $e;
                exit();
            }
            $login = htmlentities($login);
            $haslo = htmlentities($haslo);
            $login = $polaczenie->real_escape_string($login);
            $haslo1 = $polaczenie->real_escape_string($haslo1);

            //sprawdzamy czy login jest wolny
            $zapytanie = "SELECT * FROM users WHERE login='$login'";
            $wynik = $polaczenie->query($zapytanie);
            if($wynik->num_rows == 0){
                //login zajety
                $_SESSION['login_error'] = 'Podany login juz istnieje';
            }else{
                //login wolny ,mozna zakladac konto
                $zapytanie = "INSTERT INTO users VALUES (NULL, '$imie','$nazwisko',$haslo1''$email', '$login','$email')";
                if($polaczenie ->query($zapytanie)){
                    header('Location: index.php');
                }else{
                    //nie udalo sie
                }
                header('Location: index.php');
            }
            $polaczenie->close();
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <style>
        body{
            font-family: Arial;
            background-color: cornsilk;
        }
        form>input{
            display: block;
            margin: 10px;
        }
        div.error{
            color: crimson;
        }
    </style>
</head>
<body>
    <h2>Wpisz dane do rejestracji.</h2>
    <form action="rejestracja.php" method="POST" nonvalidate>
        <input type="text" name="imie" placeholder="Imię">
        <div class="error">
            <?php 
                if(isset($_SESSION['imie_error']))
                {
                    echo $_SESSION['imie_error'];
                    unset ($_SESSION['imie_error']);
                }
            ?>
        </div>
        <input type="text" name="nazwisko" placeholder="Nazwisko">
        <input type="email" name="imie" placeholder="Email">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="haslo1" placeholder="Hasło">
        <input type="password" name="haslo2" placeholder="Powtórz hasło">
        <input type="submit" value="Załóż konto" name="zaloz">
    </form>
</body>
</html>

