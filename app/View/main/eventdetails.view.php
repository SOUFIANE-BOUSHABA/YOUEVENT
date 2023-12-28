<?php
include(__DIR__ . "/../includes/head.php");
include(__DIR__ . "/../includes/header.php");
?>
<section class="container-fluid p-0">
    <section class="testimonial-section spad pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?= $_POST['card_name'] ?></h2>
                        <p><?= $_POST['card_desc'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="d-flex">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<?php
include(__DIR__ . "/../includes/footer.php");
?>