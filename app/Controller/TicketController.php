<?php

namespace App\Controller;
use App\Controller\AuthController;
class TicketController {

    private $auth;
    public function __construct() {
        $this->auth = new AuthController();
    }

    public function showTicketBtn() {
        if ($this->auth->isLoggedIn()) {
            include_once (__DIR__ . "/../View/includes/partials/getTicketBtn.php");
        } else {
            echo "Login to access this feature!";
        }
    }
    public function getTicket() {

    }
}