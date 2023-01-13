<?php

// echo "<pre>";
//phpinfo();
// exit;
//error_reporting(E_ALL);//stop to show error

// mysqli_report();
//mysqli_report(MYSQLI_REPORT_ALL) ;//used for version php 7
date_default_timezone_set('Asia/Kolkata');    //to set to current location time
class model{
    public $connection="";
    public function __construct(){
    
        try {
    
                $this->connection = new mysqli("localhost","root","", "test");//connect to database
                
                
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
    public function insert($table,$data){
        $arraykey=implode(",",array_keys($data));
        $arrayvalue=implode("','",$data);
        //$id=$table."_id";
        //$date=date('d-m-Y H:i:s A');
        $SQL="INSERT INTO $table ($arraykey,date) VALUES ('$arrayvalue','".date('d-m-Y H:i:s A')."')";
        //print_r($SQL);
        $SQLEx=$this->connection->query($SQL);
        if ($SQLEx > 0) {
            $ResponseData['Code']="1";
            $ResponseData['Msg']="Success";
            $ResponseData['Data']="1";
        }else{
            $ResponseData['Code']="0";
            $ResponseData['Msg']="Error while inserting";
            $ResponseData['Data']="0";
        }
        return $ResponseData;
    }


    public function login($username,$password){
        $SQL="SELECT * FROM users WHERE password='$password' AND ( name='$username' OR email='$username')";
        $SQLEx=$this->connection->query($SQL);
        //print_r($SQL);
        if ($SQLEx->num_rows > 0) {
            
            while ($SQLExFetch = $SQLEx->fetch_object()) {
                $SqlFetchData[]=$SQLExFetch;
            }
            $ResponseData['Code']="1";
            $ResponseData['Msg']="Success";
            $ResponseData['Data']=$SqlFetchData;
        }
        else {    
            $ResponseData['Code']="0";
            $ResponseData['Msg']="Error while inserting";
            $ResponseData['Data']="0";
        }
        
        return $ResponseData;

    }
    // public function select($table){
    //     $SQL="SELECT * FROM $table"; 
    //     $SQLEx=$this->connection->query($SQL);
    //     if ($SQLEx->num_rows > 0) {
            
    //         while ($SQLExFetch = $SQLEx->fetch_object()) {
    //             $SqlFetchData[]=$SQLExFetch;
    //         }
    //         $ResponseData['Code']="1";
    //         $ResponseData['Msg']="Success";
    //         $ResponseData['Data']=$SqlFetchData;
    //     }
    //     else {    
    //         $ResponseData['Code']="0";
    //         $ResponseData['Msg']="Error while inserting";
    //         $ResponseData['Data']="0";
    //     }
        
    //     return $ResponseData;

    // }
    // public function update(){}
    // public function delete(){}
    // public function select(){}

    
}

?>