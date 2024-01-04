<?php

namespace App\Controller;
use App\Controller\AuthController;
class LoginController {

    private $Auth;
    public function __construct() {
        $this->Auth = new AuthController();
    }
    public function index(){
        include_once '../app/View/login.php';
    }
    public function login() {
        $this->Auth->loginUser();
    }
}