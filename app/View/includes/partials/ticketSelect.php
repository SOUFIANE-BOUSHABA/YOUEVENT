<?php
use App\Controller\TicketController;

$ticket = new TicketController();
?>
<select class="form-select w-75" style="width: 150px;" name="user_ticket" required>
    <option selected hidden disabled>Ticket Type</option>
    <?php
    $ticket->getTickets($event_id);
    ?>
</select>