<?php

namespace App\Controller;
use Router;

require(__DIR__ . "/../Model/EventModel.php");

use App\Model\EventModel;

class EventController
{
    private $eventModal;
    private $router;
    public function __construct()
    {
        $this->eventModal = new EventModel();
        $this->router = new Router();
    }
    public function showEvents()
    {
        $rs = $this->eventModal->getEvents();
        if ($rs) {
            foreach ($rs as $OBJ):
                $eventName = str_replace('_', ' ', $OBJ->event_name);
                include(__DIR__ . "/../View/includes/partials/eventCard.php");
            endforeach;
        } else {
            echo 'No upcoming events at the moment!';
        }
    }



    public function getEventUri() {
        return explode("/", parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH));
    }
    public function currentEvent()
    {
        $uriSegments = $this->getEventUri();
        $rs = $this->eventModal->getEventByName($uriSegments[2]);
        if ($rs) {
            return $rs;
        } else {
            $this->router->setStatusCode(404);
        }
    }
    public function eventNameChanger($event_name) {
        return $eventName = str_replace('_', ' ', $event_name);
    }

}