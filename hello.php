<?php
$name = "world";
$hello = "hello $name";
$pi = 3.14;
$radius = 5;
$result = $pi * $radius;
$oxo = array(array('x', '', 'o'),
            array('o', 'o', 'x'),
            array('x', 'o', ''));
echo <<<_END
$hello
<br>
$oxo[1][2]
<br>
$pi times the $radius equals: $result
_END
?>