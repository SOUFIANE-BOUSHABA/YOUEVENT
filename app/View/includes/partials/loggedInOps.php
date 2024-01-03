<?php
use App\Controller\LogoutController;

LogoutController::logoutUser();
?>
<button class="btn bg-transparent border-0 mb-1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
    </svg></button>
<div class="dropdown">
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#!">Settings</a></li>
        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        <li>
            <form method="post">
                <button class="dropdown-item" type="submit" name="logout">Logout</button>
            </form>
        </li>
    </ul>
</div>