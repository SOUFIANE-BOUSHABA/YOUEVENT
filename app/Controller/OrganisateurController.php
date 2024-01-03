<?php
namespace App\Controller;
require(__DIR__ . "/../Model/OrganisateurModel.php");


use App\Controller\EventController;
use App\Model\OrganisateurModel;

class OrganisateurController {
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
    public function ajouterEvent(){
        if(isset($_POST['ajouterEvent'])){
            $name=$_POST['name'];
            $desc=$_POST['desc'];
        }
        $rs=$this->OrganisateurModel->AddEvents($name,$desc);
        if ($rs){
            include '../app/View/dashboard/includes/Ajouterticket.php';
        }
    }
    public function ajouterTicket(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $Data = file_get_contents('php://input');
            $ticket = json_decode($Data, true);

            if ($ticket !== null && isset($ticket['data']))
            {
                $this->OrganisateurModel->AddTickets($ticket['data']);
            }
        }
    }
public function index(){
    include '../app/View/dashboard/dashboard_Organisateur.php';

}
    public function deletEvent($id){
        $rs=$this->OrganisateurModel->deletEvent($id);
if ($rs){
    include '../app/View/dashboard/dashboard_Organisateur.php';
}
    }
    public function getAllReservation()
    {
        $reservation=$this->OrganisateurModel->getAllReservation();
//        var_dump($_SESSION['user_id']); die();
        include '../app/View/dashboard/includes/reservation.php';
    }

}

