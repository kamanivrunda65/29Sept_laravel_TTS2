<?php

class accessdatamember{
    public $publicvariable="public value";
    protected $protectedvariable="producted value";
    private $privatevariable="private value";
    function f1($a,$b){
        
        echo $this->privatevariable."=just accesseible inside class<br>";
        return $a*$b;
        
    }
}
class inheritclass extends accessdatamember{
    function f2($a,$b,$c){
        echo $this->protectedvariable."=not accessible out side of class too exept inherited class<br>";

        return $a*$b*$c;
            }
}
$abc=new inheritclass;
echo "<br>main class 4*5=>".$abc->f1(4,5)."<br>";
echo "<br>inherit class 5*5*5=>".$abc->f2(5,5,5)."<br>";
echo $abc->publicvariable."=>accessible within class and out side of class too<br>";
echo "<br>class is collection of datmember and member function.<br>";

echo "<br>datamember is variable which is used for entire class<br>";
echo "<br>to declair datamember we user public,protected and private keywords.<br>";
echo "<br>And that datamember access by (this) keyword.<br>";
echo "<br>private and protected datmember are access in class by (this) keyword and public datamember access by object(abc)<br>";
echo "<br>The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.<br>";
echo "<br>protected properties or methods can be accessed within the class and by classes derived from that class<br>";
?>