<?php
//use classwithoutobjet as globalclasswithoutobjet
class classwithoutobject{
    public static $abc="Hello World-static variable";
    public static function parentfunction(){
        echo "<br>Parent Function<br>";
        echo "<br>without create object of class we access or call function by using double colon sign and turn that function or variable to static. <br>";
        echo "<br>static data access by scope resolution sign<br>";
        echo "<br>The Scope Resolution Operator / the double colon,
         is a token that allows access to static, constant, and overridden properties or methods of a class.<br>";

        echo "<br>When referencing these items from outside the class definition, use the name of the class.<br>";
    }
}
classwithoutobject::parentfunction();
//in scope resolution datavriable used $
echo classwithoutobject::$abc;

?>