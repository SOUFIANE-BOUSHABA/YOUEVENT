<?php

namespace App\Model;

use PDO;
use App\Database\Database;

class TicketModel
{

    private $db;
    private $sql;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getTickets($event_id)
    {
        $this->sql = "SELECT * FROM ticket WHERE id_event = :event_id;";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $stmt->bindParam(":event_id", $event_id, PDO::PARAM_INT);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_OBJ);
        return !empty($rs) ? $rs : false;
    }

    public function removeTicket() {
        $this->sql;
    }
}