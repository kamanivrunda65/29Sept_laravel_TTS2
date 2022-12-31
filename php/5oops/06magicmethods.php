<?php

class mainclass{
    public function __get($abc){
        //get any data which pass by mainclassobject
        echo $abc;
    }
    public function __set($name,$value){
        //set value first parameter as variable and second as value of that variable
        echo "<br>Variable Name : ".$name." variable value : ".$value;
    }
    public function __call($name,$table){
        //used for query
        //call by function that function name pass through fist variable
        //passed parameter store in array
        echo "<br>".$name." * from ".$table[0].",".$table[1];
    }
    public function __constuct(){
        //constuct call first , befor any function
        echo "<br>Construct function<br>";
    }
    public function __destruct(){
        //destuct class perform at end
        echo "<br>Destructer function<br>";
    }

}
$mainclassobject=new mainclass;
//pass data in class
echo $mainclassobject->getvalue;
echo "<br>";
 $mainclassobject->variablename="set value";
echo "<br>";
echo $mainclassobject->select("user","admin");
echo $mainclassobject->update("user");

?>