<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$TOUR_PACKAGES = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $TOUR_PACKAGES = new TourPackage($id);
}
?>
<html lang="en">

    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sri Lanka Lasa Tours is Reputable and trustworthy holiday partner in Sri Lanka. You can plan your dream vacation the way you want it to be with our Lasa Tours package options. Our chauffeurs are specialist in Russian languages.">
        <meta name="keywords" content="sri lanka round tours, one day tours, tour arrangement, sri lanka lasa tours, lasa tours tour packages, about sri lanka lasa tours, best tour guide in sri lanka, book now for inquiry, tailor-made tours ">
        <meta name="author" content="Synotec Holdings">
        <!-- PAGE TITLE -->
        <title>Book Now | Sri Lanka Lasa Tours</title>
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
        <link href="slider/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/media-queries.css"> 
        <link href="assets/css/datepicker.css" rel="stylesheet" type="text/css"/>
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
                            <i class="fa fa-angle-double-right"></i>Book Now
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner -->
        <!-- START CONTACT DESIGN AREA -->
        <section id="cruise" class="cruise-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="booking_detail white-box animate-reveal">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name *" name="txtFullName" id="txtFullName" required="required">
                                        <div class="col-lg-12">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email *" required="required">
                                        <div class="col-lg-12">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number *" id="txtPhone" name="txtPhone" required="required">
                                        <div class="col-lg-12">
                                            <span id="spanPhone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"id="txtCountry" name="txtCountry"  placeholder="Country *" required="required">
                                        <div class="col-lg-12">
                                            <span id="spanCountry"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--                            <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control input-validater" placeholder="Arrival date *" id="txtCheckIn" name="txtCheckIn" required="required" value="<?php echo $visitor_check_in['visitor_check_in'] ?>"><i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <span id="spanCheckIn"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control input-validater" placeholder="Departure date *" id="txtCheckOut" name="txtCheckOut"required="required" ><i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <span id="spanCheckOut"></span>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-6">
                                    <input value="" type="text" name="txtAdate" id="txtAdate"  placeholder="Arrival date *" class="form-control " value="<?php echo $visitor_check_in['Arrival_date'] ?>">
                                    <span id="spanAdate"></span>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <input value="" type="text" name="txtDdate" id="txtDdate" placeholder="Departure date *" class="form-control ">
                                    <span id="spanDdate"></span>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Num of  Adults*" min="1" id="txtAdult" name="txtAdult" required="required">

                                    </div>
                                    <div class="col-lg-12">
                                        <span id="spanAdult"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Num of Child *" min="1" id="txtChild" name="txtChild" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="select_booking" id="txtTour" name="txtTour">
                                        <option value="">
                                            -- Please Select Your Tour Package --
                                        </option>
                                        <?php
                                        $TOURPACKAGE = new TourPackage(NULL);
                                        foreach ($TOURPACKAGE->all() as $tour_package) {
                                            if ($tour_package['id'] == $TOUR_PACKAGES->id) {
                                                ?>
                                                <option value="<?php echo $tour_package['title'] ?>" selected="">
                                                    <?php echo $tour_package['title'] ?>
                                                </option>
                                                <?php
                                            } else {
                                                ?>
                                                <option value="<?php echo $tour_package['title'] ?>">
                                                    <?php echo $tour_package['title'] ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                                  
                                    </select>
                                     <span id="spanTour"></span>
                                </div>
                                <!--                                <div class="col-md-6">
                                                                    <select class="select_booking" id="txtAirport" name="txtAirport">
                                                                        <option selected="selected">-- Airport Pick up --</option>
                                                                        <option value="yes"> Yes </option>
                                                                        <option value="no"> No </option>
                                
                                                                    </select>
                                                                    <div class="col-lg-12">
                                                                        <span id="spanAirport"></span>
                                                                    </div>
                                                                </div>-->
                            </div>
                            <div class="row" style="margin-top: 25px;">
                                <div class="col-md-12">
                                    <textarea id="txtMessage" name="txtMessage" rows="4" class="form-control" required placeholder="Your Message..." ></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <span id="spanMessage"></span>
                                </div> 
                            </div>
                            <div class="row" style="margin-top: 25px;">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="comment">Security Code:</label>
                                        <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                        <span id="capspan" ></span>
                                    </div>                                                
                                </div>                                                

                                <div class="col-lg-4" style="margin-top: 25px;">
                                    <div class="form-group">
                                        <?php include("./contact-form/captchacode-widget.php"); ?>
                                    </div>                                                
                                </div>
                                <div class="col-md-4   Default-clr-hvr pull-left" style="margin-top: 25px;" >
                                    <input type="submit" value="send Now" name="submit" id="btnSubmit" class="btn btn-warning"  /> 
                                </div>
                            </div> 
                            <div id="dismessage" align="center"></div>
                        </div> 
                    </div> 
                </div>
            </div>
        </section>
        <!-- / END CONTACT DESIGN AREA -->

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
        <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
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
        <script src="booking-form/scripts.js" type="text/javascript"></script>
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
                                triggerHtmlEvent(select, 'change            ');
                      }
            });
            });

       </script>
            <script src="js/jque            ry.datetimepicker.full.min.js" type="text/javascript"></script>

            <script type="text/javascript">

            $(function () {

                /* global setting */
                var datepickersOpt = {
                        dateFormat: 'yy-mm-dd',
                        minDate: 0
        }
        
        $("#txtAdate").datepicker($.extend({
                        onSelect: function () {
                                var minDate = $(this).datepicker('getDate');
                                minDate.setDate(minDate.getDate() + 1); //add two days
                                $("#txtDdate").datepicker("option", "minDate", minDate);
        },
        dateFormat: 'yyyy-mm-dd'
        }, datepickersOpt));
        
        $("#txtDdate").datepicker($.extend({
                                onSelect: function () {
                                    var maxDate = $(this).datepicker('getDate');
                                    maxDate.setDate(maxDate.getDate() - 1);
                                    $("#txtAdate").datepicker("option", "maxDate", maxDate);
                            },
                            dateFormat: 'yyyy-mm-dd'
                            }, datepickersOpt));
                            });
                        
            </script>
        </b        ody>

</html>