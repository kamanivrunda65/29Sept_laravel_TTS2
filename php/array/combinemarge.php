<?php




$abc=array("a"=>"Shift","b"=>"john","c"=>"richard","a"=>"calvin");
$pqr=array("b"=>"joy","ab"=>"roy","d"=>"quick");



echo "<pre>";

print_r($abc);
print_r($pqr);

echo "<br>=============================== Array Combine =================================== <br>";
echo "combine set first array value as key and second array value as value.<br>";
$newarr = (array_combine($abc,$pqr ));
print_r($newarr);
echo "<br>=============================== Array Merge =================================== <br>";
echo "last value of variable is set or show at print time <br>";
echo "Marge append the value in array<br>";

print_r(array_merge($abc,$pqr));
echo "<br>=============================== Array Merge Recursive=================================== <br>";
echo "array_merge_recursive show key both value that diff but not in diff value in same array.<br>";
print_r(array_merge_recursive($abc,$pqr));



?>