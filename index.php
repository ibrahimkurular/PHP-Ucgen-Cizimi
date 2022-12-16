<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function ucgenCiz($sayi)
    {
        for ($i = 0; $i <= $sayi; $i++) {
            $a = 0;
            while ($a <= $i) {
                $a++;
                echo $a * 0;
            }
            echo "<br>";
        }
    }
    ucgenCiz(15);  
    ?>
</body>

</html>
