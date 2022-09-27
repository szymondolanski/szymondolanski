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
        $p = 1;
        $k = 20;
        $suma = 0;

        for($i=$p; $i <= $k; $i++){
            if($i % 2 ==0){
                $suma += $i;
            }
        }
        echo "suma wynosi z przedzialu $p do $k : $suma";
    ?>
</body>
</html>