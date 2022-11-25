<?php
echo "<pre>";
echo "<h2>An array stores multiple values in one single variable.<br>";
echo "An array is a special variable, which can hold more than one value at a time.<br>";
echo "An array stores multiple values in one single variable.<br>";

echo "<ul><li>1.index array-Arrays with a numeric index</li>";
echo "<ul><li>The index can be assigned automatically (index always starts at 0)</li>";
echo "<li>we have described arrays that are a single list of key/value pairs.</li>";
echo "<li>Ex.</li>";
$indexarray= array('80',76.89,34,98,true,"kajal");
print_r($indexarray);
var_dump($indexarray);
var_export($indexarray);
echo "<li>To loop through and print all the values of an indexed array, you could use a for loop, like this.</li>";
$num=count($indexarray);
for($i=0;$i<$num;$i++){
    echo $i."-".$indexarray[$i].",";
}
echo " </li></ul>";

echo "<li>2.Associative arrays - Arrays with named keys</li>";
echo "<ul><li>Associative arrays are arrays that use named keys that you assign to them.</li>";
echo "<li>Ex.</li>";
$assarray= array("Math"=>78,"science"=>98,"English"=>90);
print_r($assarray);
echo "<li>To loop through and print all the values of an associative array, you could use a foreach loop</li>";
foreach($assarray as $key=>$value){
    echo "$key-$value ,";
}
echo " </li></ul>";
echo "<li>3.Multidimensional arrays - Arrays containing one or more arrays</li>";
echo "<ul><li> sometimes you want to store values with more than one key. For this, we have multidimensional arrays.</li>";
echo "<li>A multidimensional array is an array containing one or more arrays.</li>";
echo "<li>The dimension of an array indicates the number of indices you need to select an element.</li>";
echo "<li>We can also put a for loop inside another for loop to get the elements of the array (we still have to point to the two indices)</li>";
echo "<li>Ex.</li>";
$multiarray=array("School-Name"=>array("Std-8"=>array("A"=>array("Math"=>78,"science"=>98,"English"=>90),
"B"=>array("Math"=>98,"science"=>76,"English"=>86),
"C"=>array("Math"=>97,"science"=>68,"English"=>93)),
"Std-9"=>array("A"=>array("Math"=>45,"science"=>32,"English"=>63),
"B"=>array("Math"=>75,"science"=>86,"English"=>82),
"C"=>array("Math"=>82,"science"=>32,"English"=>73)),
"Std-10"=>array("A"=>array("Math"=>68,"science"=>48,"English"=>93),
"B"=>array("Math"=>97,"science"=>56,"English"=>96),
"C"=>array("Math"=>87,"science"=>83,"English"=>83))));
print_r($multiarray);
echo "Std 9 Student B Science Marks :".$multiarray['School-Name']['Std-9']['B']['science']."</h2>";
?>