<!DOCTYPE html>
<?php
include './class/include.php';
$ABOUT_US = new Page(1);
?>
<html lang="en">

    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TravelCo - Travel Agency Bootstrap Template">
        <meta name="keywords" content=" new, html, bootstrap, new html template, design, creative, clean, modern">
        <meta name="author" content="Nauman Anwar">
        <!-- PAGE TITLE -->
        <title>About Us</title>
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- ALL GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,500,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- FONT AWESOME CSS -->
        <link rel="stylesheet" href="assets/fonts/line-awesome-font-awesome.min.css">
        <!-- OWL CAROSEL CSS -->
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- MAGNIFIC CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- hover -->
        <link rel="stylesheet" href="assets/css/bootstrap-dropdownhover.css">
        <!-- MAIN STYLE CSS -->
        <link rel="stylesheet" href="assets/css/venobox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <!-- color STYLE CSS -->
        <link rel="stylesheet" href="assets/css/color-switcher.css">
        <!-- RESPONSIVE CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/media-queries.css">

    </head>

    <body>
        
        <!-- START HEADER AREA -->
        <?php
        include 'header.php';
        ?>
        <!-- / END HEADER AREA -->

        <!-- Start banner -->
        <div class="inner-page-header">
            <img src="assets/images/bg/aboutbg.jpg" alt="Inner Page Header" class="full-width">
            <div class="title-breadcrumb">
                <div class="container">
                    <div class="site-page-breadcrumb">
                        <span>
                            <a style="" href="index.php">Home </a> 
                            <i class="fa fa-angle-double-right"></i> About Us
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner -->

        <section id="aboutus" class="about-area section-padding abut">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-6 col-md-12 about_para">
                        <div class="section-title ">
                            <h2>Who We Are</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <p>
                              <?php echo $ABOUT_US->description ?>      
                        </p>
                         
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img alt="image" src="assets/images/about.jpg">
                    </div>
                </div>
            </div>
        </section>
        <!-- START SERVICE DESIGN AREA -->
        <section id="service" class="service-area section-padding">
            <div class="container">
                <div class="row">
                    <!-- START SINGLE SERVICE DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".2s">
                        <div class="single-service">
                            <div class="service-icon"><i class="fa fa-eye" aria-hidden="true"></i>
                            </div>
                            <h4>Our vision</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                    <!-- / END SINGLE SERVICE DESIGN AREA -->
                    <!-- START SINGLE SERVICE DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".4s">
                        <div class="single-service">
                            <div class="service-icon"><i class="fa fa-cubes" aria-hidden="true"></i>
                            </div>
                            <h4>Our Mission</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                    <!-- / END SINGLE SERVICE DESIGN AREA -->
                    <!-- START SINGLE SERVICE DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-delay=".6s">
                        <div class="single-service">
                            <div class="service-icon"><i class="fa fa-archive" aria-hidden="true"></i>
                            </div>
                            <h4>Our Values</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END SERVICE DESIGN AREA -->

        <!-- START FOOTER DESIGN AREA -->
        <?php
        include 'footer.php';
        ?>
        <!-- / END CONTACT DETAILS DESIGN AREA -->
        <!-- START SCROOL UP DESIGN AREA -->
        <div class="scroll-to-up">
            <div class="scrollup">
                <span class="fa fa-chevron-up"></span>
            </div>
        </div>
        <!-- / END SCROOL UP DESIGN AREA -->
        <!-- LATEST JQUERY -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- BOOTSTRAP JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- OWL CAROUSEL JS  -->
        <script src="assets/owlcarousel/js/owl.carousel.mini.js"></script>
        <!-- MAGNIFICANT JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- STEALLER JS -->
        <script src="assets/js/jquery.stellar.min.js"></script>
        <!-- MAGNIFICANT JS -->
        <script src="assets/js/isotope.min.js"></script>
        <!--Image Loded JS-->
        <script src="assets/js/images-loded.min.js"></script>
        <!--Image Loded JS-->
        <script src="assets/js/bootstrap-dropdownhover.js"></script>
        <!-- WOW JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- CONTCAT FORM JS -->
        <script src="assets/js/form-contact.js"></script>
        <script src="assets/js/venobox.min.js"></script>
        <!-- scripts js -->
        <script src="assets/js/scripts.js"></script> 
    </body>

</html>