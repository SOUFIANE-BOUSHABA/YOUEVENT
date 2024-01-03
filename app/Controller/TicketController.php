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
    public function getTickets($event_id) {
        return $this->ticketModel->getTickets($event_id);
    }
    public function showTickets($event_id)
    {
        $rs = $this->getTickets($event_id);
        foreach ($rs as $OBJ):
            include (__DIR__ . "/../View/includes/partials/ticketOption.php");
        endforeach;
    }
    public function showQuantity() {
        
    }

}