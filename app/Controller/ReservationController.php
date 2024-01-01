<?php

namespace App\Controller;

require(__DIR__ . "/../Model/ReservationModel.php");
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
    public function confirmReservation()
    {
        if (isset($_POST['reserve'])) {
            $this->makeReservation() ? header("Location: /YOUEVENT/user/home") : false;
        }
    }
    public function makeReservation()
    {
        $data = $this->reserveModel->reserve($_POST['reserv_name'], $_POST['reserv_desc'], $this->user_id);
        $rs = $this->reserveModel->linkTicket($_POST['user_ticket'], $this->user_id);
        ($data && $rs) ? true : false;
    }
}