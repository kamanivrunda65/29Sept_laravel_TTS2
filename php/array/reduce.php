<?php
function myfunction($r1,$r2){
	return $r1 . "-" . $r2;
}
$a=array("Dog","Cat","Horse");
// echo ($a);
echo (array_reduce($a,"myfunction"));
shuffle($a);
echo "<pre>";
echo "<br>reduce th array using single value<br>";
echo "function assigne value to anothe or next one variable<br>";
echo "change value key at evry refresh time<br>";
echo "select any rendom value from array.";
print_r($a);
echo "</pre>";
?>