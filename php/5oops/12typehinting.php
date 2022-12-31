<?php
class class1{
    public function f1(class2 $classobject2){   //object ant tat object class 
        echo "<br>parent class access child class function.<br>";
        echo $classobject2->f2();
        //parent class acees child class datamember and member function by child class object
        echo "<br>multiplication =>".$classobject2->f3(65,2);
    }
}
class class2 extends class1{
    public function f2(){
        echo "<br>f2 function<br>";
    }
    public function f3(int $a,int $b){
        return $c=$a*$b;
    }
}
$classobject1=new class1;
$classobject2=new class2;
echo $classobject1->f1($classobject2);//--pass object name
//$classobject2->f3(65,abc);------must be of the type int, string given,

?>