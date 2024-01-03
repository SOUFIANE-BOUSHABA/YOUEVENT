<?php

namespace App\Controller;
use App\Controller\AuthController;
class RegisterController {

    private $Auth;
    public function __construct() {
        $this->Auth = new AuthController();
    }
    public function index(){
        include_once '../app/View/register.php';
    }
    public function register() {
        $this->Auth->registration();
    }
}