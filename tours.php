<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$TOUR_TYPES = new TourType($id);
$TOUR_DATE = new TourDate(NULL);
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
        <title> Tours - <?php echo $TOUR_TYPES->name ?></title>
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
                            <i class="fa fa-angle-double-right"></i> Tour Packages
                            <i class="fa fa-angle-double-right"></i> <?php echo $TOUR_TYPES->name ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner -->

        <section id="tours" class="about-area section-padding abut"> 
            <div class="container">
                <div class="gallery-items-5-2">
                    <div class="row">
                        <?php
                        $TOUR_PACKAGE = new TourPackage(NULL);



                        foreach ($TOUR_PACKAGE->getTourPackagesByType($id) as $tour_package) {

                            $Dates = count($TOUR_DATE->getTourDatesById($tour_package['id']));
                            ?>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item cat-2 cat-4">
                                <div class="product-thumb">
                                    <a href="view-tour.php?id=<?php echo $tour_package['id'] ?>">  
                                        <div class="image">
                                            <img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>"    class="img-responsive" />
                                            <div class="hoverbox link-center">
                                                <div class="icon_plus" aria-hidden="true"></div>
                                            </div>
                                            <div class="matters  ">
                                                <p><?php
                                                    if ($Dates === 1) {
                                                        echo 'One Day';
                                                    } else {
                                                        echo $Dates.' Days';
                                                    }
                                                    ?></p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <div class="inner">
                                            <a href="view-tour.php?id=<?php echo $tour_package['id'] ?>">  
                                                <h4 class="color-black"><?php echo $tour_package['title'] ?></h4> </a>
                                            <p class="text-justify"><?php echo $tour_package['short_description'] ?>...</p>
                                        </div>
                                        <div class="text-left">
                                            <div class="border-left-btm col-md-12 no-padding no-padding padding_none">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                                        <a href="booking.php?id=<?php echo $tour_package['id'] ?>">    <button type="button"  >Book Now </button></a>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                                        <a href="view-tour.php?id=<?php echo $tour_package['id'] ?>">   <button type="button">View More </button></a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>

        </section>
        <!-- START SERVICE DESIGN AREA -->
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
