<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html lang="en">

    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TravelCo - Travel Agency Bootstrap Template">
        <meta name="keywords" content="new, html, bootstrap, new html template, design, creative, clean, modern">
        <meta name="author" content="Nauman Anwar">
        <!-- PAGE TITLE -->
        <title>Contact Us</title>
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- ALL GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,500,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
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
        <!-- MAIN STYLE CSS -->
        <link rel="stylesheet" href="assets/css/venobox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- color STYLE CSS -->
        <link rel="stylesheet" href="assets/css/color-switcher.css">
        <!-- RESPONSIVE CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <link rel="stylesheet" type="text/css" href="assets/css/media-queries.css">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
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
                            <i class="fa fa-angle-double-right"></i> Contact Us
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner -->
        <!-- START CONTACT DESIGN AREA -->
        <section id="contact" class="contact-area section-padding">
            <div class="container">
                <div class="row contact-sec"> 
                    <div class="col-xl-8 col-lg-8 col-md-12"> 
                        <div class="contact-form">
                            <div id="contact-form" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control"   placeholder="Name" required="required">
                                        <span id="spanFullName"></span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="email" name="txtEmail" id="txtEmail" class="form-control"   placeholder="Email" required="required">
                                        <span id="spanEmail"></span>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <input type="text" name="txtSubject" id="txtSubject"  class="form-control"   placeholder="subject">
                                        <span id="spanSubject"></span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea rows="6" id="txtMessage" name="txtMessage" class="form-control"   placeholder="Your Message" required="required"></textarea>
                                        <span id="spanMessage"></span>
                                    </div>

                                    <div class="col-md-4 text-center Default-clr-hvr">
                                        <div class="form-group">

                                            <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">

                                        </div>
                                        <div class="col-md-12">
                                            <span id="capspan" ></span>
                                        </div>
                                    </div>    
                                    <div class="col-md-4   Default-clr-hvr"  >
                                        <div class="form-group">
                                            <?php include("./contact-form/captchacode-widget.php"); ?>
                                        </div> 
                                    </div>
                                    <div class="col-md-4 text-center Default-clr-hvr"  >
                                        <div class="actions wow fadeInUp " data-wow-delay=".4s">
                                            <input type="submit" value="send Now" name="submit" id="btnSubmit" class="Default-clr-hvr"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / END CONTACT FORM DESIGN AREA </div> -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="section-title ">
                            <h2>Contact info</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                                <h6 class="pull-right contact-padd-top">(+94) 77 897 8756</h6>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                        <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                                <h6 class="pull-right contact-padd-top">websitename@mail.com</h6>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                        <div class="single-contact wow fadeInUp" data-wow-delay=".2s">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p>Moutain Drive , Kensigten
                                <br> London , United Kingdom</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="contact-socials">
                            <h4>Follow Us Social</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / END CONTACT DESIGN AREA -->
        
        <!-- Map -->
        <div class="contactmap contactmap-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="map1  wow fadeInUp">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.2871743706564!2d-71.06165938447522!3d42.357718779187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3708485209583%3A0x6e248f25891a1cc4!2sSchool+St%2C+Boston%2C+MA+02108%2C+USA!5e0!3m2!1sen!2sin!4v1507011599646" frameborder="0" allowfullscreen width=100% height="400px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Map -->
        
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
        <!-- WOW JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- CONTCAT FORM JS -->
        <script src="assets/js/form-contact.js"></script>
        <script src="assets/js/venobox.min.js"></script>
        <!-- scripts js -->
        <script src="assets/js/scripts.js"></script> 
        <script src="contact-form/scripts.js" type="text/javascript"></script>
    </body>

</html>