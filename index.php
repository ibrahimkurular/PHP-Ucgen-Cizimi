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
    echo "<pre>";
    $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
    $map_arr = array_map(function ($a) {
        global $planets;
        if ($a == "") {
            return NULL;
        } else {
            return $a++;
        }
    }, $planets);
    $filter_arr = array_filter($map_arr, function ($a) {
        return $a != NULL ? $a : false;
    });
    function rand_Arr($i)
    {
        global $filter_arr;
        $result = array_flip($filter_arr);
        return array_rand($result, $i);
    }

    print_r(rand_Arr(2));
    print_r(rand_Arr(3));
    print_r(rand_Arr(2));
    print_r(rand_Arr(4));
    print_r(rand_Arr(5));
    ?>
</body>

</html>