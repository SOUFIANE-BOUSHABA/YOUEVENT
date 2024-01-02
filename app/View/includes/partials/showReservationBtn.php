<?php
use App\Controller\ReservationController;

$reserve = new ReservationController();

$reserve->confirmChoice();
$reserve->alreadyReservedCheck();
?>