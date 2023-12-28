<?php

namespace App\Model;

use PDO;
use App\Database\Database;

class EventModal
{
    private $sql;
    private $db;
    private $eventId;
    private $eventName;
    private $eventDesc;
    private $eventId_org;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getEvents()
    {
        $this->sql = "SELECT events.event_id, events.event_name, events.event_desc, events.id_organisateur, users.first_name, users.last_name FROM events INNER JOIN users ON events.id_organisateur = users.user_id;";
        $stmt = $this->db->getConnection()->prepare($this->sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_OBJ);
        return !empty($rs) ? $rs : false;
    }

}