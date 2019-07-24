  
<header id="home" class="welcome-area inner-page-htop-color">
    <div class="header-top-area  ">
        <div class="inner-page-htop-c ">
            <div class="container">
                <div class=" top-bar-row ">
                                        <div id="top-links" class="nav">
                        <ul class="list-inline top-bar inline-2 mr-auto">
                            <li style="padding-left: 0px">
                                <img src="assets/images/uk.png" alt="" class="img-responsive img"/>
                            </li> 
                            <li style="padding-left: 0px">
                                <img src="assets/images/german.png" alt="" class="img-responsive img"/>
                            </li>
<!--                            <li style="padding-left: 0px" class="marging-top-lan"><div id="google_translate_element" ></div></li>-->
                        </ul>
                        <ul class="list-inline pull-right button login-reg ml-auto">

                            <li><a href="tel:(+94) 77 688 1171">
                                    +94 77 688 1171
                                </a></li>
                            <li><a href="https://www.instagram.com/Tour_in_sri_lanka"><i class="fa fa-instagram"></i> </a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"><i class="fa fa-tripadvisor"></i> </a></li>
                             <li>  <a href="booking.php" class="color-black inq"> INQUIRY NOW </a></li>
                        </ul>
                    </div>
<!--                    <div class="col-md-6 col-xs-6">
                        <ul class="top-bar">
                            <li>
                                <img src="assets/images/uk.png" alt="" class="img-responsive img"/>
                            </li> 
                            <li>
                                <img src="assets/images/german.png" alt="" class="img-responsive img"/>
                            </li>
                            <li class="marging-top-lan"><div id="google_translate_element" ></div></li>
                        </ul>


                    </div>
                    <div class="col-md-6  col-xs-6  ">
                        <ul class="top-bar ">
                              <li class="   pull-right inq   color-black m-top" >
                                <a href="booking.php" class="color-black"> INQUIRY NOW </a>
                            </li>
                            <li class=" pull-right  m-top-2"  >
                                <h6 class="color-black"><i class="fa fa-phone" aria-hidden="true"></i> 
                                    <a style="color: #000;margin-right: 20px;" href="tel:(+94) 77 688 1171">(+94) 77 688 1171</a>
                                </h6>
                            </li> 
                        </ul>
                    </div>-->

                </div> 

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">

                        <div class="logo">
                            <a href="./">
                                <img class="innper-page-logo" src="assets/images/logo.png" alt="">
                            </a>
                        </div> 

                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 no-padding">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <nav class="navbar navbar-expand-md">
                                <button onclick="openNav()" class="openbtn navbar-toggler" type="button" data-toggle="collapse" data-target="#" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span><i class="fa fa-bars"></i></span>
                                </button>
                                <div id="mySidepanel" class="sidepanel">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                                    <a href="./">Home</a>
                                    <a href="about.php">About Us</a>
                                    <a href="service.php">Services</a>
                                    <a href="#" class="dropdown-menu">Tours</a>
                                    <?php
                                    $TOUR_TYPE = new TourType(NULL);
                                    foreach ($TOUR_TYPE->all() as $tour_type) {
                                        ?>
                                        <a href="tours.php?id=<?php echo $tour_type['id'] ?>"><?php echo $tour_type['name'] ?></a>
                                    <?php } ?>
                                    <a href="things-to-do.php">Things To Do</a>
                                    <a href="destinations.php">Destinations</a>
                                    <a href="gallery.php">Gallery</a>  
                                    <a href="contact.php">Contact Us</a>  
                                </div>
                                <div class="navbar-collapse collapse no-padding" id="collapse-mainmenu">
                                    <ul class="nav navbar-nav glrnav">
                                        <li><a href="./">Home <span class="caret"></span></a>
                                        </li>
                                        <li><a href="about.php">About Us <span class="caret"></span></a>
                                        <li><a href="service.php">Service <span class="caret"></span></a>
                                        </li>
                                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Tours<span class="caret"></span></a>
                                            <ul class=" dropdown-menu">
                                                <?php
                                                $TOUR_TYPE = new TourType(NULL);
                                                foreach ($TOUR_TYPE->all() as $tour_type) {
                                                    ?>
                                                    <li><a href="tours.php?id=<?php echo $tour_type['id'] ?>"><?php echo $tour_type['name'] ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li><a href="things-to-do.php">Things to Do <span class="caret"></span></a>
                                        </li>
                                        <li><a href="destinations.php">Destinations <span class="caret"></span></a>
                                        </li>
                                        <li><a href="gallery.php">Gallery<span class="caret"></span></a>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact Us <span class="caret"></span></a>
                                        </li>


                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

