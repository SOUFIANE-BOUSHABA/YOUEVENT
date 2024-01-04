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
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 'UpdateUser') {
            $userId = $_POST['user_id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role_id = $_POST['userType'];
    
            $newUser = new AdminModel();
            $newUser->setFirstname($firstname);
            $newUser->setLastname($lastname);
            $newUser->setEmail($email);
            $newUser->setPassword($password);
            $newUser->setRoleId($role_id);
            if ($newUser->updateUser($userId, $newUser->getFirstname(), $newUser->getLastname(), $newUser->getEmail(), $newUser->getPassword(), $newUser->getetRoleId())) {
               $this->getAllUser();
            }
        }
    }

    public function deletUser($id){
        $userdel = new AdminModel();
        $res = $userdel->deletUser($id);
        if($res){
            $this->getAllUser();
        }
    }


    public function showStatistics(){
        $adminModel = new AdminModel();
        $eventCount = $adminModel->getEventCount();
        $reservationCount = $adminModel->getReservationCount();

        include_once '../app/View/dashboard/dashboard.php';
    }
    
}