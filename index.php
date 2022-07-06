<?php 
    $currentPge = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('include/head.php');
    ?>
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
banner -->

        <?php
            include_once('include/banner.php');
        ?>

        <!--=================================
banner -->


        <!--=================================
About-->

        <?php
            include_once('include/aboutus.php');
        ?>

        <!--=================================
About-->


        <!--=================================
service-->

        <?php
            include_once('include/services.php');
        ?>

        <!--=================================
service-->


        <!--=================================
icdl action-box-->

        <?php
            include_once('include/icdlactionbox.php');
        ?>

        <!--=================================
icdl action-box-->


    <!--=================================
clients  -->

        <?php
            include_once('include/clients.php');
        ?>

    <!--=================================
clients  -->


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