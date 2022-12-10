<?php
echo "<pre>OOPS- Object-oriented programming language.<ul>";

echo "<li>Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.</li>";
echo "<li>OOP helps to keep the PHP code DRY-Dont Repeat Yourself, and makes the code easier to maintain, modify and debug.</li>";
echo "<li>OOP makes it possible to create full reusable applications with less code and shorter development time.</li>";
echo "<li>function declatration time parameter for recieving the value for making function dynamic.</li>";
echo "<li> UDF with arg</li><br>";
function car($name,$color,$company_name=""){
    echo " $name <br> $color <br> $company_name<br>";
}


echo "<li>function calling we pass the value that whould be considered as argument</li>";
car("Audi queen","white","Audi");
echo "<br>";
car("Sentro","black");
echo "<br>";

function pr($m1,$m2,$m3,$m4,$m5){
    echo "subject1=$m1,subject2=$m2,subject3=$m3,subject4=$m4,subject5=$m5<br>";
    return ($m1+$m2+$m3+$m4+$m5)/5;
}

echo "<li>Every fucnction pass diffrant parameter and get result.</li>";
echo "<br>";
echo "PR=".pr(75,84,84,96,85);
echo "<br>";
echo "PR=".pr(83,74,85,63,52);
echo "<br>";
echo "PR=".pr(73,62,83,94,74);
echo "</ul></pre>";


?>