<?php

abstract class abstractclass{
    abstract public function f1($a,$b);
   
    public function f2($c){
        echo "Avarage=>".($c/2);
    }
}
class childclass extends abstractclass{
    public function f1($a,$b){
        $c=$a+$b;
        $this->f2($c);
    }
    public function f3(){
        echo "<br>simple method<br>";
    }
  
}


$cclass=new childclass;
//$cclass->f1(4,5);-------//print Avarage=>4.5 
//$cclass->f3();----------//print simple method
?>
<p>Abstaction => hide something</p>
<p>Parent will declared abstracted method, abstracted methods only declared by abstracted class only </p>
<p>Abstracted class cant be initiated/able to object create </p>
<p>An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.</p>
<p>The child class method must be defined with the same name and it redeclares the parent abstract method</p>
<p>The child class method must be defined with the same or a less restricted access modifier</p>
<p>The number of required arguments must be the same. However, the child class may have optional arguments in addition</p>
<p>The child class may define optional arguments that are not in the parent's abstract method</p>