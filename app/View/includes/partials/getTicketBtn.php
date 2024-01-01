<?php
use App\Controller\TicketController;

$ticket = new TicketController();
?>
<form action="" class="d-grid gap-1 align-items-center" method="post">
    <?php
        $ticket->ticketCheck($event_id);
    ?>
    <button class="btn btn-primary row" type="submit" name="submitTicket">
        Get Ticket!
    </button>
    <input type="hidden" value="<?= $event_id ?>" name="event_id">
</form>