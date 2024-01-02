<aside class="col-md-2 bg-dark text-light p-4 aside">
                <ul class="list-unstyled">
                   
                    <li> <i class="fa-solid fa-chart-simple"></i> <a href="#">Dashboard</a></li>
                    <?php
                    switch ($_SESSION['role_id']){
                        case 1:
                            ?>


                    <li><a href="?uri=admin/getAllUser">Users</a></li>
                   
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Reservations</a></li>
                  
                  <?php
                    break;
                        case 2:?>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Reservations</a></li>
                    <?php
                    break;
                    }
                    ?>
                </ul>

 </aside>