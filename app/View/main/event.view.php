<?php
include(__DIR__ . "/../includes/head.php");
include(__DIR__ . "/../includes/header.php");
require(__DIR__ . "/../../Controller/EventController.php");
use App\Controller\EventController;

$event = new EventController();
?>

<section class="container-fluid p-0">
    <section class="testimonial-section spad pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Concurrent Events</h2>
                        <p>View all concurrent events!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0 mb-4">
                        <div class="card-body d-flex gap-3 ms-2"
                            style="flex-wrap: wrap;">
                            <?php
                            $event->showEvents();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<?php
include(__DIR__ . "/../includes/footer.php");
?>