<?php

trait addition{
    public function add($a,$b){
        $c=$a+$b;
        echo "<br>Addition : $c<br>";
    }
}
trait multiplication{
    public function multi($a,$b){
        $c=$a*$b;
        echo "<br>Multiplication : $c<br>";
    }
}
trait division{
    public function divide($a,$b){
        $c=$a/$b;
        echo "<br>Division : $c<br>";
    }
}
class formula{
    use addition;
    use multiplication;
    use division;
    public function call($a,$b){
        $c=$a;
        $d=$b;
        $this->add($c,$d);
        $this->multi($c,$d);
        $this->divide($c,$d);
    }
}
$object=new formula;
$object->call(88,8);

?>
<p>we call many trait in one class or function without inherit any class</p>
<p>add tarit that class where we whant to use.</p>
<p>we call trait using this keyword.</p>