<?php
  
namespace App\Model;

use PDO;
use PDOException;

use App\Database\Database;

class AdminModel {
    private $db;

    private $user_id;
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
    public function getFirstname(){
       return $this->firstname;
    }
    public function setLastname($lastname){
        $this->lastname=$lastname;
    }
    public function getLastname(){
       return $this->lastname;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
       return $this->email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function getPassword(){
       return $this->password;
    }
    public function setRoleId($role_id){
        $this->role_id=$role_id;
    }
    public function getetRoleId(){
        return $this->role_id;
    }
 
    public function findAll() {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `users`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        if($result){
            return $result;
        }
    }

    public function updateUser(){
        
    }
}



?>