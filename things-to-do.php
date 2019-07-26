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
        <meta name="description" content="Sri Lanka Lasa Tours is Reputable and trustworthy holiday partner in Sri Lanka. You can plan your dream vacation the way you want it to be with our Lasa Tours package options. Our chauffeurs are specialist in Russian languages.">
        <meta name="keywords" content="sri lanka round tours, one day tours, tour arrangement, sri lanka lasa tours, lasa tours tour packages, about sri lanka lasa tours, best tour guide in sri lanka,  ">
        <meta name="author" content="Synotec Holdings">
        <!-- PAGE TITLE -->
        <title>Things to Do | Sri Lanka Lasa Tours</title>
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
        <link href="slider/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

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
                            <i class="fa fa-angle-double-right"></i> Thing to do
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
                        $ACTIVITY = new Activities(NULL);
                        foreach ($ACTIVITY->all() as $activity) {
                            ?>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item cat-2 cat-4">
                                <div class="product-thumb">
                                    <a href="view-things-to-do.php?id=<?php echo $activity['id'] ?>">  <div class="image">
                                            <img src="upload/activity/<?php echo $activity['image_name'] ?>"   class="img-responsive" />
                                            <div class="hoverbox link-center">
                                                <div class="icon_plus" aria-hidden="true"></div>
                                            </div> 
                                        </div>
                                    </a>
                                    <div class="caption">
                                        <div class="inner">
                                            <a href="view-things-to-do.php?id=<?php echo $activity['id'] ?>">
                                                <h4 class="color-black">
                                                    <?php
                                                    $letters = strlen($activity["title"]);
                                                    if ($letters > 20) {
                                                        ?>
                                                        <?php echo substr($activity["title"], 0, 15) . '....'; ?>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <?php echo $activity['title'] ?>
                                                        <?php
                                                    }
                                                    ?>
                                                </h4> 
                                            </a>
                                            <p class="text-justify">
                                                <?php echo substr($activity['short_description'], 0, 150) ?>...
                                            </p>
                                        </div>
                                        <div class="text-left">
                                            <div class="border-left-btm col-md-12 no-padding padding_none">  
                                                <div class=" text-center no-padding padding_none">
                                                    <a href="view-things-to-do.php?id=<?php echo $activity['id'] ?>">   <button type="button"  >View More </button></a>
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
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element'); //remove the layout
            }
        </script>
            <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>


                <script type="text/javascript">
            function triggerHtmlEvent(element, eventName) {
            var event;                 if (document.createEvent) {
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