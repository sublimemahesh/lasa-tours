<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$TOUR_DATE_PHOTO = new TourDatePhoto(NULL);
$TOUR_PACKAGE = new TourPackage($id);
$TOUR_TYPES = new TourType($TOUR_PACKAGE->tour_type);
?>
<html lang="en">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $TOUR_PACKAGE->short_description?>, Sri Lanka Lasa Tours is Reputable and trustworthy holiday partner in Sri Lanka. You can plan your dream vacation the way you want it to be with our Lasa Tours package options. Our chauffeurs are specialist in Russian languages.">
        <meta name="keywords" content="<?php echo $TOUR_PACKAGE->title?>, sri lanka round tours, one day tours, tour arrangement, sri lanka lasa tours, lasa tours tour packages, about sri lanka lasa tours, best tour guide in sri lanka,  ">
        <meta name="author" content="Synotec Holdings">
        <!-- PAGE TITLE -->
        <title>View Tour | Sri Lanka Lasa Tours</title>
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- ALL GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,500,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- FONT AWESOME CSS -->
        <link rel="stylesheet" href="assets/fonts/line-awesome-font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
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
        <link href="assets/css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="slider/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
                            <a href="index.php">Home </a> 
                            <a href="tours.php?id=<?php echo $TOUR_TYPES->id ?>"> <i class="fa fa-angle-double-right"></i> <?php echo $TOUR_TYPES->name ?>  </a>
                            <i class="fa fa-angle-double-right"></i> <?php echo $TOUR_PACKAGE->title ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner --> 

        <section id="blognews" class="blog-area">
            <div class="container">
                <div class="row" >
                    <div class="col-md-8">
                        <?php
                        $TOUR_DATE = new TourDate(NULL);
                        foreach ($TOUR_DATE->getTourDatesById($id) as $key => $tour_date) {
                            $key++;
                            ?>
                            <div class="row" style="padding-top: 20px;">  
                                <!--                                <div class="col-md-1 col-sm-1 day_1 no-padding">
                                                                    <div class="date-box">
                                                                        <h2 class="Default-clr"><?php echo $key ?></h2>
                                                                        <div class="default-bg"></div>
                                                                    </div>
                                                                </div>  -->

                                <div class="col-md-11" style=" ; margin-top: 5px;">
                                    <h3 class="tour-day"><?php echo $tour_date['title'] ?></h3> 
                                </div>
                            </div>
                            <div class="row view-tour" style="">
                                <div class="col-md-12">

                                    <?php echo $tour_date['description'] ?>

                                </div>
                            </div>

                            <div class="row tour-day-imgs hidden-xs hidden-sm">
                                <?php
                                foreach ($TOUR_DATE_PHOTO->getTourDatePhotosById($tour_date['id']) as $tour_date_photo) {
                                    ?>
                                    <div class="col-md-3">
                                        <div class="gallery">
                                            <a href="upload/tour-package/date/gallery/<?php echo $tour_date_photo['image_name'] ?>" class="big"><img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo['image_name'] ?>" alt="" title="<?php echo $tour_date['caption'] ?>" /></a>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row tour-day-imgs hidden-md hidden-lg">
                                <div class="tour-owl owl-carousel owl-theme">
                                    <?php
                                    foreach ($TOUR_DATE_PHOTO->getTourDatePhotosById($tour_date['id']) as $tour_date_photo) {
                                        ?>
                                        <div class="gallery">
                                            <a href="upload/tour-package/date/gallery/<?php echo $tour_date_photo['image_name'] ?>" class="big"><img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo['image_name'] ?>" alt="" title="<?php echo $tour_date['caption'] ?>" /></a>

                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-4">
                        <div class="right-sidebar sidebar">
                            <div class="sidebar-block widget">
                                <div class="section-title ">
                                    <h2>Other Tours</h2>
                                    <div class="title-separator-outer "> 
                                        <div class="title-separator bg-primary style-liner"></div> 
                                    </div>
                                </div>
                                <div class="widget-popular">
                                    <?php
                                    $TOUR_PACKAGE_ALL = new TourPackage(NULL);
                                    foreach ($TOUR_PACKAGE_ALL->getTourPackagesByType($TOUR_PACKAGE->tour_type) as $tour_package) {
                                        ?>

                                        <div class="post-small clearfix">
                                            <a class="post-img black-hover" href="view-tour.php?id=<?php echo $tour_package['id'] ?>">
                                                <img class="img-responsive radius-0" src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" alt="">

                                            </a>
                                            <div class="post-desc" >
                                                <a  href="view-tour.php?id=<?php echo $tour_package['id'] ?>"> <h4  ><?php echo $tour_package['title'] ?></h4></a>
                                                <?php echo substr($tour_package['short_description'], 0, 40) ?>.. 
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div> 
                        </div>        
                    </div>
                </div>

                <!--                 Map 
                                <div class="contactmap contactmap-bottom contact-padd-top"  >
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="map1  wow fadeInUp">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.2871743706564!2d-71.06165938447522!3d42.357718779187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3708485209583%3A0x6e248f25891a1cc4!2sSchool+St%2C+Boston%2C+MA+02108%2C+USA!5e0!3m2!1sen!2sin!4v1507011599646" frameborder="0" allowfullscreen width=100% height="400px;"></iframe>
                
                                            </div>
                                        </div>
                                    </div>
                                     //Map 
                                </div>-->
            </div>

        </section>

        <!-- START COMPANY DESIGN AREA -->
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
        <script src="assets/js/simple-lightbox.min.js" type="text/javascript"></script>
    </body>
    <script>
        $(function () {
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function () {
                console.log('Requested for showing');
            })
                    .on('shown.simplelightbox', function () {
                        console.log('Shown');
                    })
                    .on('close.simplelightbox', function () {
                        console.log('Requested for closing');
                    })
                    .on('closed.simplelightbox', function () {
                        console.log('Closed');
                    })
                    .on('change.simplelightbox', function () {
                        console.log('Requested for change');
                    })
                    .on('next.simplelightbox', function () {
                        console.log('Requested for next');
                    })
                    .on('prev.simplelightbox', function () {
                        console.log('Requested for prev');
                    })
                    .on('nextImageLoaded.simplelightbox', function () {
                        console.log('Next image loaded');
                    })
                    .on('prevImageLoaded.simplelightbox', function () {
                        console.log('Prev image loaded');
                    })
                    .on('changed.simplelightbox', function () {
                        console.log('Image changed');
                    })
                    .on('nextDone.simplelightbox', function () {
                        console.log('Image changed to next');
                    })
                    .on('prevDone.simplelightbox', function () {
                        console.log('Image changed to prev');
                    })
                    .on('error.simplelightbox', function (e) {
                        console.log('No image found, go to the next/prev');
                        console.log(e);
                    });
        });
    </script>
    <script>
        $('.tour-owl').owlCarousel({
            loop: true,
            margin: 0,
            dots: false,
            nav: false,
            autoplay: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        });

    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element'); //remove the layout
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
        <script type="text/javascript">
        function triggerHtmlEvent(element, eventName) {
        var event;
            if (document.createEvent) {
            event = document.createEvent('HTMLEvents');
            event.initEvent(eventName, true, true);
            element.dispatchEvent(event);
        } else {
            event = document.createEventObject();
            event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
        }
    }
                            <!-- Flag click handler -->
                            $('.translation-links a').click(function (e) {
            e.preventDefault();
    var lang = $(this).data('lang');
               $('#google_translate_element select option').each(function () {
                    if ($(this).text().indexOf(lang) > -1) {
                        $(this).parent().val($(this).val());
                        var container = document.getElementById('google_translate_element');
                        var select = container.getElementsByTagName('select')[0];
                        triggerHtmlEvent(select, 'change');
                    }
                });
            });

    </script>
</html>