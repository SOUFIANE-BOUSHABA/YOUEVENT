<?php
  
  namespace App\Model;

use PDO;
use PDOException;

use App\Database\Database;

class AuthModel {
    private $db;

    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $role_id;
    public function __construct() {
  
        $this->db = new Database();
    }
    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }
    public function setLastname($lastname){
        $this->lastname=$lastname;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setRoleId($role_id){
        $this->role_id=$role_id;
    }

    public function registerUser() {
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO `users`( `first_name`, `last_name`, `password`, `email`, `id_role`) VALUES (?, ?, ?, ? ,?)";
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->firstname, $this->lastname, $hashedPassword , $this->email, $this->role_id]);
        if($stmt){
            return true;
        }
    }

    
}



?>