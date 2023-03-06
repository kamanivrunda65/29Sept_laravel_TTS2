<?php
require_once("model/model.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require ('vendor/autoload.php');

class controller extends model{
   // public $BaseURL="http://localhost/29Sept_laravel_TTS2/php/mvc/assets";

    public function __construct(){
        parent::__construct();
        ob_start();
       
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
                // case '/login':
                //     include_once('views/header.php');
                //     include_once('views/login.php');
                //     include_once('views/footer.php');
                //     if (isset($_REQUEST['login'])) {
                //         $Res = $this->login($_POST['username'],$_POST['password']);
                //         // echo "<pre>";
                //         // print_r($Res);
                //         // echo "</pre>";
                //         if ($Res['Code'] == 1) {
                //              $_SESSION['UserData']= $Res['Data'][0];
                //             if ($Res['Data'][0]->role_id == 1) {
                //                 header("location:admindashboard");
                //             } else {
                //                 header("location:home");
                //              }
                            
                //         }else {
                //                 echo "<script>alert('invalid user crediantials')</script>";
                //             } 
                //          }
            
                    
                    // break;
                // case '/signup':
                //     include_once('views/header.php');
                //     include_once('views/signup.php');
                //     include_once('views/footer.php');
                //     if(isset($_REQUEST['register'])){
                //         array_pop($_REQUEST);//to cut last add request name(submit button)
                //         array_pop($_REQUEST);
                //         //print_r($_REQUEST);
                //         $Res=$this->insert("users",$_REQUEST);
                //         $this->sendemail($_REQUEST['email'],"Welcome","successfully register...");
                //         if($Res['Code'] == 1){
                //             header("location:login");
                //         }
                //         else{
                //             echo "Error";
                //         }
                //     }
                //     break;
              
                case '/registration' :
                   //echo "<pre>";
                
                    $data = json_decode(file_get_contents('php://input'), true);//decode input data which get from input request
                     //print_r($data);  
                    if ($data['name'] != "" && $data['password'] !="") {
                    $Res = $this->insert("users",$data);
                    $this->sendemail($data['email'],"Welcome","successfully register...");
                    echo json_encode($Res);
                 }else{
                    echo "User Name and Password is required";
                }
                  break;


                case '/login' :
                    //echo "<pre>";
                    //$Res = $this->login($_POST['name'],$_POST['password']);
                    $data = json_decode(file_get_contents('php://input'), true);//decode input data which get from input request
                    //print_r($data);  
                    if ($data['name'] != "" && $data['password'] !="" ){
                    $Res = $this->login($data['name'],$data['password']);//data send by assigned variable
                    echo json_encode($Res);//get full data of that employee
                    }else{
                        echo "User Name and Password is required";
                    }
                    
                    break; 
                case '/users':
                
                    $Res = $this->select("users");
                  
                    echo json_encode($Res);
                    break;   
                case '/send_email':
                
                    $Res = $this->select("users");
                  
                    echo json_encode($Res);
                    break;  
                default :
               
                    break;
                    

            }
        }
        else{
            header("location:home");
        }
    
        ob_flush();
    }
    public function sendemail($sendemailto,$sub,$body){
        $mail = new PHPMailer(true);
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->Username   = 'kamanivrunda123@gmail.com';                     //SMTP username
        $mail->Password   = 'dljorzlqvyzrrwli';  // your password 2step varified 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
        $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
        $mail->setFrom('kamanivrunda123@gmail.ccom', 'Name');
        //$mail->addAddress($_POST['email']);   // Add a recipient
        $mail->addAddress($sendemailto);
        $mail->isHTML(true);  // Set email format to HTML
        
        $bodyContent = "<h1>HeY!,</h1>: OTP : ";
        $bodyContent .= '<p>This is a email that Vrunda send you From LocalHost using PHPMailer</p>';
        $mail->Body    = $body;
        $mail->Subject = $sub;
        if(!$mail->send()) {
          echo 'Message was not sent.';
          echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
          echo 'Message has been sent.';
        }
    }
}
$controller=new controller;
?>