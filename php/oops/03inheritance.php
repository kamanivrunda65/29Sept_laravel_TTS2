<?php

class add{
    function addition($a,$b){
       
        return $a+$b;
    }
}
$Math = new avrage;
class avrage extends add{
 function avg($a){
     
     return $a/2;
}
}
echo "<br>";
$abc=$Math->addition(73,852);
echo $Math->avg($abc);
echo "<br>";
$pqr=$Math->addition(95,195);
echo $Math->avg($pqr);
echo "<br>access parent class function by child class object.<br>";
?>