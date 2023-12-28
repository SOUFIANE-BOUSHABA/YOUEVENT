<form action="?uri=user/eventdetails" method="post">
    <button type="submit" name="submit" class="border-0 p-0 bg-transparent">
        <div class="card flex-shrink-0 mb-2" style="width: 17rem; height: 315px;">
            <img src="./assets/img/thumbnail.png" class="card-img-top" alt="...">
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
            </div>
        </div>
        <input type="hidden" value="<?= $OBJ->event_id ?>" name="card_id">
        <input type="hidden" value="<?= $OBJ->event_name ?>" name="card_name">
        <input type="hidden" value="<?= $OBJ->event_desc ?>" name="card_desc">
        <input type="hidden" value="<?= $OBJ->first_name ?>" name="card_fname">
        <input type="hidden" value="<?= $OBJ->last_name ?>" name="card_lname">
    </button>
</form>