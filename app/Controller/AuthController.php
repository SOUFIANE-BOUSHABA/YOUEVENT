<?php

namespace App\Controller;
use App\Controller\AdminController; 
use App\Model\AuthModel;
use App\Controller\MailerController;
use \Firebase\JWT\JWT;
use \Firebase\JWT\ExpiredException;

class AuthController {
    private $key ="boushababoushaba20010606boushaba";
    public function index(){
        include_once '../app/View/login.php';
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
                $token = $this->generateToken($user);

                $_SESSION['token'] = $token;
               
                $_SESSION['email']= $user->email;
                $_SESSION['first']= $user->first_name;
                $_SESSION['last']=$user->last_name;
                $_SESSION['role_id']=$user->id_role;
                $_SESSION['user_id']=$user->user_id;
                if($_SESSION['role_id']=='3'){
                    include_once '../app/View/main/index.view.php';
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


    private function generateToken($user) {
        $tokenId = base64_encode(random_bytes(32)); 
        $issuedAt = time();
        $expire = $issuedAt + 3600; 

        $token = [
            'iat' => $issuedAt,
            'exp' => $expire,
            'data' => [
                'user_id' => $user->user_id,
                'email' => $user->email,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'role_id' => $user->id_role,
            ]
        ];

        return JWT::encode($token, $this->key, 'HS256');
    }



}



