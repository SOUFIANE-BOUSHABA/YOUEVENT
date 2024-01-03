<?php
use App\Controller\AuthController;

$auth = new AuthController();
?>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="/YOUEVENT/user/home">
                    <div class="nav-brand mt-1 d-flex gap-1 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                            fill="#f44336" strok#000000336" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polygon points="13 19 22 12 13 5 13 19"></polygon>
                            <polygon points="2 19 11 12 2 5 2 19"></polygon>
                        </svg>
                        <h4>YouEvent</h4>
                    </div>
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <?php
                        $arr = array('home', 'about', 'events', 'contact');
                        foreach ($arr as $v):
                            ?>
                            <li class="<?= $_GET['uri'] == 'user/' . $v ? 'active' : '' ?>"><a
                                    href="<?= "/YOUEVENT/user/" . $v ?>">
                                    <?= $v ?>
                                </a></li>
                            <?php
                        endforeach;
                        ?>
                        <li style="height: 50px;">
                            <?php
                            $auth->showLoginOptions();
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>