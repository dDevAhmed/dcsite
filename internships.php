<?php 
    $currentPge = "internships";
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
    <title>Internships - Darussalam Computers</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/dcLogo.png" />

    <!-- font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

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

        <section class="page-title bg-overlay-black-60 parallax" style="background: url(images/internship.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-name">
                            <h1>Internships</h1>
                            <p>We know the secret of your success</p>
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i
                                    class="fa fa-angle-double-right"></i></li>
                            <li><span>Internships</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
page-title -->


        <!--=================================
 service-->

        <section class="our-services page-section-ptb gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <h6>Join Us for</h6>
                            <h2 class="title-effect">Internship and student opportunities </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <p>An internship is a professional learning experience that offers meaningful, practical work related to a student's field of study or career interest. An internship gives a student the opportunity for career exploration and development, and to learn new skills. Are you that student looking for this opportunity? At Darussalam Computers, we provide students with the work experience that helps put their education into practice, develop their leadership skills and give them a competitive advantage in the global job market. Our students are offered various comprehensive, career-building trainings which helps them develop practical experience in their field of study.<br><br>
                        Start your journey here and discover how you can apply your talent and skills to harness powerful change with our internship opportunities</p>
                        
                    </div>
                </div>
                <div class="text-center mt-20">
                <a class="button" href="contact.php"> Contact Us </a>
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
    <script type="text/javascript">var plugin_path = 'js/';</script>

    <!-- custom -->
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- webchat -->
    <?php
        include_once('include/webchat.php');
    ?>

</body>

</html>