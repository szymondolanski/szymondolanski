<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div style="text-transform:uppercase">Zadanie 2</div><br>
<form action="" method="post">
        <input type="number" name="liczba1" placeholder="Podaj liczbe 1">
        <input type="number" name="liczba2" placeholder="Podaj liczbe 2">
        <input type="submit" value="Oblicz">
    </form>
    <?php
    function dodawanie($a,$b)
        {
        echo ($a+$b);
        }
     function odejmowanie($a,$b)
         {
            echo($a-$b);
        }
    function mnozenie($a,$b)
    {
        echo ($a*$b);
    }
    function dzielenie($a,$b)
    {
        if($b != 0){
            echo ($a/$b);
        }
        else{
            echo 'NIE DZIELI SIE PRZEZ 0';
        }
    }

    if(isset($_POST['liczba1'])) 
    {
        $l1 = $_POST['liczba1'];
        $l2 = $_POST['liczba2'];
        echo '<br><br>';
        echo 'Suma wynosi: ';
        dodawanie($l1,$l2);
        echo '<br><br>';
        echo 'Roznica wynosi: ';
        odejmowanie($l1,$l2);
        echo '<br><br>';
        echo 'Dzielenie wynosi: ';
        dzielenie($l1,$l2);
        echo '<br><br>';
        echo 'Mnozenie wynosi: ';
        mnozenie($l1,$l2);
        echo '<br><br>';
    }
    ?>
</body>
</html>