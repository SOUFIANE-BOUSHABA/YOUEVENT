<?php
namespace App\Controller;
class LogoutController {
    static function logoutUser() {
        if (isset($_POST['logout'])) {
            session_destroy();
       
            header('Location: /YOUEVENT/user/home');
        }
    }

    public function test(){
        session_destroy();
        include '../app/View/login.php';
    }
}