
<div class="card flex-shrink-0 mb-2" style="width: 17rem; height: 315px;">
            <img src="./public/assets/img/thumbnail.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $OBJ->event_name ?>
                </h5>
                <p class="card-text">
                    <?= $OBJ->event_desc ?>
                </p>
                <span class="text-muted">
                By:
                <?= $OBJ->first_name . " " . $OBJ->last_name ?>
            </span>
                <br>
                <button  class="btn btn-primary h-25" data-bs-toggle="modal" data-bs-target="#viewModal<?= $OBJ->event_id?>"><i class="fa-solid fa-eye"></i></button>
                <button class="btn btn-warning h-25"><i class="fa-solid fa-wrench"></i></button>
                <a class="btn btn-danger h-25" href="?uri=organisateur/deletEvent/<?= $OBJ->event_id?>"><i class="fa-solid fa-trash-can"></i></a>
            </div>
        </div>
<div class="modal fade" id="viewModal<?=$OBJ->event_id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form inside the modal -->
                <form method="post" action="?uri=organisateur/updateEvent/<?=$OBJ->event_id?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name" value="<?=$OBJ->event_name?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" ><?=$OBJ->event_desc?></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateEvent">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>