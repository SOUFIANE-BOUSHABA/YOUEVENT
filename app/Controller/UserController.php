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

    public function index()
    {
        $this->home();
    }
    public function home()
    {
        include_once(__DIR__ . "/../View/main/index.view.php");
    }
    public function about()
    {
        include_once(__DIR__ . "/../View/main/about.view.php");
    }
    public function events()
    {
        include_once(__DIR__ . "/../View/main/event.view.php");
    }
    public function contact()
    {
        include_once(__DIR__ . "/../View/main/contact.view.php");
    }
    
}