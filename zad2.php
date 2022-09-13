<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $liczba = 10;
        if($liczba == 0) echo 'Podana liczba jest rowna 0';
        else if($liczba > 0) 
        {
        echo 'Podana liczba jest > od 0';
        }
        else echo 'Podana liczba jest < od 0';
    ?>
    <?php
        $a = 0;
        if($a == 0):
    ?>
    <h1>Liczba jest rowna 0</h1>
    <?php endif; ?>

</body>
</html>