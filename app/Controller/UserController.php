<?php
namespace App\Controller;
class UserController
{
    private $firstname;
    private $lastname;
    private $birth;
    private $email;
    private $password;

    public function __construct()
    {
    }

    public function index() {
        include_once (__DIR__ . "/../View/main/contact.view.php");
    }

}