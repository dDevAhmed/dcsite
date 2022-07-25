<?php
$currentPge = "academy";
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
    <title>Academy - Darussalam Computers</title>

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

        <section class="slider-parallax popup-video-banner bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background: url(images/academy/opened-backpack-with-school-supplies-1.jpg);">
            <div class="slider-content-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content text-left">
                                <h1 class="text-white">Darussalam Computers <br> <span class="theme-color"> Academy </span></h1>
                                <h4 class="text-white mt-20">Grow your skills, define your future.</h4>

                                <div class="mt-20">
                                    <a class="button" href="#courses"> View Courses </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="scroll-down move" title="Scroll Down" href="#about-us"><i></i></a> -->
        </section>
        <!--=================================
page-title -->


        <!--=================================
about -->
        <section class="page-section-ptb gray-bg" id="about-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 sm-mb-30">
                        <img class="img-responsive" src="images/academy/learning-2.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h6>About our academy</h6>
                            <h2 class="title-effect">Build relevant skills</h2>
                            <p>We teach you the right skills to be prepared for tomorrow.</p>
                        </div>
                        <p>At Darussalam Computers Academy, we offer digital skills training in various areas of specialisation. Whether you are just starting or an experienced who has some prior knowledge, we take you step by step to master the skills to make you a professional in the training of your choice. Our mission is to provide the modern tech skills that empowers all students to develop their full potential. We have trained numerous students who were intentional about leveling up their skills. Our unique standards keeps us focused on delivering appropriate content and preparing our students to achieve their greatest ambitions.</p>
                        <!-- <div class="mt-30">
                            <a class="button icon mb-10 mr-10" href="about.php">
                                <span>Read more</span>
                            </a>
                        </div> -->
                        <div class="col-md-6">
                            <ul class="list list-unstyled list-hand">
                                <li> Get certified</li>
                                <li> Learn from the professionals </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list list-unstyled list-hand">
                                <li> Master modern tech skills</li>
                                <li> Learn by doing </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
about -->


        <!--=================================
 pricing -->

        <section class="page-section-ptb white-bg" id="courses">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <h6>Our Courses</h6>
                            <h2 class="title-effect">Learn by doing at any level</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="row"> -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-holiday-primary.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Holiday Class (Primary)</h4>
                                <p>Catch them young with the relevant digital skills</p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Basic</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 2 Weeks </span>
                                    <span class="pull-right"> &#8358;10,000 </span>
                                </h6>
                                <!-- <button type="button" class="btn btn-primary btn-block">Apply</button> -->
                                <a href="course-holiday-class-primary.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-holiday-secondary.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Holiday Class (Secondary)</h4>
                                <p>Spend time learning relevant digital skills</p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Intermediate</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 2 Weeks </span>
                                    <span class="pull-right"> &#8358;15,000 </span>
                                </h6>
                                <a href="course-holiday-class-secondary.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-cbt.png" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">CBT Coaching</h4>
                                <p>Get introduce to the basics of computer</p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Basic</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 1 Week </span>
                                    <span class="pull-right"> &#8358;5,000 </span>
                                </h6>
                                <a href="course-cbt-coaching.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-digital-literacy.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Digital Literacy 1</h4>
                                <p>Get ahead in time with the skills needed to thrive in the digital age</p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Basic</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 4 Weeks </span>
                                    <span class="pull-right"> &#8358;20,000 </span>
                                </h6>
                                <a href="course-holiday-class-secondary.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-digital-literacy.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Digital Literacy 2</h4>
                                <p>Gain competitive digital skills relevant to business, academic or personal development </p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Intermediate</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 4 Weeks </span>
                                    <span class="pull-right"> &#8358;25,000 </span>
                                </h6>
                                <a href="course-holiday-class-secondary.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-graphic.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Graphic Design</h4>
                                <p>Master the tools and techniques to express your creativity in design</p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Advance</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 4 Weeks </span>
                                    <span class="pull-right"> &#8358;40,000 </span>
                                </h6>
                                <a href="course-holiday-class-secondary.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-web-development.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Web Development</h4>
                                <p>Learn to build fully responsive website and web apps to impress clients and employers with your coding skills and get ahead on the job.</p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Advance</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 6 Weeks </span>
                                    <span class="pull-right"> &#8358;60,000 </span>
                                </h6>
                                <a href="course-holiday-class-secondary.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-3 mb-30">
                            <div class="feature-3-image mb-20">
                                <img alt="" src="images/academy/course-networking.jpg" class="img-responsive">
                            </div>
                            <div class="feature-3-info">
                                <h4 class="text-back">Networking / System Security</h4>
                                <p>Learn to design, build and maintain modern networks.</p>
                                <h6 class="text-center mt-30 mb-15">
                                    <span class="pull-left"><i class="fa fa-signal"></i> Advance</span>
                                    <span class="text-center"><i class="fa fa-calendar"></i> 6 Weeks </span>
                                    <span class="pull-right"> &#8358;50,000 </span>
                                </h6>
                                <a href="course-holiday-class-secondary.php" class="btn btn-primary btn-block">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
    </div>
    </section>

    <!--=================================
 pricing -->


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