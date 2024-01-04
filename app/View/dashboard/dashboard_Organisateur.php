<?php
include_once '../app/View/dashboard/includes/header.php';
require(__DIR__ . "/../../Controller/OrganisateurController.php");
use App\Controller\OrganisateurController;

$event = new OrganisateurController();
?>
<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php';
        ?>
        <main class="col-md-10 p-3 main-content">
            <div class="shadow-sm p-3 mb-3 bg-body rounded">

                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ajouter un event</button>

            </div>
            <div class="col-lg-12 p-0">
                <div class="card border-0 mb-4">
                    <div class="card-body p-0 d-flex gap-2"
                         style="flex-wrap: wrap; margin-left: 30px;">
                        <?php
                        $event->showEvents();
                        ?>
                    </div>
                </div>
            </div>
        </main>


    </div></div>
<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form inside the modal -->
                <form method="post" action="?uri=organisateur/ajouterEvent">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="ajouterEvent">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form inside the modal -->
                <form method="post" action="?uri=organisateur/ajouterEvent">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="ajouterEvent">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>