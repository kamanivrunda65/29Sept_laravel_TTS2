<?php


interface TOPSInterface{
    function Total($a,$b,$c);
    
}

class OtherStudentFromBatch{
    public function Something(){
        
    }
}
class Marks extends OtherStudentFromBatch implements TOPSInterface{
    public function Total($a,$b,$c){
        $pr=($a+$b+$c)/3;
        echo "<br>Total=>".$pr;
    }
    public function Marks(){
        
        $this->Total(75,85,96);
        $this->Total(75,85,91);
    }
   
}


$abc = new Marks;

?>