<?php
use App\Controller\EventController;
$event = new EventController();
$obj = $event->currentEvent();
?>
<form class="d-flex align-items-center" method="post">
    <?php
    include_once(__DIR__ . "/./reserveModal.php");
    ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reserveModal">
        Reserve a spot
    </button>
    <input type="hidden" value="<?= $obj->event_id ?>" name="event_id">
</form>