<?php

namespace App\Model;

use PDO;
use App\Database\Database;

class ReservationModel
{
    private $db;
    private $userid;
    public function __construct()
    {
        $this->db = new Database;
        $this->userid = $_SESSION['user_id'];
    }

    public function reserve($reserve_name, $reserve_desc)
    {
        $sql = "INSERT INTO reservation (`reserv_name`, `reserv_desc`, `id_user`) VALUES (:reserv_name, :reserv_desc, :id_user);";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":reserv_name", $reserve_name, PDO::PARAM_STR);
        $stmt->bindParam(":reserv_desc", $reserve_desc, PDO::PARAM_STR);
        $stmt->bindParam(":id_user", $this->userid, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function getReserveByUserId()
    {
        $reservation = $this->getReservationByUserId();
        $sql = "SELECT * FROM reserve WHERE id_reserv = :id;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":id", $reservation->reserv_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getReservationByUserId()
    {
        $sql = "SELECT * FROM reservation WHERE id_user = :userid;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":userid", $this->userid, PDO::PARAM_INT);
        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_OBJ);

        return !empty($rs) ? $rs : false;
    }

    public function linkTicket($ticket_id, $ticket_quant)
    {
        $reservation = $this->getReservationByUserId();
        $sql = "INSERT INTO `reserve`(`id_reserv`, `id_ticket`, `ticket_quantity`) VALUES (:reserve_id, :ticket_id, :ticket_quant)";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":reserve_id", $reservation->reserv_id, PDO::PARAM_INT);
        $stmt->bindParam(":ticket_id", $ticket_id, PDO::PARAM_INT);
        $stmt->bindParam(":ticket_quant", $ticket_quant, PDO::PARAM_INT);

        return $stmt->execute() ? $ticket_id : false;
    }
    public function ticketsLeft($ticket_id, $type)
    {
        if ($type == 1) {
            $sql = $this->removeTicketsLeft();
        } else {
            $sql = $this->restoreTicketsLeft();
        }
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":id", $ticket_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function removeTicketsLeft() {
        return "SELECT ticket.ticket_left - reserve.ticket_quantity as t_left FROM `ticket` join reserve on ticket.ticket_id = reserve.id_ticket WHERE reserve.id_ticket = :id;";
    }
    public function restoreTicketsLeft() {
        return "SELECT ticket.ticket_left + reserve.ticket_quantity as t_left FROM `ticket` join reserve on ticket.ticket_id = reserve.id_ticket WHERE reserve.id_ticket = :id;";
    }
    public function makeReservation($reserv_name, $reserve_desc, $ticket_id, $ticket_quant)
    {
        $data = $this->reserve($reserv_name, $reserve_desc);
        $rs = $this->linkTicket($ticket_id, $ticket_quant);
        $ticket = $this->ticketsLeft($ticket_id, 1);

        $result = $this->updTicket($ticket_id, $ticket->t_left);
        return ($data && $rs && $result) ? true : false;
    }
    public function updTicket($ticket_id, $tickets_left)
    {
        $sql = "UPDATE `ticket` SET `ticket_left`= :ticket WHERE ticket_id = :id;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":ticket", $tickets_left, PDO::PARAM_INT);
        $stmt->bindParam(":id", $ticket_id, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
    public function cancelReservation()
    {
        $reserve = $this->getReserveByUserId();
        $result = $this->restoreTickets($reserve);
        $rs = $this->delReservation();
        $data = $this->delReserve($reserve->id_reserv);

        return ($result && $rs && $data) ? true : false;
    }
    public function restoreTickets($reserve)
    {
        $ticket = $this->ticketsLeft($reserve->id_ticket, 2);
        $result = $this->updTicket($reserve->id_ticket, $ticket->t_left);
        return ($result) ? true : false;
    }
    public function delReservation()
    {
        $sql = "DELETE FROM `reservation` WHERE id_user = :id_user;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":id_user", $this->userid, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->execute() ? true : false;
    }
    public function delReserve($reserve_id)
    {
        $sql = "DELETE FROM `reserve` WHERE id_reserv = :id_reserve;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":id_reserve", $reserve_id, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
}