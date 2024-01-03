<?php
include_once '../app/View/dashboard/includes/header.php';

?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>

        <main class="col-md-10 p-3 main-content">
            <div class="shadow-sm p-3 mb-3 bg-body rounded">
                <table class="table align-middle pl-4 mb-0 mt-2 bg-white ">
                    <thead class="bg-light">
                    <tr>
                        <th>reservation nom</th>
                        <th>reservation description</th>
                        <th>event name</th>
                        <th>reservateur</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($reservation as $OBJ) :  ?>
                        <tr>
                            <td>
                                <p class=""><?= $OBJ->reserv_name ?></p>
                            </td>
                            <td>
                                <span class=""><?= $OBJ->reserv_desc?></span>
                            </td>
                            <td>
                                <span class=""><?= $OBJ->event_name ?></span>
                            </td>
                            <td>
                                <span class=""><?= $OBJ->first_name ?></span>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>