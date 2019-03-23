<?php
/**
 * Created by PhpStorm.
 * User: bayim
 * Date: 2/12/2019
 * Time: 11:30 PM
 */

include "header.php";
?>

    <main>
        <div class="a" style="position: relative;">
            <header id="head">
                <?php

                include 'menus.php';
                ?>
            </header>
            <div class="middle_info">
                <h1 class="text-center middle_h1">order your own website or source code</h1>
                <p class="text-center middle_p">Your brand. Your customers. Your online ordering system. Powered by Web developers.</p>
                <a href="learn_more.php" class="txt_dec">
                    <button class="btn middle_btn" id="btn" onmouseover="btn_in()" onmouseout="btn_out()">LEARN MORE</button></a>
            </div>
        </div>
    </main>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="left_text">
                    <h1 class="text-left">
                        Take control with a branded online ordering system, built just for you.
                    </h1>
                    <p class="text-left">howNow Direct allows customers to place orders directly from your website,
                        Facebook page, Instagram profile, and custom-built mobile apps — commission-free.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="right_img">
                    <img src="image/mix.png">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="get_with_web">
    <div class="container">
        <h1 class="text-center">WHAT YOU GET WITH WEB DEVELOPERS</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img_text">
                    <img src="image/montel.svg" alt="">
                    <h6 class="text-left">WEBSITE ORDERING</h6>
                    <p class="text-left">Give hungry customers the ability to order directly from your
                        restaurant’s website — on desktop or mobile.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img_text">
                    <img src="image/social.svg" alt="">
                    <h6 class="text-left">SOCIAL ORDERING</h6>
                    <p class="text-left">Turn social visits into transactions
                        with WEB DEVEOLPER ordering on your Facebook page and Instagram profile</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img_text">
                    <img src="image/settings.svg" alt="">
                    <h6 class="text-left">MANAGEMENT TOOLS</h6>
                    <p class="text-left">Accept orders and set ready times through your Tablet.
                        Use your Dashboard to update your menu on the fly.</p>
                </div>
            </div>
        </div>
<!--ggggg-->
        <div class="row" style="margin-top:20px;">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img_text">
                    <img src="image/diagram.svg" alt="">
                    <h6 class="text-left">MANAGEMENT TOOLS</h6>
                    <p class="text-left">Access valuable data for every order you receive and
                        get to know your customers better than ever.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img_text">
                    <img src="image/marketing.svg" alt="">
                    <h6 class="text-left">MARKETING SERVICES</h6>
                    <p class="text-left">Partner with a dedicated success manager to develop strategies
                        that will drive more online and mobile orders.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img_text">
                    <img src="image/hand.svg" alt="">
                    <h6 class="text-left">DEDICATED SUPPORT</h6>
                    <p class="text-left">Reach Support any day of the week, our team is on call
                        and proactively monitoring orders as they come in.</p>
                </div>
            </div>
        </div>
    </div>
</div>




    <!--Carousel Wrapper-->
<div class="tt">
    <h1 class="text-center">HEAR WHAT CLIENTS ARE SAYING ABOUT US</h1>
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view img_crs">
                    <img class="d-block w-100" src="image/bsman.jpg"  alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive info_txt">
                        Web developers creates a dialogue between our resturant and the guest
                    </h3>
                    <p>Arthur Mullen , Manager</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view img_crs">
                    <img class="d-block w-100" src="image/bswm.png" alt="First slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive info_txt">"Our online ordering has increased about 4x in the
                        past 3-4 yeasr and Web Developers has made it easier and more effecient
                        to get orders through. it fits right into the opertional flow"</h3>
                    <p>Amber Jamal,Marekting Manager</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
</div>


<div class="are_you_client">
    <div class="container">
        <h5 class="text-center" style="color:#8C8C8F;">Already a client, or need help with an order? Contact ChowNow Support.</h5>
        <p class="text-center prg_a"><a href="tel:+994559373510">+994-55-937-35-10</a>  or  <a href="#">CONTACT US</a></p>
        <button class="btn btn-success a_btn"><a href="#">ORDER NOW</a></button>
    </div>
</div>


<?php

include "footer.php";

?>