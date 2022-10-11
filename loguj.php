
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Zaloguj sie</h1>
    <form action=""method="POST">
        <input type="text" name ="login">
        <input type="text" name ="haslo">
        <input type="submit" value="zaloguj sie">
    </form>
    <?php 
        if(isset($_POST['login'])){
            if(empty($_POST['login']) || empty($_POST['haslo'])){
                echo 'Wprowadz dane logowania';
            }
            else{
                $_SESSION['login_uzytkownika'] = $_POST['login'];
                header('Location: strona.php');
            }
        }
    ?>
</body>
</html>