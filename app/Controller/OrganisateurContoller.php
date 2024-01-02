<?php
namespace App\Controller;
require(__DIR__ . "/../Model/OrganisateurModel.php");


use App\Controller\EventController;
use App\Model\OrganisateurModel;

class OrganisateurContoller {
    private $OrganisateurModel;
    public function __construct()
    {
        $this->OrganisateurModel = new OrganisateurModel();
    }
    public function showEvents()
    {
        $rs = $this->OrganisateurModel->getEvents();
        if ($rs) {
            foreach ($rs as $OBJ):
                include(__DIR__ . "/../View/dashboard/includes/OrganisateurEventcard.php");
            endforeach;
        }
    }
    public function ajouterEvent(EventController $event){
        $rs=$this->OrganisateurModel->AddEvents($event->getName,$event->getDescription);
        if ($rs){
            include '../app/View/dashboard/includes/Ajouterticket.php';
        }
    }
    public function ajouterTicket(array $tickets){
        foreach($tickets as $ticket):
            $this->OrganisateurModel-> AddTickets($ticket[name],$ticket[price],$ticket[quantity]);
        endforeach;
}
public function updateTicket(){
    $this->OrganisateurModel-> Ticket($ticket[name],$ticket[price],$ticket[quantity]);

}

}

