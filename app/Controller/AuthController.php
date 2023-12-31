<?php

namespace App\Controller;
use App\Controller\AdminController; 
use App\Model\AuthModel;
use App\Controller\MailerController;
use App\Controller\UserController;

class AuthController {

    private $user;

    public function __construct() {
        $this->user = new UserController();
    }
    public function index(){
        include_once '../app/View/login.php';
    }
    public function register(){
        include_once '../app/View/regester.php';
    }
  

    public function registration() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='regester') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role_id=$_POST['userType'];

            $newUser = new AuthModel();
            $newUser->setFirstname($firstname);
            $newUser->setLastname($lastname);
            $newUser->setEmail($email);
            $newUser->setPassword($password);
            $newUser->setRoleId($role_id);
           if($newUser->registerUser()){
             MailerController::sendMail($newUser->getEmail(),'regestration','bonjour monsieur '.$newUser->getFirstname().' '.$newUser->getLastname());
            include "../app/View/login.php";
           } 
           
        } 
    }

    public function loginUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='login') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $loginUser = new AuthModel();
         
            $user=$loginUser->loginUser($email , $password);
            if($user){
              
                $_SESSION['email']= $user->email;
                $_SESSION['first']= $user->first_name;
                $_SESSION['last']=$user->last_name;
                $_SESSION['role_id']=$user->id_role;
                $_SESSION['user_id']=$user->user_id;
                if($_SESSION['role_id']=='3'){
                    $this->user->index();
                    exit();
                }else{
                    include_once '../app/View/dashboard/dashboard.php';
                    exit();
                }
           } else {
            include_once '../app/View/login.php';
           }
        } 
    }

}



