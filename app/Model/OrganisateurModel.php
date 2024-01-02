<?php

namespace App\Model;

use PDO;
use PDOException;

use App\Database\Database;

class OrganisateurModel
{
    private $db;

    private $user_id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $role_id;
    private $sql;

    public function __construct()
    {
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
    public function getEvents()
    {
        $id=$_SESSION['user_id'];
        $this->sql = "SELECT events.event_id, events.event_name, events.event_desc, users.first_name, users.last_name FROM events INNER JOIN users ON events.id_organisateur = users.user_id WHERE events.id_organisateur='$id';";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_OBJ);
        return !empty($rs) ? $rs : false;
    }
    public function AddEvents($name,$desc)
    {
        $id=$_SESSION['user_id'];
        $this->sql = "INSERT INTO events (event_name, event_desc, id_organisateur) VALUES (?, ?, ?)";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $rs=$stmt->execute([$name,$desc,$id]);
        return $rs ? true : false;
    }
    public function AddTickets($name,$price,$quantity)
    {$event_id = $this->db->getConnection()->lastInsertId();;
        $this->sql = "INSERT INTO `ticket`(`ticket_name`, `ticket_price`, `ticket_quantity`, `id_event`) VALUES ('?','?','?','?')";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $rs=$stmt->execute([$name,$price,$quantity,$event_id]);
        return $rs ? true : false;
    }
}