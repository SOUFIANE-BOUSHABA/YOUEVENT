<?php
$base_url = "http://localhost/";
$src = "YOUEVENT/public/assets/js/";
$href = "YOUEVENT/public/assets/img/partner-logo/";
?>
<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="partner-logo owl-carousel">
            <?php
            $img = [

                "logo-1.png",
                "logo-2.png",
                "logo-3.png",
                "logo-4.png",
                "logo-5.png",
                "logo-6.png",
            ];
            foreach ($img as $i):
                ?>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="<?= $base_url . $href . $i ?>">
                    </div>
                </a>
                <?php
            endforeach;
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-text">
                    <div class="ft-logo">
                        <div
                            class="nav-brand mt-1 d-flex gap-1 justify-content-center align-items-center user-select-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                                fill="#f44336" strok#FFFFFF336" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polygon points="13 19 22 12 13 5 13 19"></polygon>
                                <polygon points="2 19 11 12 2 5 2 19"></polygon>
                            </svg>
                            <h4 class="text-white">YouEvent</h4>
                        </div>
                    </div>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Speakers</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="ft-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

<?php

$assets = [
    "jquery-3.3.1.min.js",
    "bootstrap.min.js",
    "jquery.magnific-popup.min.js",
    "jquery.slicknav.js",
    "owl.carousel.min.js",
    "main.js",
    "ticketSelect",
];
foreach ($assets as $v):
    echo "<script src='{$base_url}{$src}{$v}'></script>";
endforeach;
?>
</body>

</html>