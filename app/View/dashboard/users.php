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
                            <th>nom</th>
                            <th>prenom</th>
                            <th>email</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) :  ?>
                            <tr>
                                <td>
                                    <p class=""><?= $user->first_name ?></p>
                                </td>
                                <td>
                                    <span class=""><?= $user->last_name ?></span>
                                </td>
                                <td>
                                    <span class=""><?= $user->email ?></span>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-warning">Ban</a>
                                    <a href="?uri=admin/deletUser/<?= $user->user_id ?>" type="button" class="btn btn-danger">supprimer</a>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $user->user_id ?>">
                                        modifier
                                    </button>


                                    <div class="modal fade" id="exampleModal<?= $user->user_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">update</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="d-flex mt-8  align-items-center">
                                                    <form class="form-control " id="registrationForm" action="?uri=admin/updateUser" method="post" novalidate>
                                                        <input type="hidden" name="user_id" value="<?= $user->user_id ?>">
                                                        <div class="mb-3">
                                                            <label for="firstname" class="form-label">Nom </label>
                                                            <input type="text" class="form-control" id="firstname" value="<?= $user->first_name ?>" name="firstname" placeholder="Nom " required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="lastname" class="form-label">Prenom</label>
                                                            <input type="text" class="form-control" id="lastname" value="<?= $user->last_name ?>" name="lastname" placeholder="Nom d'utilisateur" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email" value="<?= $user->email ?>" name="email" placeholder="Email" required>
                                                        </div> 
                                                         <div class="mb-3">
                                                                <label for="password" class="form-label">Mot de passe</label>
                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                                                         </div>

                                                        <div class="mb-3 d-grid">
                                                            <div><input type="radio" class="form-check-input" name="userType" value="3" required> user</div>
                                                            <div><input type="radio" class="form-check-input" name="userType" value="2" required> organisateur</div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button class="btn btn-primary" name="submit" value="UpdateUser" type="submit">update</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



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