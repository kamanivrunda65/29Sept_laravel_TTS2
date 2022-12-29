<?php
require_once("model/model.php");
class controller extends model{


    public function __construct(){
        parent::__construct();
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
                case '/login':
                    include_once('views/header.php');
                    include_once('views/login.php');
                    include_once('views/footer.php');
                    break;
                case '/signup':
                    include_once('views/header.php');
                    include_once('views/signup.php');
                    include_once('views/footer.php');
                    if(isset($_REQUEST['register'])){
                        array_pop($_REQUEST);//to cut last add request name(submit button)
                        array_pop($_REQUEST);
                        print_r($_REQUEST);
                        $Res=$this->insert("users",$_REQUEST);
                        if($Res['Code'] == 1){
                            header("location:login");
                        }
                        else{
                            echo "Error";
                        }
                    }
                    break;
                default :
                    
                    break;
            }
        }
        else{
            header("location:home");
        }
    }
}
$controller=new controller;
?>