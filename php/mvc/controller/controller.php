<?php

class controller{
    public function __construct(){
        $BaseURL="http://localhost/29Sept_laravel_TTS2/php/mvc/";
        if(isset($_SERVER['PATH_INFO'])){
            switch($_SERVER['PATH_INFO']){
                case '/home':
                    include_once('views/header.php');
                    include_once('views/mainpage.php');
                    include_once('views/footer.php');
                    break;
                 case '/about':
                    include_once('views/header.php');
                    include_once('views/about.php');
                    include_once('views/footer.php');
                    break;
                 case '/contact':
                    include_once('views/header.php');
                    include_once('views/contact.php');
                    include_once('views/footer.php');
                    break;
                default :
                    
                    break;
            }
        }
        else{
            include_once('views/header.php');
                    include_once('views/mainpage.php');
                    include_once('views/footer.php');
        }
    }
}
$controller=new controller;
?>