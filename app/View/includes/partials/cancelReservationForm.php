<?php
use App\Controller\EventController;
$event = new EventController();
$obj = $event->currentEvent();
?>
<form class="d-flex align-items-center" method="post">
    <button type="submit" class="btn btn-danger" name="cancelReservation">
        Cancel
    </button>
    <input type="hidden" value="<?= $obj->event_id ?>" name="event_id">
</form>