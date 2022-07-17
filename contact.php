<?php
$currentPge = "contact";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Darussalam Computers Information Technology" />
    <meta name="description" content="Darussalam Computers - Information Technology Company" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Contact - Darussalam Computers</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/dcLogo.png" />

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="css/typography.css" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />


</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <?php
        include_once('include/preloader.php');
        ?>

        <!--=================================
 preloader -->

        <!--=================================
 header -->



        <header id="header" class="header default">
            <!-- class= dark -->
            <?php
            include_once('include/topbar.php');
            ?>

            <!--=================================
   mega menu -->

            <?php
            include_once('include/nav.php');
            ?>
        </header>

        <!--=================================
 header -->


        <!--=================================
page-title-->

        <section class="page-title bg-overlay-black-60 parallax" style="background: url(images/carousel-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-name">
                            <h1>Contact Us</h1>
                            <p>We know the secret of your success</p>
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                            <li><span>contact</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
page-title -->


        <!--=================================
 map-->

        <section class="white-bg contact-3 o-hidden clearfix">
            <!-- =============================== -->
            <div class="container-fluid">
                <div class="row row-eq-height">
                    <div class="col-lg-4 col-md-4 col-sm-4 contact-add gray-bg">
                        <div class="text-center">
                            <i class="ti-map-alt"></i>
                            <h4 class="mt-15">Address</h4>
                            <p>48 / 50 Nagwamatse house, Ahmadu Bello way Kaduna </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 contact-add theme-bg">
                        <div class="text-center">
                            <i class="ti-mobile text-white"></i>
                            <h4 class="text-white mt-15">Call Us</h4>
                            <p class="text-white">+(234) 812-340-0001</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 contact-add  black-bg">
                        <div class="text-center">
                            <i class="ti-email text-white"></i>
                            <h4 class="text-white mt-15">Email Us</h4>
                            <p class="text-white">info@darussalamcomputers.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- map here -->
            <div class="container pos-r">
                <div class="row">
                    <div class="col-lg-6 col-md-6 map-side g-map" id="">
                        <div class="contact-3-info page-section-ptb">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d980.6499652711793!2d7.428625197612048!3d10.532148413881167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11b2b558e74ab83f%3A0x5a8cd2186c1d698f!2sDARUSSALAM%20Computers%20LTD!5e0!3m2!1sen!2sng!4v1657197824726!5m2!1sen!2sng" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.5977267755375!2d7.426365214798639!3d10.532316092487493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104d3552b5a50483%3A0x4dd107ab66e9b6be!2sNagwamatse%20House!5e0!3m2!1sen!2sng!4v1653350893447!5m2!1sen!2sng" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe> -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-md-offset-7 col-sm-12">
                        <div class="contact-3-info page-section-ptb">
                            <div class="clearfix">
                                <div class="section-title mb-0">
                                    <h6>let's work together</h6>
                                    <h2 class="title-effect">Contact Us</h2>
                                </div>
                                <p class="mb-50">It would be great to hear from you! If you got any questions, please do
                                    not hesitate to send us a message. We are looking forward to hearing from you! We
                                    reply within <span class="tooltip-content" data-original-title="Mon-Fri 9am–5pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours!</span></p>
                                <div id="formmessage">Success/Error Message Goes Here</div>
                                <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
                                    <div class="contact-form clearfix">
                                        <div class="section-field">
                                            <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                                        </div>
                                        <div class="section-field">
                                            <input type="email" placeholder="Email*" class="form-control" name="email">
                                        </div>
                                        <div class="section-field">
                                            <input type="text" placeholder="Phone*" class="form-control" name="phone">
                                        </div>
                                        <div class="section-field textarea">
                                            <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
                                        </div>
                                        <!-- Google reCaptch-->
                                        <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
                                        <div class="section-field submit-button">
                                            <input type="hidden" name="action" value="sendEmail" />
                                            <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/pre-loader/loader-02.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--=================================
 map -->


        <!--=================================
 footer -->

        <?php
        include_once('include/footer.php');
        ?>

        <!--=================================
 footer -->

    </div>



    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <!--=================================
 jquery -->

    <!-- jquery -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

    <!-- plugins-jquery -->
    <script type="text/javascript" src="js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script type="text/javascript">
        var plugin_path = 'js/';
    </script>

    <!-- custom -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- webchat -->
    <?php
    include_once('include/webchat.php');
    ?>


</body>

</html>