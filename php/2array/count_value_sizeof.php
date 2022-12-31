<?php
$a=array("a","b","c","d","a","ab","b");
echo "<pre>";
echo "========orignal array=========<br>";
print_r($a);
echo "=========array_count_values()==========<br>";
echo "function is count the number of value in array.<br>";
print_r(array_count_values($a));
echo "==========count()===========";
echo "count of length of array<br>";
print_r(count($a));
echo "<br>size of array<br>";
print_r(sizeof($a));
echo "</pre>";
?>