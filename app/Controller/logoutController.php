<?php
namespace App\Controller;
class LogoutController {
    static function logoutUser() {
        if (isset($_POST['logout'])) {
            session_destroy();
       
        }
    }

    public function test(){
        session_destroy();
        include '../app/View/login.php';
    }
}