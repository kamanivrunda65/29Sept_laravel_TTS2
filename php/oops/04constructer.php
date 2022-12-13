<?php

class sports{
    //parameterized constructer
    public function __construct($team,$game){
        $this->teammember=$team;
        $this->gamename=$game;
        echo "Constructor-------";
        echo $this->gamename."Teammember=>".$this->teammember;
        echo "<br>";
    }
    public function hockey(){
        echo "<br>Function class-------Hockey".$this->teammember;
    }
    public function cricket(){

        echo "<br>Function class------Cricket".$this->teammember;
    }
}
    $hockey=new sports("12","Hockey");
    $cricket=new sports("13","Cricket");
    $hockey->hockey();
    $cricket->cricket();


    echo "<br>A constructor allows you to initialize an object's properties upon creation of the object.<br>";
    echo "<br>construnctor is a method which is invoke by default when class object are created<br>";
    echo "<br>constructor never return,and set value only<br>";
    echo "<br>constructor use for init some values<br>";
    echo "<br>we can get the variable or datamember value that assign by constucter.<br>";
    
?>