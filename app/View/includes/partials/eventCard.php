<a href="event/<?= $OBJ->event_name ?>">
    <div class="card flex-shrink-0 mb-2" style="width: 17rem; height: 315px;">
        <img src="../assets/img/thumbnail.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?= $eventName ?>
            </h5>
            <p class="card-text">
                <?= $OBJ->event_desc ?>
            </p>
            <span class="text-muted">
                By:
                <?= $OBJ->first_name . " " . $OBJ->last_name ?>
            </span>
        </div>
    </div>
</a>