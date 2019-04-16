<?php
$name = "world";
$hello = "hello $name";
$pi = 3.14;
$radius = 5;
$result = $pi * $radius;
$oxo = array(array('x', '', 'o'),
            array('o', 'o', 'x'),
            array('x', 'o', ''));
$array = $oxo[1][2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $hello ?></title>
</head>
<body>
    <h1><?php echo $hello ?></h1>
    <p><?php echo "$pi times $radius equals: $result" ?><p>
    <p><?php echo "The 3rd element in the 2nd array in the multidimentional array is $array"?></p>
</body>
</html>

