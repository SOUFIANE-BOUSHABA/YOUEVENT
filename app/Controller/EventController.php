<?php

namespace App\Controller;

require(__DIR__ . "/../Model/EventModel.php");

use App\Model\EventModal;

class EventController
{
    private $eventModal;
    private $eventId;
    private $eventName;
    private $eventDesc;
    private $eventOrg_id;
    private $eventOrg_fName;
    private $eventOrg_lName;
    public function __construct()
    {
        $this->eventModal = new EventModal();
    }
    public function showEvents()
    {
        $rs = $this->eventModal->getEvents();
        if ($rs) {
            foreach ($rs as $OBJ):
                include(__DIR__ . "/../View/includes/partials/eventCard.php");
            endforeach;
        }
    }

}