<?php
include_once '../app/View/includes/head.php';
include_once '../app/View/includes/header.php';
?>

<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="../public/assets/img/hero.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <span>5 to 9 may 2019, mardavall hotel, New York</span>
                    <h2>Unite Creations, <br /> Ignite Experiences!</h2>
                    <a href="/YOUEVENT/user/events" class="primary-btn">View Events</a>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="../assets/img/hero-right.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Home About Section Begin -->
<section class="home-about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms-5 ha-text">
                    <h2>About YouEvent</h2>
                    <p>
                        YouEvent is your go-to platform for creating and discovering events. Creators can easily set up
                        and customize events, while users can effortlessly browse, book tickets, and attend diverse
                        experiences. The platform offers intuitive tools for event management, including promotion,
                        ticket sales, and real-time analytics. With YouEvent, we're redefining the event experience,
                        making it seamless for both creators and attendees.
                    </p>
                    <ul>
                        <li><span class="icon_check"></span> Write On Your Business Card</li>
                        <li><span class="icon_check"></span> Advertising Outdoors</li>
                        <li><span class="icon_check"></span> Effective Advertising Pointers</li>
                        <li><span class="icon_check"></span> Kook 2 Directory Add Url Free</li>
                    </ul>
                    <a href="#" class="ha-btn">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home About Section End -->

<!-- latest BLog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Latest News</h2>
                    <p>Do not miss anything topic abput the event</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="latest-item set-bg large-item" data-setbg="../assets/img/blog/latest-b/latest-1.jpg">
                    <div class="li-tag">Marketing</div>
                    <div class="li-text">
                        <h4><a href="./blog-details.html">Improve You Business Cards And Enchan Your Sales</a></h4>
                        <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="latest-item set-bg" data-setbg="../assets/img/blog/latest-b/latest-2.jpg">
                    <div class="li-tag">Experience</div>
                    <div class="li-text">
                        <h5><a href="./blog-details.html">All users on MySpace will know that there are millions of
                                people out there.</a></h5>
                        <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                    </div>
                </div>
                <div class="latest-item set-bg" data-setbg="../assets/img/blog/latest-b/latest-3.jpg">
                    <div class="li-tag">Marketing</div>
                    <div class="li-text">
                        <h5><a href="./blog-details.html">A Pocket PC is a handheld computer, which features many of the
                                same capabilities.</a></h5>
                        <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest BLog Section End -->

<!-- Newslatter Section Begin -->
<section class="newslatter-section">
    <div class="container">
        <div class="newslatter-inner set-bg" data-setbg="../assets/img/newslatter-bg.jpg">
            <div class="ni-text">
                <h3>Subscribe Newsletter</h3>
                <p>Subscribe to our newsletter and don’t miss anything</p>
            </div>
            <form action="#" class="ni-form">
                <input type="text" placeholder="Your email">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</section>
<!-- Newslatter Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Location</h2>
                    <p>Get directions to our event center</p>
                </div>
                <div class="cs-text">
                    <div class="ct-address">
                        <span>Address:</span>
                        <p>Algeria. 339, NY City <br />United State</p>
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
            <div class="col-lg-6">
                <div class="cs-map">
                    <iframe <iframe
                        src="https://www.google.com/maps/d/embed?mid=1IHZSqvUTfGQTIyjT5hrchKa2gWA&hl=en&ehbc=2E312F"
                        width="640" height="480"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
<?php
include(__DIR__ . "/../includes/footer.php");
?>