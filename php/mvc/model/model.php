<?php

// echo "<pre>";
// phpinfo();
// exit;
error_reporting(E_ALL);//stop to show error

// mysqli_report();
mysqli_report(MYSQLI_REPORT_ALL) ;//used for version php 7
date_default_timezone_set('Asia/Kolkata');    //to set to current location time
class model{
    public function __construct(){
    
        try {
    
                $connection = new mysqli("localhost","root1","", "test");//connect to databse
                
            } catch (Exception $e) {
                $errormsg= $e->getMessage();//for only erroe msg
                if (!file_exists("log")) {
                    mkdir("log");//generate log folder if it not exist
                }
                $errormsg=PHP_EOL ."".$e->getMessage();//PHP_EOL(end of line)=>used to appand data at new line in same file
                file_put_contents("log/".date('d-m-Y')."___error.txt","$errormsg ----->>Date&Time :".date('d-m-Y H:i:s A'),FILE_APPEND);
                //first parameter file location,second data which want to store in that file, and FILE_APPEND used to store data in same file 
            }
    
    }
    public function insert(){}
    public function update(){}
    public function delete(){}
    public function select(){}
    
}

?>