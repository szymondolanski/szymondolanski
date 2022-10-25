<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-transform:uppercase">Zadanie 3</div><br>
<form action="" method="post">
    <input type="number" name="a">
    <input type="submit" value="Pokaz">
</form>
<?php 
    if(isset($_POST['a'])) 
    {
        $a = $_POST['a'];
        $suma = 0;
        $i = 0;

        while($i<100){
            if($a%2 == 0){
                $suma = $suma + $a;
                $a = $a+2;
                $i = $i+1;

            }
            else{
                $a=$a+1;
            }
        }
        echo'suma wynosi stu kolejnych liczb parzystych zaczynając od liczby podanej przez uzytkownika wynosi: ' . $suma;

    }
?>
</body>
</html>