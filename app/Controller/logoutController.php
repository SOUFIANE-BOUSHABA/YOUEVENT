<?php
namespace App\Controller;
class logoutController {
    static function logoutUser() {
        if (isset($_POST['logout'])) {
            session_destroy();
            header("Location: user");
            exit;
        }
    }
}