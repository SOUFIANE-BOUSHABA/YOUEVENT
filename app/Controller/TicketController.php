<?php

namespace App\Controller;

use App\Model\TicketModel;
use App\Controller\AuthController;

class TicketController
{

    private $auth;
    private $ticketModel;
    public function __construct()
    {
        $this->auth = new AuthController();
        $this->ticketModel = new TicketModel();
    }

    public function showTicketBtn($event_id)
    {
        if ($this->auth->isLoggedIn()) {
            include (__DIR__ . "/../View/includes/partials/showReservationBtn.php");
        } else {
            echo "Login to access this feature!";
        }
    }
    public function ticketCheck($event_id) {
        $rs = $this->ticketModel->getTickets($event_id);
        if ($rs) {
            include (__DIR__ . "/../View/includes/partials/ticketSelect.php");
        } else {
            echo "No Tickets can be found!";
        }
    }
    public function getTickets($event_id)
    {
        $rs = $this->ticketModel->getTickets($event_id);
        foreach ($rs as $OBJ):
            include (__DIR__ . "/../View/includes/partials/ticketOption.php");
        endforeach;
    }

}