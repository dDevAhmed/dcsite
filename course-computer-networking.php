<?php
$currentPge = "coursedescription";
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
    <title>Computer Networking - Darussalam Computers</title>

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

        <section class="page-title bg-overlay-black-60 parallax" style="background: url(images/academy/opened-backpack-with-school-supplies-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-name">
                            <h1>Computer Networking</h1>
                            <!-- <p class="text-white">
                                <span><i class="fa fa-signal"></i> Basic</span>&nbsp;&nbsp;
                                <span><i class="fa fa-calendar"></i> 2 Weeks </span>&nbsp;&nbsp;
                                <span> &#8358;10,000 </span>
                            </p> -->
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="Academy.php"><i class="fa fa-home"></i> Academy</a> <i class="fa fa-angle-double-right"></i></li>
                            <li><span>Computer Networking</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
page-title -->


        <!--=================================
 service-->

        <section class="our-services page-section-ptb white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <h6>Tell us a bit about yourself</h6>
                            <h2 class="title-effect">Start your application </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-networking.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Computer Networking</h4>
                                <p>Learn to design, build and maintain modern networks. </p>
                                <h4 class="theme-color mt-30">Course Content</h4>
                                <ul class="list list-unstyled theme-color mb-20">
                                    <li> <i class="fa fa-angle-right"></i> Networking fundamentals </li>
                                    <li> <i class="fa fa-angle-right"></i> Network cable configuration</li>
                                    <li> <i class="fa fa-angle-right"></i> OS administration</li>
                                    <li> <i class="fa fa-angle-right"></i> Router configuration </li>
                                    <li> <i class="fa fa-angle-right"></i> Rack installation</li>
                                    <li> <i class="fa fa-angle-right"></i> Patch panel configuration</li>
                                    <li> <i class="fa fa-angle-right"></i> Information security concept </li>
                                    <li> <i class="fa fa-angle-right"></i> Security standard, auditing, and best practises</li>
                                    <li> <i class="fa fa-angle-right"></i> Flow control</li>
                                </ul>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Advance</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 6 Weeks </span>
                                    <span class="pull-right"> &#8358;50,000 </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="mb-40">Form</h4>
                                <div id="formmessage">Success/Error Message Goes Here</div>
                                <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
                                    <div class=" clearfix">
                                        <div class="section-field mb-20">
                                            <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                                        </div>
                                        <div class="section-field mb-20">
                                            <input type="email" placeholder="Email*" class="form-control" name="email">
                                        </div>
                                        <div class="section-field mb-20">
                                            <input type="text" placeholder="Phone*" class="form-control" name="phone">
                                        </div>
                                        <!-- <div class="section-field textarea">
                                            <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                                        </div> -->
                                        <div class="section-field submit-button">
                                            <input type="hidden" name="action" value="sendEmail" />
                                            <button id="submit" name="submit" type="submit" value="Send" class="button"> Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/pre-loader/loader-02.svg" alt=""></div>
                            </div>
                        </div>
                        <!-- <form class="" id="contactform" role="form" method="post" action="">
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
                                <div class="section-field">
                                    <div class="box">
                                        <select class="fancyselect">
                                            <option value="1">Session</option>
                                            <option value="2">Morning : 9am - 11am</option>
                                            <option value="3">Morning : 11am - 1pm</option>
                                            <option value="2">Afternoon : 1pm - 3pm</option>
                                            <option value="3">Afternoon : 3pm - 5pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
 service-->


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

    <!-- webchat -->
    <?php
    include_once('include/webchat.php');
    ?>


</body>

</html>