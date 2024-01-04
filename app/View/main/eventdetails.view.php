<?php
include(__DIR__ . "/../includes/head.php");
include(__DIR__ . "/../includes/header.php");
use App\Controller\EventController;
use App\Controller\TicketController;

$event = new EventController();
$ticket = new TicketController();
$OBJ = $event->currentEvent();
$eventName = $event->eventNameChanger($OBJ->event_name);
?>
<section class="container-fluid p-0">
    <section class="testimonial-section spad pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6">
                            <img src="../../public/assets/img/thumbnail.png" class="img-thumbnail" alt="thumbnail">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-0 d-flex flex-column align-items-center ms-2">
                                <div class="row mb-5 mt-4">
                                    <h4>
                                        <?= $eventName ?>
                                    </h4>
                                </div>
                                <div class="row mb-5 mt-2">
                                    <p>
                                        <?= $OBJ->event_desc ?>
                                    </p>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <?php
                                        $ticket->showTicketBtn($OBJ->event_id);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<?php
include(__DIR__ . "/../includes/footer.php");
?>