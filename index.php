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
        <title>Home</title>
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- ALL GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,500,900" rel="stylesheet">
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
        <link href="slider/slick.css" rel="stylesheet" type="text/css"/>
        <link href="slider/style.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <!-- START HEADER AREA -->
        <?php
        include 'header.php';
        ?>
        <!-- / END HEADER AREA -->

        <!-- START SLIDER AREA -->
        <?php
        include 'slider.php';
        ?>
        <!-- / END SLIDER AREA -->
        <div class="guest-rate-wrapper">
            <div class="guest-rate">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="guest-rate-inner">
                                <div class="guest-rate-inner-section guest-rating-stars">
                                    <p class="roboto">Our guests rate us </p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <div class="global-header-rating-statistics-short-stars-outer guest-stars">
                                        <span class="global-header-rating-statistics-short-stars-inner " style="width: 94%;"></span>
                                    </div>
                                </div>
                                <div class="guest-rate-inner-section guest-rating">
                                    <div class="guest-trip-rate">
                                        <img alt="image" src="assets/images/exce-logo.png">
                                    </div>
                                </div>
                                <div class="guest-rate-inner-section guest-right-section">
                                    <p>Welcome To Sri Lanka Lasa Tours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START OFFER AREA -->
        <section class="offter-area section-padding">
            <div class="container">
                <div class="row">                    

                    <div class="col-md-3 col-sm-4">
                        <a href="tours.php?id=1"> 
                            <div class="offer">
                                <img alt="image" src="assets/images/services/oneday.jpg">
                                <div class="overlay-offer">
                                    <h2 class="text-shadow box-text" >One Day Tours</h2> 
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <a href="tours.php?id=3"> 
                            <div class="offer">
                                <img alt="image" src="assets/images/services/2.jpg">
                                <div class="overlay-offer">
                                    <h2 class="text-shadow box-text" >Two Day Tours </h2> 
                                </div>
                            </div> 
                        </a>
                    </div>


                    <div class="col-md-3 col-sm-4">
                        <a href="tours.php?id=2"> 
                            <div class="offer">
                                <img alt="image" src="assets/images/services/round.jpg">
                                <div class="overlay-offer">
                                    <h2 class="text-shadow box-text" >Round Tours </h2> 
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <a href="service.php"> 
                            <div class="offer">
                                <img alt="image" src="assets/images/services/service.jpg">
                                <div class="overlay-offer">
                                    <h2 class="text-shadow box-text" >Services</h2> 
                                </div>
                            </div>
                        </a>
                    </div> 
                </div>
            </div>
        </section>
        <!-- END OFFER AREA -->

        <!-- START ABOUT DESIGN AREA -->
        <section id="aboutus" class="about-area2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="section-title ">
                            <h2>Who We Are</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                        <p>
                            <?php echo $ABOUT_US->description ?>                        
                        </p>
                        <div class="cruise-btns pull-right">
                            <a href="about.php" class="rbutton transparent">View More</a>  
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 img-full-width about-img-top">
                        <img alt="image" src="assets/images/journey.jpg">
                    </div>
                </div>
            </div>
        </section>
        <!-- / END ABOUT DESIGN AREA -->
        <section id="outtour" class="  section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title ">
                            <h2>Top Tour Packages</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="testimonial-list owl-carousel">
                    <?php
                    $TOUR_PACKAGE = new TourPackage(NULL);
                    foreach ($TOUR_PACKAGE->all() as $key => $tour_package) {
                        if ($key > 5) {
                            break;
                        }
                        ?>
                        <div class="single-testimonial item responsive_none">

                            <div class="product-thumb">
                                <a href="view-tour.php?id=<?php echo $tour_package['id'] ?>">  
                                    <div class="image">
                                        <img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>"    class="img-responsive" />
                                        <div class="hoverbox link-center">
                                            <div class="icon_plus" aria-hidden="true"></div>
                                        </div>
                                        <div class="matter">
                                            <p><?php echo $tour_package['dates'] ?></p>
                                        </div>
                                    </div>
                                </a>
                                <div class="caption">
                                    <div class="inner">
                                        <a href="view-tour.php?id=<?php echo $tour_package['id'] ?>">  
                                            <h4 class="color-black"><?php echo $tour_package['title'] ?></h4> </a>
                                        <p class="text-justify"><?php echo $tour_package['short_description'] ?>...</p>
                                    </div> 
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
                        <?php
                    }
                    ?> 
                </div>  
            </div>
        </section>

        <section id="place" class="tour-places section-padding paralax"  >
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title ">
                            <h2 style="color: white">Things to do</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="team">
                    <div class="grid">
                        <div class="tour-list owl-carousel">
                            <?php
                            $ACTIVITY = new Activities(NULL);
                            foreach ($ACTIVITY->all() as $activity) {
                                ?> 
                                <a href="view-things-to-do.php?id=<?php echo $activity['id'] ?>">   <figure class="effect-steve">
                                        <img src="upload/activity/<?php echo $activity['image_name'] ?>" /> 
                                        <figcaption>

                                            <h2 class="cl"><?php echo $activity['title'] ?> </h2> 
                                            <p class="text-justify"><?php echo substr($activity['short_description'], 0, 80) ?>..</p>

                                        </figcaption>
                                    </figure>
                                </a>

                            <?php } ?>


                        </div> 
                    </div>  
                </section> 
                <div class="row">
                    <div class="col-md-12 contact-padd-top-2"  >                         
                        <a href="things-to-do.php" class=" btn btn-warning pull-right ">View All</a>                         
                    </div> 
                </div>    
            </div> 
        </section> 


        <!-- / END CUSTOMER REVIEWS AREA -->
        <section id="outtour" class="  section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title ">
                            <h2>Top Destination</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-component greyBg" data-control="Shared/Row" style="overflow:hidden !important;">
                <div class="container">
                    <div class="row lineContinue">
                        <?php
                        $ATTRACTION = new Attraction(NULL);
                        foreach ($ATTRACTION->all() as $key => $attraction) {
                            if ($key < 6) {
                                if ($key % 2 == 0) {
                                    ?>
                                    <div class="col-md-6 col-sm-6 text-left content-banner-lite delay-1 appear des-content-bottom" data-control="UI002_Content_Banner_lite"  >
                                        <div class="contentBanner contentBanner-left">
                                            <a href="view-things-to-do.php?id=<?php echo $attraction['id'] ?>">  
                                                <div class="contentBanner_image">
                                                    <img alt="image" src="upload/attraction/<?php echo $attraction['image_name'] ?>" class="min_img ">  
                                                </div>
                                            </a> 
                                            <div class="contentBanner_content bg_white">
                                                <a href="view-things-to-do.php?id=<?php echo $attraction['id'] ?>"> <h5 class="Default-clr-hvr color-black">
                                                        <?php echo $attraction['title'] ?>
                                                    </h5>
                                                </a>
                                                <div class="shortDescription_container text-justify">
                                                    <?php echo substr($attraction['short_description'], 0, 120) . '....' ?>
                                                </div>
                                                <div class="cruise-btns pull-right">
                                                    <a href="view-things-to-do.php?id=<?php echo $attraction['id'] ?>" class="rbutton transparent">DETAILS</a>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } else { ?>
                                    <div class="col-md-6 col-sm-6 text-left content-banner-lite delay-0 appear" data-control="UI002_Content_Banner_lite">
                                        <div class="contentBanner contentBanner-right">
                                            <a href="view-things-to-do.php?id=<?php echo $attraction['id'] ?>"> 
                                                <div class="contentBanner_image">
                                                    <img alt="image" src="upload/attraction/<?php echo $attraction['image_name'] ?>" class="min_img">  
                                                </div></a>
                                            <div class="contentBanner_content bg_white">

                                                <a href="view-things-to-do.php?id=<?php echo $attraction['id'] ?>">  
                                                    <h5 class="Default-clr-hvr color-black">
                                                        <?php echo $attraction['title'] ?>
                                                    </h5>
                                                </a>
                                                <div class="shortDescription_container text-justify">
                                                    <?php echo substr($attraction['short_description'], 0, 120) . '....' ?>
                                                </div>
                                                <div class="cruise-btns pull-right">
                                                    <a href="view-things-to-do.php?id=<?php echo $attraction['id'] ?>" class="rbutton transparent">DETAILS</a>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                        }
                        ?>
                        <div class="col-md-12 btn-right"  > 
                            <a href="things-to-do.php" class=" btn btn-warning pull-right">View All</a>

                        </div>
                    </div>  

                </div> 
            </div>
        </section>

        <section id="reivew" class="customer-review section-padding-comment">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title ">
                            <h2>Words Of Our Customers</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-list owl-carousel">
                    <!-- START SINGLE REVIEW DESIGN AREA -->
                    <?php
                    $COMMENT = new Comments(NULL);
                    foreach ($COMMENT->activeComments() as $comments) {
                        ?>
                        <div class="single-review item">
                            <div class="cusreview-ltextimg">
                                <span class="tip tip-down"></span>
                                <div class="single-review-des">
                                    <p> <?php echo $comments['comment'] ?></p>
                                </div>

                            </div>
                            <div class="cusreview-details">
                                <img class="reviewimg" src="upload/comments/<?php echo $comments['image_name'] ?>"  >
                                <h4 class="name-customer pull-left m-comment"  ><?php echo $comments['name'] ?></h4>
    <!--                                <h6 class="cutomer-loc"><?php echo $comments['title'] ?></h6> -->
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
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
        <script src="assets/js/venobox.min.js"></script> 
        <!-- scripts js -->
        <script src="assets/js/scripts.js"></script> 
        <script src="assets/js/simple-lightbox.min.js" type="text/javascript"></script> 

        <script src="slider/slick.min.js" type="text/javascript"></script>        
        <script src="slider/custom.js" type="text/javascript"></script>



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
    </body>

</html>