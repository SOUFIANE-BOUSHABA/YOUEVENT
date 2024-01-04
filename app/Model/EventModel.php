<?php

namespace App\Model;

use PDO;
use App\Database\Database;

class EventModel
{
    private $db;
    public function __construct()
    {
        $this->db = new database();
    }

    public function getEvents()
    {
        $sql = "SELECT events.event_id, events.event_name, events.event_desc, events.id_organisateur, users.first_name, users.last_name FROM events INNER JOIN users ON events.id_organisateur = users.user_id;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_OBJ);
        return !empty($rs) ? $rs : false;
    }
    public function getEventByName($event_name)
    {
        $sql = "SELECT events.event_id, events.event_name, events.event_desc, events.id_organisateur, users.first_name, users.last_name FROM events INNER JOIN users ON events.id_organisateur = users.user_id WHERE event_name = :event_name;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(":event_name", $event_name, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_OBJ);

        return !empty($result) ? $result : false;
    }

    public function getEventsBySearchName($term)
    {
        $sql = "SELECT events.event_id, events.event_name, events.event_desc, events.id_organisateur, users.first_name, users.last_name FROM events INNER JOIN users ON events.id_organisateur = users.user_id WHERE event_name LIKE :searchTerm;";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindValue(':searchTerm', '%' . $term . '%', PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return !empty($result) ? $result : false;
    }

}