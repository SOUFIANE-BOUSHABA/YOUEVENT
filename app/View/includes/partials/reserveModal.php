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
                <form action="/YOUEVENT/" method="post" class="d-flex flex-column">
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
                        <select class="form-select" style="width: 150px;" name="user_ticket" id="ticket_select"
                            required>
                            <option selected hidden disabled>Ticket Type</option>
                            <?php
                            $ticket->showTickets($obj->event_id);
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 container">
                        <span class="d-flex justify-content-center">
                            <span id="ticket_select_first">Select a ticket</span>
                            <span id="ticket_price"></span>
                        </span>
                    </div>
                    <div class="mb-3 container justify-content-center align-items-center" id="quantity_display"
                        style="display: none;">
                        <p class="text-center">Quantity</p>
                        <?php
                        $ticket->getTickets($obj->event_id);
                        ?>
                        <div class="d-flex gap-1 user-select-none"">
                            <a class=" btn" id="minus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            </a>
                            <input type="number" class="form-control" onkeydown="return false" id="ticket_quant"
                                name="ticket_quant" min="1" max="1000" readonly required />
                            <a class="btn" id="plus">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </a>
                        </div>
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