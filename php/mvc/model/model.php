<?php

class model{
    public function __construct(){
        
       try{
        $connection=new mysqli("localhost","root1","","test");
        echo "try";
       }catch(Exception $e){
        echo "catch";
        print_r($e);
       }
    
    }
    public function insert(){}
    public function update(){}
    public function delete(){}
    public function select(){}
    
}

?>