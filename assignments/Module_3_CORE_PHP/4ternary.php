<?php

$a=45;
$b=87;
$c=43;
echo ((($a>$b)?$a:$b)>$c)?(($a>$b)?$a:$b):$c;

echo "<br>";
$a=85;
$b=48;
$c=94;
$com=($a>$b)?$a:$b;
echo ($com>$c)?$com:$c;

?>