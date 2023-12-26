<?php

namespace App\Controller;

class AuthController {

    public function index(){
        include_once '../app/View/login.php';
    }
    public function regester(){
        include_once '../app/View/regester.php';
    }
    public function add($firstname ,$lastname){
        include_once '../app/View/add.php';
    }
}