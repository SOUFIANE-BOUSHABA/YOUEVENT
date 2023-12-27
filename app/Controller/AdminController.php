<?php

namespace App\Controller;
use App\Model\AdminModel;

class AdminController {

    public function index(){
        include_once '../app/View/dashboard/dashboard.php';
    }
   
    public function getAllUser(){
        $UsersAll = new AdminModel();
        $users=$UsersAll->findAll();
        include_once '../app/View/dashboard/users.php';
    }


    public function updateUser(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='UpdateUser') {
            $userId=$_POST['user_id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role_id=$_POST['userType'];

            $newUser = new AdminModel();
            $newUser->setFirstname($firstname);
            $newUser->setLastname($lastname);
            $newUser->setEmail($email);
            $newUser->setPassword($password);
            $newUser->setRoleId($role_id);
           if($newUser->updateUser()){
            include "../app/View/login.php";
           } 
        } 
    }
}