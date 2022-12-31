<?php
session_start();

if(isset($_GET['did'])){
    $did=$_GET['did'];
    if($did==1){
        unset($_SESSION['cartdata']['product1']);
    }
    if($did==2){
        unset($_SESSION['cartdata']['product2']);
    }
    if($did==3){
        unset($_SESSION['cartdata']['product3']);
    }
    if($did==4){
        unset($_SESSION['cartdata']['product4']);
    }
}
if(isset($_GET['aid'])){
    $aid=$_GET['aid'];
    if($aid){
        unset($_SESSION['cartdata']);
    }
}

header("location:product.php");



?>