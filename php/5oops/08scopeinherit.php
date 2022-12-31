<?php

class parentclass{
    public static $abc="Hello World";
    public static function f1(){
        echo "<br>Parent class-function f1<br>";
        self::f2();  //-in same class we use self to perform or access function or variable
    }
    public static function f2(){
        
        echo "<br>Parent class-function f2<br>";
    }
}
class childclass extends parentclass{
    public static function f1(){
        echo "<br>Child class-function f1<br>";
        //only in child class using parent keyword we access parent class function and varible
        parent::f1();
        self::f3();
    }
    public static function f3(){
        echo "<br>Child class-function f3<br>";
    }
}
//parentclass::f1(); 
//--------parent class function excute
 $object=new childclass;
 $object->f1();
//-------child class function excute
//parent::f1();-----access in only child-class

?>