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
        $liczba = 6;
        switch($liczba)
        {
            case 1;
            echo 'poniedzialek';
            break;
            case 2;
            echo 'wtorek';
            break;
            case 3;
            echo 'sroda';
            break;
            case 4;
            echo 'czwartek';
            break;
            case 5;
            echo 'piatek';
            break;
            case 6;
            echo 'sobota';
            break;
            case 7;
            echo 'niedziela';
            break;
            default:
            echo 'nie znam takiego dnia tygodnia';
        }
    ?>
</body>
</html>