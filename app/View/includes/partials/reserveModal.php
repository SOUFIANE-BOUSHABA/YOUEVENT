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
                    <div class="row d-flex justify-content-center mb-3">
                        <?php
                        $ticket->ticketCheck($event_id);
                        ?>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-primary border-0" type="submit" name="reserve">Make Reservation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>