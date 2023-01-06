<?php
require_once("model/model.php");
class controller extends model{
    public $BaseURL="http://localhost/29Sept_laravel_TTS2/php/mvc/assets";

    public function __construct(){
        parent::__construct();
    
       
        if(isset($_SERVER['PATH_INFO'])){
            switch($_SERVER['PATH_INFO']){
                case '/home':
                    include_once('views/header.php');
                    include_once('views/mainpage.php');
                    include_once('views/footer.php');
                    break;
                 case '/allusers':
                    $Res = $this->select("users");
                    // echo "<pre>";
                    // print_r($Res);
                    // echo "</pre>";
                    echo json_encode($Res);//print as line
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
                    if (isset($_REQUEST['login'])) {
                        $Res = $this->login($_POST['username'],$_POST['password']);
                        // echo "<pre>";
                        // print_r($Res);
                        // echo "</pre>";
                        if ($Res['Code'] == 1) {
                             $_SESSION['UserData']= $Res['Data'][0];
                            if ($Res['Data'][0]->role_id == 1) {
                                header("location:admindashboard");
                            } else {
                                header("location:home");
                             }
                            
                        }else {
                                echo "<script>alert('invalid user crediantials')</script>";
                            } 
                         }
            
                    
                    break;
                case '/signup':
                    include_once('views/header.php');
                    include_once('views/signup.php');
                    include_once('views/footer.php');
                    if(isset($_REQUEST['register'])){
                        array_pop($_REQUEST);//to cut last add request name(submit button)
                        array_pop($_REQUEST);
                        //print_r($_REQUEST);
                        $Res=$this->insert("users",$_REQUEST);
                        if($Res['Code'] == 1){
                            header("location:login");
                        }
                        else{
                            echo "Error";
                        }
                    }
                    break;
                case '/admindashboard':
                    include_once('views/admin/adminheader.php');
                    include_once('views/admin/admindashboard.php');
                    include_once('views/admin/adminfooter.php');
                    break;
                case '/signup':
                    include_once('views/header.php');
                    include_once('views/signup.php');
                    include_once('views/footer.php');
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