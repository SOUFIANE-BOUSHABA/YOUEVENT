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
        $_SESSION['lastid'] = $this->db->getConnection()->lastInsertId();
        return $rs ? true : false;
    }
    public function AddTickets(array $tickets)
    {   $id=$_SESSION['lastid'];
        foreach ($tickets as $ticket)
        {
            $name = $ticket['ticketType'];
            $quantity = $ticket['quantity'];
            $price = $ticket['unitPrice'];
            $this->sql = "INSERT INTO `ticket`( `ticket_name`, `ticket_price`, `ticket_quantity`, `id_event`) VALUES (?,?,?,?)";
            $stmt = $this->db->getConnection()->prepare($this->sql);
            $rs=$stmt->execute([$name,$price,$quantity,$id]);
        }
        return $rs ? true : false;
    }
    public function deletEvent($id){
        $this->sql = "DELETE FROM `events` WHERE event_id=?";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $rs=$stmt->execute([$id]);
        return $rs ? true : false;
    }
    public function getAllReservation()
    {
        $id=$_SESSION['user_id'];
        $this->sql = "SELECT res.reserv_name , res.reserv_desc,events.event_name ,users.first_name FROM `reservation` res join reserve re on re.id_reserv=res.reserv_id join ticket  on re.id_ticket=ticket.ticket_id join events on ticket.id_event=events.event_id join users on res.id_user=users.user_id WHERE events.id_organisateur = ?;";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $stmt->execute([$id]);
        $rs = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $rs ;
    }
}