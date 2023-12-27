<?php

namespace App\Controller;

use App\Model\AuthModel;
class AuthController {

    public function index(){
        include_once '../app/View/login.php';
    }
    public function regester(){
        include_once '../app/View/regester.php';
    }
  

    public function registration() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
            $uri='auth/';
           } 
        }

       
    }
}






