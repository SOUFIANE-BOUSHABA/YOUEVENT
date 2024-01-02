<?php
use App\Controller\TicketController;

$ticket = new TicketController();
?>
<div class="modal fade" id="reserveModal" tabindex="-1" aria-labelledby="reserveModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">Reserve a spot
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="d-flex flex-column">
                    <div class="mb-3 container">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="reserv_name" type="text" placeholder="Reservation name"
                                required maxlength="125" />
                            <label>Reservation Name</label>
                        </div>
                    </div>
                    <div class="mb-3 container">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Edit Description.." name="reserv_desc"
                                maxlength="300" required style="resize: none; height: 250px;"></textarea>
                            <label>Reservation Description</label>
                        </div>
                    </div>
                    <div class="mb-3 container d-flex justify-content-center">
                        <select class="form-select w-75" style="width: 150px;" name="user_ticket" id="ticket_select"
                            required>
                            <option selected hidden disabled>Ticket Type</option>
                            <?php
                            $ticket->showTickets($obj->event_id);
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 container">
                        <span class="d-flex justify-content-center">
                            <span class="pe-1">Price: </span><p id="ticket_price"></p>
                        </span>
                    </div>
                    <div class="mb-3 container d-grid justify-content-center">
                        <p class="mb-1 text-center">Quantity</p>
                        <?php
                        $ticket->getTickets($obj->event_id);
                        ?>
                        <input type="number" class="form-control" name="ticket_quant" value="1" min="1" max="200"
                            onKeyDown="return false" required />
                    </div>
                    <div class="mb-3 container d-flex justify-content-center">
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-primary border-0" type="submit" name="reserve">Make Reservation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$base_url = "http://localhost/";
$path = "YOUEVENT/public/assets/js/";
?>
<script src="<?= $base_url . $path . "ticketSelect.js" ?>"></script>