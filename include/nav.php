<div class="menu">
    <!-- menu start -->
    <nav id="menu" class="mega-menu">
        <!-- menu list items container -->
        <section class="menu-list-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                            <li>
                                <a href="index.php"><img id="logo_img" src="images/logo.png" alt="logo">
                                </a>
                            </li>
                        </ul>
                        <!-- menu links -->
                        <div class="menu-bar">
                            <ul class="menu-links">

                                <li class=<?php if($currentPge == "home"){ echo "active"; } ?> ><a href="index.php"> Home </a></li>

                                <li class=<?php if(($currentPge == "about")||($currentPge == "gallery")){ echo "active"; } ?> ><a href="javascript:void(0)"> About <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="about.php">About Us </a></li>
                                        <li><a href="gallery.php">Gallery </a></li>
                                    </ul>
                                </li>

                                <li class=<?php if(($currentPge == "services") || ($currentPge == "servicedetail")){ echo "active"; } ?> ><a href="services.php">Services </a></li>

                                <li class=<?php if(($currentPge == "academy") || ($currentPge == "internships") || ($currentPge == "corperatetrainings") || ($currentPge == "certifications")){ echo "active"; } ?>><a href="javascript:void(0)"> Programmes <i
                                            class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="#">Academy </a></li>
                                        <li><a href="#">Internships </a></li>
                                        <li><a href="#">Corperate Trainings </a></li>
                                        <li><a href="#">Certifications </a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Portal </a></li>

                                <li class=<?php if($currentPge == "contact"){ echo "active"; } ?> ><a href="contact.php">Contact </a></li>

                                <!-- <li><a class="button border" href="#" id="nav-portal-btn">Portal</a></li> -->
                                <!-- <li><a href="cbt.html" class="btn btn-primary btn-lg">Student Portal </a></li> -->

                            </ul>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </section>
    </nav>
    <!-- menu end -->
</div>