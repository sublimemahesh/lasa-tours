
<header id="home" class="welcome-area inner-page-htop-color">
    <div class="header-top-area  ">

        <div class="inner-page-htop-c ">
            <div class="container">
                <div class=" top-bar-row ">
                    <div id="top-links" class="nav">
                        <ul class="list-inline top-bar inline-2 mr-auto translation-links ">
                            <li class="top-menu__item" style="display: inline-block;
                                position: relative;"><div class="top-menu__link"><a href="#" class="russian " data-lang="Russian"><img src="assets/img/003-russia.png" alt=""/></a></div></li>
                            <li class="top-menu__item" style="display: inline-block;
                                position: relative;"><div class="top-menu__link"><a href="#" class="united kingdom n" data-lang="English"><img src="assets/img/001-united-kingdom.png" alt=""/></a></div></li>
                        </ul>
                        <ul class="list-inline pull-right button login-reg ml-auto">

                            <li><a href="tel:(+94) 77 688 1171">
                                    +94 77 688 1171
                                </a></li>
                            <li><a href="https://www.instagram.com/Tour_in_sri_lanka"><i class="fa fa-instagram"></i> </a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i> </a></li>
                            <li><a href="https://www.tripadvisor.com/17790614"><i class="fa fa-tripadvisor"></i> </a></li>
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

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse-mainmenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span><i class="fa fa-bars"></i></span>
                                </button>

                                <div class="navbar-collapse collapse no-padding" id="collapse-mainmenu">
                                    <ul class="nav navbar-nav glrnav">
                                        <li><a href="./">Home <span class="caret"></span></a>
                                        </li>
                                        <li><a href="about.php">About Us <span class="caret"></span></a>
                                        <li><a href="service.php">Service <span class="caret"></span></a>
                                        </li>
                                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Tours<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                $TOUR_TYPE = new TourType(NULL);
                                                foreach ($TOUR_TYPE->all() as $tour_type) {
                                                    ?>
                                                    <li class="mobile-tour-links"><a href="tours.php?id=<?php echo $tour_type['id'] ?>"><?php echo $tour_type['name'] ?></a></li>
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

<div class="mobile-flags-container" style="margin-top: 4px;  position: absolute;
     width:100%">
    <ul class="top-bar-mobile translation-links">
        <li style="text-align: right;margin-right: 15px;">
            <a href="#" class="russian " data-lang="Russian"><img src="assets/img/003-russia.png" alt=""/></a>
        </li> 
        <li>
            <a href="#" class="united kingdom n" data-lang="English"><img src="assets/img/001-united-kingdom.png" alt=""/>
        </li>

    </ul>
    <ul class="top-bar-mobile-email">
        <li style="text-align: right;margin-right: 8px; font-weight: 500;">
            <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(+94) 77 688 1171">(+94) 77 688 1171</a>
        </li> 
    </ul>
</div>



