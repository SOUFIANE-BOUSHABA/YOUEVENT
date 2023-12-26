<?php

namespace App\Controller;

class HomeController {

    public function index(){
        include_once '../app/View/Home.php';
    }

    public function add($firstname ,$lastname){
        include_once '../app/View/add.php';
    }
}