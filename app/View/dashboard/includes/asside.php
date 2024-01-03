<aside class="col-md-2 bg-dark text-light p-4 aside">
                <ul class="list-unstyled">
                   
                    <?php
                    switch ($_SESSION['role_id']){
                        case 1:
                            ?>

<li> <i class="fa-solid fa-chart-simple"></i> <a href="?uri=admin/showStatistics">Dashboard</a></li>

                    <li><a href="?uri=admin/getAllUser">Users</a></li>
                   
                 
                  <?php
                    break;
                        case 2:?>
                    <li><a href="#">Events</a></li>
                    <li><a href="?uri=organisateur/getAllReservation">Reservations</a></li>
                    <?php
                    break;
                    }
                    ?>
                </ul>

 </aside>