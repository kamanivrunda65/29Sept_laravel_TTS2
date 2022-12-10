<?php
echo "<pre>Class And Object<ul>";

echo "<li>Classes and objects are the two main aspects of object-oriented programming.</li>";
echo "<li>a class is a template for objects, and an object is an instance of a class.</li>";
echo "<li>When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.</li>";
echo "<li>Ex.... we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. </li>";



echo "<li>Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.</li>";


echo "<li>Objects of a class are created using the new keyword.</li>";

class addition{
    function addition($a,$b){
       
        return $a+$b;
    }
}
$Math = new addition;
 function addition($a,$b,$c){
     
     return $a+$b+$c;
}
echo "<br>";
echo $Math->addition(73,852);
echo "<br>";
echo $Math->addition(95,95);
echo "<br>";
echo "Data not pass by class object function=".addition(835,745,674);


echo "<li></li>";
echo "<li></li>";
echo "<li></li>";
echo "</ul></pre>";
