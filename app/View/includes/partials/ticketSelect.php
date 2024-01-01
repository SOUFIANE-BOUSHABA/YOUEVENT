<?php
use App\Controller\TicketController;

$ticket = new TicketController();
?>
<select class="form-select row" style="width: 150px;" name="ticket_type">
    <option selected hidden disabled>Ticket Type</option>
    <?php
    $ticket->getTickets($event_id);
    ?>
</select>