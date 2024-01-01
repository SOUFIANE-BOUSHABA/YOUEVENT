<?php
use App\Controller\TicketController;
use App\Controller\ReservationController;

$reserve = new ReservationController();
$ticket = new TicketController();

$reserve->confirmReservation();
?>
<form action="" class="d-flex align-items-center" method="post">
    <?php
    include (__DIR__ . "/./reserveModal.php");
    ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reserveModal">
        Reserve a spot
    </button>

    <input type="hidden" value="<?= $event_id ?>" name="event_id">
</form>