<?php

include_once '../app/View/dashboard/includes/header.php';
require(__DIR__ . "/../../Controller/OrganisateurController.php");
use App\Controller\OrganisateurController;

$event = new OrganisateurController();
?>
<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>
        <main class="col-md-10 p-3 main-content">
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
        </main>
    </div>
</div>