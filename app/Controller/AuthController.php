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
            include "../app/View/login.php";
           } 
        } 
    }

    public function loginUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='login') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $loginUser = new AuthModel();
           if($loginUser->loginUser($email , $password)){
            include "../app/View/dashboard/dashboard.php";
           } 
        } 
    }

}






