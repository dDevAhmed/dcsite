<?php 
    $currentPge = "portfolio";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Multi-Purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Portfolio - Darussalam Computers</title>

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

        <section class="page-title bg-overlay-black-60 parallax" style="background: url(images/carousel-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-name">
                            <h1>Portfolio</h1>
                            <p>We know the secret of your success</p>
                        </div>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i
                                    class="fa fa-angle-double-right"></i></li>
                            <li><span>portfolio</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
page-title -->


        <!--=================================
 grid -->

        <section class="white-bg page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="isotope-filters">
                            <button data-filter="" class="active">All</button>
                            <button data-filter=".awards">awards</button>
                            <button data-filter=".events">events</button>
                            <button data-filter=".projects">projects</button>
                            <button data-filter=".partners">partners</button>
                        </div>
                        <div class="isotope columns-4 popup-gallery">
                            <!-- <div class="grid-item awards">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/small/01.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> <a href="portfolio-single-01.html"> Post simple image
                                            </a> </h4>
                                        <span class="text-white"> <a href="#"> projects </a> | <a href="#"> Web Design
                                            </a> </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/small/01.jpg"><i
                                            class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div> -->
                            <!---------------------------- 
                                        events
                            ----------------------------->
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/end_of_year_1.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> End of Year celebration </h4>
                                        <span class="text-white"> 2019 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/end_of_year_1.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/end_of_year_2.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> End of Year celebration </h4>
                                        <span class="text-white"> 2019 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/end_of_year_2.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/end_of_year_3.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> End of Year celebration </h4>
                                        <span class="text-white"> 2019 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/end_of_year_3.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/end_of_year_4.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> End of Year celebration </h4>
                                        <span class="text-white"> 2019 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/end_of_year_4.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/end_of_year_5.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> End of Year celebration </h4>
                                        <span class="text-white"> 2019 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/end_of_year_5.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/book_launch_1.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Book Launch </h4>
                                        <span class="text-white"> 2015 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/book_launch_1.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/book_launch_2.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Book Launch </h4>
                                        <span class="text-white"> 2015 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/book_launch_2.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/book_launch_3.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Book Launch </h4>
                                        <span class="text-white"> 2015 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/book_launch_3.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/book_launch_4.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Book Launch </h4>
                                        <span class="text-white"> 2015 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/book_launch_4.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/book_launch_5.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Book Launch </h4>
                                        <span class="text-white"> 2015 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/book_launch_5.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/book_launch_6.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Book Launch </h4>
                                        <span class="text-white"> 2015 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/book_launch_6.JPG"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/naf_training_1.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> NAF Training </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/naf_training_1.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item events">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/events/naf_training_2.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> NAF Training </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/events/naf_training_2.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>

                            <!---------------------------- 
                                        projects
                            ----------------------------->
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_1.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_1.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_2.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_2.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_3.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_3.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_4.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_4.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_5.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_5.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_6.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_6.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_7.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_7.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_8.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_8.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_9.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_9.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_10.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_10.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_11.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_11.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_12.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_12.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_13.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_13.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/udu_sok_14.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <span class="text-white"> 2016 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/udu_sok_14.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>

                            <!-- fcck -->
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_1.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_1.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_2.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_2.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_3.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_3.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_4.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_4.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_5.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_5.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_6.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_6.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_7.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_7.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_8.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_8.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_9.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_9.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_10.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_10.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_11.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_11.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_12.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_12.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_13.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_13.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_14.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_14.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_15.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_15.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_16.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_16.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_17.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_17.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_18.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_18.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_19.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_19.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item projects">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/projects/fcck_20.JPG" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <span class="text-white"> 2014 </span>
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/projects/fcck_20.JPG.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>

                            <!---------------------------- 
                                        partners
                            ----------------------------->
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/cbn.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Central Bank of Nigeria </h4>
                                        <!-- <span class="text-white"> 2019 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/cbn.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/icdl.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> ICDL </h4>
                                        <!-- <span class="text-white"> 2019 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/icdl.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/itf.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Industrial Training Fund </h4>
                                        <!-- <span class="text-white"> 2019 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/itf.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/jamal.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Jamal Secondary </h4>
                                        <!-- <span class="text-white"> 2019 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/jamal.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/kadpoly.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Kaduna Polytechnic </h4>
                                        <!-- <span class="text-white"> 2015 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/kadpoly.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/kadunastate.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Kaduna State Government </h4>
                                        <!-- <span class="text-white"> 2015 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/kadunastate.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/katsinajudiciary.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Katsina Judiciary </h4>
                                        <!-- <span class="text-white"> 2015 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/katsinajudiciary.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/kca.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Kaduna Central Academy </h4>
                                        <!-- <span class="text-white"> 2015 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/kca.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/peugeot.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Peugeot Automobile Nigeria </h4>
                                        <!-- <span class="text-white"> 2015 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/peugeot.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/shell.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Shell </h4>
                                        <!-- <span class="text-white"> 2015 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/shell.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/udus.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Usman Danfodio University </h4>
                                        <!-- <span class="text-white"> 2016 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/udus.jpg"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/un.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> United Nations </h4>
                                        <!-- <span class="text-white"> 2016 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/un.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/fairview.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Fairview Consulting </h4>
                                        <!-- <span class="text-white"> 2016 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/fairview.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                            <div class="grid-item partners">
                                <div class="portfolio-item">
                                    <img src="images/portfolio/partners/fcc.png" alt="">
                                    <div class="portfolio-overlay">
                                        <h4 class="text-white"> Federal Cooperative College </h4>
                                        <!-- <span class="text-white"> 2016 </span> -->
                                    </div>
                                    <a class="popup portfolio-img" href="images/portfolio/partners/fcc.png"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
   grid -->


        <!--=================================
counter -->

        <?php
            include_once('include/portfoliocounter.php');
        ?>

        <!--=================================
    counter -->


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