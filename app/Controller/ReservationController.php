<?php

namespace App\Controller;

use App\Model\ReservationModel;

class ReservationController
{

    private $reserveModel;
    private $user_id;
    public function __construct()
    {
        $this->reserveModel = new ReservationModel();
        $this->user_id = $_SESSION['user_id'];
    }
    public function confirmChoice()
    {
        if (isset($_POST['reserve'])) {
            $this->makeReservation();
        } else if (isset($_POST['cancelReservation'])) {
            $this->cancelReservation();
        }
    }
    public function makeReservation()
    {
        $data = $this->reserveModel->reserve($_POST['reserv_name'], $_POST['reserv_desc'], $this->user_id);
        $rs = $this->reserveModel->linkTicket($_POST['user_ticket'], $this->user_id);
        return ($data && $rs) ? true : false;
    }
    public function cancelReservation() {
        $rs = $this->reserveModel->cancelReservation($this->user_id, $_POST['event_id']);
        return $rs ? true : false;
    }
    public function alreadyReservedCheck()
    {
        $rs = $this->reserveModel->getReservationByUserId($this->user_id);
        if (!$rs) {
            include_once (__DIR__ . "/../View/includes/partials/reservationForm.php");
        } else {
            include_once (__DIR__ . "/../View/includes/partials/cancelReservationForm.php");
        }
    }
}