<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$ACTIVITYS = new Activities($id);
?>
<html lang="en">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="description" content="<?php echo $ACTIVITYS->short_description; ?>Sri Lanka Lasa Tours is Reputable and trustworthy holiday partner in Sri Lanka. You can plan your dream vacation the way you want it to be with our Lasa Tours package options. Our chauffeurs are specialist in Russian languages.">
        <meta name="keywords" content="<?php echo $ACTIVITYS->title; ?>, sri lanka round tours, one day tours, tour arrangement, sri lanka lasa tours, lasa tours tour packages, about sri lanka lasa tours, best tour guide in sri lanka,  ">
        <meta name="author" content="Synotec Holdings">
        <!-- PAGE TITLE -->
        <title>Things to do - <?php echo $ACTIVITYS->title ?> | Sri Lanka Lasa Tours</title>
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <!-- ALL GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,500,900" rel="stylesheet">
        <!-- FONT AWESOME CSS -->
        <link rel="stylesheet" href="assets/fonts/line-awesome-font-awesome.min.css">
        <!-- OWL CAROSEL CSS -->
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
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
        <link href="slider/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>


        <?php
        include 'header.php';
        ?>
        <div class="inner-page-header">
            <img src="assets/images/bg/aboutbg.jpg" alt="Inner Page Header" class="full-width">
            <div class="title-breadcrumb">
                <div class="container">

                    <div class="site-page-breadcrumb">
                        <span>
                            <a style="" href="index.php">Home </a> 
                            <a style="" href="things-to-do.php"> <i class="fa fa-angle-double-right"></i> Thing to do </a>
                            <i class="fa fa-angle-double-right"></i> <?php echo $ACTIVITYS->title ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <section id="tour" class="tour-area section-paddings">
            <div class="container">
                <div class="container pagecontainer offset-0">
                    <!-- SLIDER -->
                    <div class="row  ">
                        <div class="col-xl-8 col-lg-8 col-md-8 details-slider">
                            <div id="c-carousel">
                                <div id="wrapper">
                                    <div id="inner">
                                        <div id="caroufredsel_wrapper2">
                                            <div id="carousel">
                                                <?php
                                                $ACTIVITY_PHOTO = new ActivitiesPhoto(NULL);
                                                foreach ($ACTIVITY_PHOTO->getActivitiesPhotosById($id) as $activity_photo) {
                                                    ?>
                                                    <img src="upload/activity/gallery/<?php echo $activity_photo['image_name'] ?>" alt="" />
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div id="pager-wrapper">
                                            <div id="pager">
                                                <?php
                                                $ACTIVITY_PHOTO = new ActivitiesPhoto(NULL);
                                                foreach ($ACTIVITY_PHOTO->getActivitiesPhotosById($id) as $activity_photo) {
                                                    ?>
                                                    <img src="upload/activity/gallery/thumb/<?php echo $activity_photo['image_name'] ?>" width="120" height="68" alt="" />
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button id="prev_btn2" class="prev2"><img src="assets/images/spacer.png" alt="" /></button>
                                    <button id="next_btn2" class="next2"><img src="assets/images/spacer.png" alt="" /></button>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-4">
                            <div class="right-sidebar sidebar">
                                <div class="sidebar-block widget">
                                    <div class="section-title ">
                                        <h2>Other Thing to do </h2>
                                        <div class="title-separator-outer "> 
                                            <div class="title-separator bg-primary style-liner"></div> 
                                        </div>
                                    </div>
                                    <div class="widget-popular">
                                        <?php
                                        $ACTIVITY = new Activities(NULL);
                                        foreach ($ACTIVITY->all() as $key => $activity) {
                                            if ($key < 5) {
                                                ?>

                                                <div class="post-small clearfix">
                                                    <a class="post-img black-hover" href="view-things-to-do.php?id=<?php echo $activity['id'] ?>">
                                                        <img class="img-responsive radius-0" src="upload/activity/<?php echo $activity['image_name'] ?>" alt="">

                                                    </a>
                                                    <div class="post-desc">
                                                        <a  href="view-things-to-do.php?id=<?php echo $activity['id'] ?>"> <h4><?php echo $activity['title'] ?></h4></a>
                                                        <?php echo substr($activity['short_description'], 0, 40) ?>.. 
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>

                                        <a href="things-to-do.php" class=" btn btn-warning pull-left">View All</a>

                                    </div>
                                </div> 
                            </div>        
                        </div>
                    </div>
                </div>
                <!-- END OF container-->
                <div class="container ">
                    <div class="row">  
                        <div class="col-md-12 pagecontainer2 act-details activity-tabs">
                            <h2><?php echo $ACTIVITYS->title ?> </h2>
                            <?php echo $ACTIVITYS->description ?> 
                        </div>
                    </div>
                </div>
                <!-- END OF CONTENT -->
            </div>
        </section>

        <?php
        include 'footer.php';
        ?>
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
        <!-- MAGNIFICANT JS -->
        <script src="assets/js/isotope.min.js"></script>
        <!-- STEALLER JS -->
        <script src="assets/js/jquery.stellar.min.js"></script>
        <!-- MAGNIFICANT JS -->
        <script src="assets/js/isotope.min.js"></script>
        <!--Image Loded JS-->
        <script src="assets/js/images-loded.min.js"></script>
        <!-- jquery.carouFredSel -->
        <script src="assets/js/jquery.carouFredSel.js"></script>
        <!-- WOW JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- CONTCAT FORM JS -->
        <script src="assets/js/form-contact.js"></script>
        <script src="assets/js/venobox.min.js"></script>
        <!-- scripts js -->
        <script src="assets/js/scripts.js"></script> 
        <script>


            $(function () {
                var $carousel = $('#carousel'),
                        $pager = $('#pager');

                function getCenterThumb() {
                    var $visible = $pager.triggerHandler('currentVisible'),
                            center = Math.floor($visible.length / 2);

                    return center;
                }


                $carousel.carouFredSel({
                    responsive: true,
                    items: {
                        visible: 1,
                        width: 800,
                        height: (500 / 800 * 100) + 'px'
                    },
                    scroll: {
                        fx: 'crossfade',
                        onBefore: function (data) {
                            var src = data.items.visible.first().attr('src');
                            src = src.split('http://www.shmai.com/large/').join('http://www.shmai.com/small/');

                            $pager.trigger('slideTo', ['img[src="' + src + '"]', -getCenterThumb()]);
                            $pager.find('img').removeClass('selected');
                        },
                        onAfter: function () {
                            $pager.find('img').eq(getCenterThumb()).addClass('selected');
                        }
                    },
                    prev: {
                        button: "#prev_btn2",
                        key: "left"
                    },
                    next: {
                        button: "#next_btn2",
                        key: "right"
                    },
                });
                $pager.carouFredSel({
                    width: '100%',
                    auto: false,
                    height: 120,
                    items: {
                        visible: 'odd'
                    },
                    onCreate: function () {
                        var center = getCenterThumb();
                        $pager.trigger('slideTo', [-center, {duration: 0}]);
                        $pager.find('img').eq(center).addClass('selected');
                    }
                });
                $pager.find('img').click(function () {
                    var src = $(this).attr('src');
                    src = src.split('http://www.shmai.com/small/').join('http://www.shmai.com/large/');
                    $carousel.trigger('slideTo', ['img[src="' + src + '"]']);
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