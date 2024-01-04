<?php
include_once '../app/View/includes/head.php';
include_once '../app/View/includes/header.php';
?>

<section class="contact-content-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="cc-text set-bg" data-setbg="../assets/img/contact-content-bg.jpg">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-4">
                            <div class="section-title">
                                <h2>Location</h2>
                                <p>Get directions to our event center</p>
                            </div>
                            <div class="cs-text">
                                <div class="ct-address">
                                    <span>Address:</span>
                                    <p>01 Pascale Springs Apt. 339, NY City <br />United State</p>
                                </div>
                                <ul>
                                    <li>
                                        <span>Phone:</span>
                                        (+12)-345-67-8910
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        info.colorlib@gmail.com
                                    </li>
                                </ul>
                                <div class="ct-links">
                                    <span>Website:</span>
                                    <p>https://conference.colorlib.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cc-map">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1IHZSqvUTfGQTIyjT5hrchKa2gWA&hl=en&ehbc=2E312F"
                        width="640" height="480"></iframe>
                    <div class="map-hover">
                        <i class="fa fa-map-marker"></i>
                        <div class="map-hover-inner">
                            <h5>Algeria</h5>
                            <p>NewYork City, US</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Top Content Section End -->

<!-- Contact Form Section Begin -->
<section class="contact-from-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Contact Us By Email!</h2>
                    <p>Fill out the form below to recieve a free and confidential intial consultation.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="#" class="comment-form contact-form">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Messages"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section End -->
<?php
include(__DIR__ . "/../includes/footer.php");
?>