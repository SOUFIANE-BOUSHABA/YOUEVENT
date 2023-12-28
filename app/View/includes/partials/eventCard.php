<div class="card flex-shrink-0" style="width: 18rem;">
    <img src="./public/assets/img/thumbnail.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            <?= $OBJ->event_name ?>
        </h5>
        <p class="card-text">
            <?= $OBJ->event_desc ?>
        </p>
        By:
        <?= $OBJ->first_name . " " . $OBJ->last_name ?>
    </div>
</div>