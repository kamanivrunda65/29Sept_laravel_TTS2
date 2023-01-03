<?php
class parentclass{
    public $a = "Public value";
    protected $b = "Protected value";
    private $c = "Private value";
    public function parentfunction(){  
        echo "<br>parentclass access all variable .<br>"; 
        foreach ($this as $key => $value) {
            echo "<br>Parent Function Key is : $key , value is :$value <br>";
        }      
    }
}
class Childclass extends parentclass{
    public function childfunction(){  
        echo "<br>only private and protected variable access by child class<br>";
        foreach ($this as $key => $value) {
            echo "<br>Child Function Key is : $key value is : $value <br>";
        }       
    }
}

$cclass = new Childclass;
echo $cclass->childfunction();
echo $cclass->parentfunction();

foreach ($cclass as $key => $value) {
    echo "outside from class : $key value is : $value <br>";
}
?>