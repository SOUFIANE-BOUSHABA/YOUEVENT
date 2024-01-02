<?php

namespace App\Model;

use PDO;
use App\Database\Database;

class ReservationModel
{
    private $db;
    private $sql;
    private $reservation;
    private $reserve_id;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function reserve($reserve_name, $reserve_desc, $user_id)
    {
        $this->sql = "INSERT INTO reservation (`reserv_name`, `reserv_desc`, `id_user`) VALUES (:reserv_name, :reserv_desc, :id_user);";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $stmt->bindParam(":reserv_name", $reserve_name, PDO::PARAM_STR);
        $stmt->bindParam(":reserv_desc", $reserve_desc, PDO::PARAM_STR);
        $stmt->bindParam(":id_user", $user_id, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
    public function getReservationByUserId($user_id)
    {
        $this->sql = "SELECT * FROM reservation WHERE id_user = :user_id;";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_OBJ);
        return !empty($rs) ? $rs : false;
    }
    public function linkTicket($ticket_id, $ticket_quant, $user_id)
    {
        $this->reservation = $this->getReservationByUserId($user_id);
        $this->reserve_id = $this->reservation->reserv_id;
        $this->sql = "INSERT INTO `reserve`(`id_reserv`, `id_ticket`, `ticket_quantity`) VALUES (:reserve_id, :ticket_id, :ticket_quant)";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $stmt->bindParam(":reserve_id", $this->reserve_id, PDO::PARAM_INT);
        $stmt->bindParam(":ticket_id", $ticket_id, PDO::PARAM_INT);
        $stmt->bindParam(":ticket_quant", $ticket_quant, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
    public function cancelReservation($user_id, $reserve_id)
    {
        $this->sql = ["DELETE FROM `reservation` WHERE id_user = :id_user;", "DELETE FROM `reserve` WHERE id_reserv = :id_reserve;"];
        $stmt = $this->db->getConnection()->prepare($this->sql[0]);
        $stmt->bindParam(":id_user", $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $this->db->getConnection()->prepare($this->sql[1]);
        $stmt->bindParam(":id_reserve", $reserve_id, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
}