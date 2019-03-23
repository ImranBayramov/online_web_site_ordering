<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 2/19/2019
 * Time: 11:38 PM
 */

include "header.php";
?>


<main class="web_header">
    <div class="a" style="position: relative;">
        <header id="head">
            <?php

            include 'menus.php';
            ?>
        </header>
        <div class="middle_info">
            <h1 class="text-center middle_h1">Websites matter.</h1>
            <p class="text-center middle_p">Get in front of customers with a simple web developers site.</p>
            <a href="learn_more.php" class="txt_dec">
                <button class="btn middle_btn" id="btn" onmouseover="btn_in()" onmouseout="btn_out()">REQUEST A DEMO</button></a>
        </div>
    </div>
</main>

<div class="what_we_do">
    <div class="container">
        <h1 class="text-center">WHAT WE DO</h1>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="what_we_do_row">
                    <h3 class="text-center we_do_txt">Web Design</h3>
                    <img src="image/w.png" alt="" width="250">
                    <p class="text-center">
                        Web Development, e-Commerce Websites, Search Engine Optimization (SEO),
                        Blogs, Custom Applications, Web Maintenance, Shopping Cart integration…
                    </p>
                    <a href="#" class="btn btn-danger">READ MORE</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="what_we_do_row">
                    <h3 class="text-center we_do_txt">Mobile Apps</h3>
                    <img src="image/app.png" alt="" width="165">
                    <p class="text-center">
                        Maximize your brand potential with our first class mobile application
                        development services for iOS, Android, Windows & BlackBerry…
                    </p>
                    <a href="#" class="btn btn-danger">READ MORE</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="what_we_do_row" style="border:none;">
                    <h3 class="text-center we_do_txt">Domain Services</h3>
                    <img src="image/domain.png" alt="" width="165">
                    <p class="text-center">
                        Maximize your brand potential with our first class mobile application
                        development services for iOS, Android, Windows & BlackBerry…
                    </p>
                    <a href="#" class="btn btn-danger">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="example">
    <div class="container">
        <h1 class="text-center">Example of Our Recent Work</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job.png" alt="Avatar" class="image">
                    <a href="image/job.png" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job2.png" alt="Avatar" class="image" height="185">
                    <a href="image/job2.png" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job3.png" alt="Avatar" class="image" height="184">
                    <a href="image/job3.png" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job3.jpg" alt="Avatar" class="image">
                    <a href="image/job3.jpg" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job4.png" alt="Avatar" class="image" height="184">
                    <a href="image/job4.png" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job5.jpg" alt="Avatar" class="image" height="185">
                    <a href="image/job5.jpg" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job6.jpg" alt="Avatar" class="image" height="184">
                    <a href="image/job6.jpg" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="img_example">
                    <img src="image/job7.jpg" alt="Avatar" class="image" height="184">
                    <a href="image/job7" target="_blank"> <div class="overlay">
                            <div class="text"><i class="fas fa-plus"></i></div>
                        </div></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="made_simple">
    <div class="container">
        <h1 class="text-center made_h1">Website Design Made Simple</h1>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="img_part">
                    <img src="image/padman1.png" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <p class="made_p">If you are looking for a cost-effective way of giving your business an impressive and interactive
                    online presence then get a professional website design from us. A custom web design is the best brand
                    representation in the online market giving your business a stronger and memorable identity worldwide.
                    Our creative and expert designers work
                    with a lot of dedication, hard work and commitment to match your business goals with the web theme or
                    ecommerce website you have in mind.</p>
            </div>
        </div>
    </div>
</div>


<div class="about_mobile_app">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="mobile_app_img">
                    <img src="image/str.jpg" alt="">
                    <h1 class="text-center str_txt">APP ROI STRATEGY & PROPOSAL</h1>
                    <p class="text-center">
                        Targeted, relevant ROI strategy focused towards building strong
                        brand awareness for you
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="mobile_app_img">
                    <img src="image/paint.jpg" alt="">
                    <h1 class="text-center str_txt">DESIGN PROTOTYPE</h1>
                    <p class="text-center">
                        Outstanding app development services with personalized apps toimproved your business presence
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="mobile_app_img">
                    <img src="image/android.jpg" alt="">
                    <h1 class="text-center str_txt">APPLICATION DEVELOPMENT & Expert developers dedicate their</h1>
                    <p class="text-center">
                        Expert developers dedicate their works to strike the balance to lead your business growth
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="mobile_app_img">
                    <img src="image/bullhorn.png" alt="">
                    <h1 class="text-center str_txt">FINAL APP DEPLOYMENT</h1>
                    <p class="text-center">
                        Dexpressionz gives you excellent opportunity to unleash unmatched marketing opportunities for
                        business growth
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
