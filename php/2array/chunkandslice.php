<?php
echo "<pre>";

$abc=array("a","e","i","o","u");
echo "======Orignal Array======<br>";
print_r($abc);
echo "======chunk======<br>";
echo "array_chunk divide array in no of parts.ex 2<br>";
print_r(array_chunk($abc,2));
echo "======slice======<br>";
echo "array_slice slice the array that start from particular index number to end<br> ";
print_r(array_slice($abc,2));
echo "</pre>";

?>