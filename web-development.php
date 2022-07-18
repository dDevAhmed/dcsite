<?php 
    $currentPge = "servicedetail";
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
    <title>Web Development - Darussalam Computers</title>

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

    <!-- custom css -->
    <link rel="stylesheet" href="css/mycustom.css">


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
            <!-- topbar -->
            <?php
            include_once('include/topbar.php');
            ?>
            <!-- topbar -->

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
                            <h1>Services</h1>
                            <p>We know the secret of your success</p>
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i
                                    class="fa fa-angle-double-right"></i></li>
                            <li><a href="services.php"> Services</a> <i class="fa fa-angle-double-right"></i></li>
                            <li><span>Web Development</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
page-title -->


        <!--=================================
 Blog-->

        <section class="blog white-bg page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="blog-entry mb-50">
                            <div class="entry-image clearfix">
                                <img class="img-responsive" src="images/services/web-development.png" alt="">
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="#">Web Development</a>
                                </div>
                                <div class="entry-content">
                                    <p>Our team of website developers provide expert web application development and web design services to our clients. We offer a variety of website design and development services, from creating mobile web development solutions and responsive website designs, to building custom e-commerce and intranet experiences using the latest and proven web technologies. With up to 85% of consumers visiting company’s or service provider’s website before making a purchase, more and more consumers make decisions based on their online experience: the appearance, usability and accessibility of your website is more important than ever, especially in an increasingly competitive market. </p>
                                </div>
                                <div class="entry-share clearfix">
                                    <div class="social list-style-none pull-right">
                                        <strong>Share : </strong>
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://dc-site.herokuapp.com/web-development.php" target="_blank"> <i class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/intent/tweet?url=https://dc-site.herokuapp.com/web-development.php&text=Web%Development%20Service%20by%20Darussalam%20Computers.&hashtags=web,development,information,technology" target="_blank"> <i class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="https://api.whatsapp.com/send?text=https://dc-site.herokuapp.com/web-development.php" target="_blank"> <i class="fa fa-whatsapp"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" class="click-to-copy-btn"><span class="tooltip-content show-copied" data-original-title="copy" data-toggle="tooltip" data-placement="top"> <i class="fa fa-copy"></i> </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- ================================================ -->
                        <div class="blog-entry mb-50">
                            <div class="clearfix">
                                <ul class="grid-post">
                                    <li>
                                        <div class="portfolio-item">
                                            <img class="img-responsive" src="images/services/moreservices/web/web-1.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="portfolio-item">
                                            <img class="img-responsive" src="images/services/moreservices/web/web-2.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="portfolio-item">
                                            <img class="img-responsive" src="images/services/moreservices/web/web-3.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="portfolio-item">
                                            <img class="img-responsive" src="images/services/moreservices/web/web-4.jpg" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================ -->
                    <!-- sticky side section -->
                    <?php
                    include_once('include/servicestickysection.php');
                    ?>
                    <!-- ================================= -->
                </div>
            </div>
        </section>

        <!--=================================
   Blog-->


   <!-- contact================================================ -->
   <?php
        include_once('include/servicecontactform.php');
        ?>


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

    <!-- mycustom js -->
    <script src="js/mycustom.js"></script>

    <!-- webchat -->
    <?php
        include_once('include/webchat.php');
    ?>

    <!-- show copied on tooltip -->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').click(function(){
                $('.show-copied').attr('data-original-title', 'Copied')
                    .tooltip('fixTitle')
                    .tooltip('show')
                    .attr('data-original-title', 'Copy');
            });    
        });
    </script>

</body>

</html>