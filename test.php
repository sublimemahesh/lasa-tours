<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <style>
         

            .overlay1 {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0, 0.9);
                overflow-x: hidden;
                transition: 0.5s;
            }

            .overlay1-content {
                position: relative;
                top: 25%;
                width: 100%;
                text-align: center;
                margin-top: 30px;
            }

            .overlay1 a {
                padding: 8px;
                text-decoration: none;
                font-size: 36px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .overlay1 a:hover, .overlay1 a:focus {
                color: #f1f1f1;
            }

            .overlay1 .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
            }

            @media screen and (max-height: 450px) {
                .overlay1 a {font-size: 20px}
                .overlay1 .closebtn {
                    font-size: 40px;
                    top: 15px;
                    right: 35px;
                }
            }
        </style>
    </head>
    <body>

        <div id="myNav" class="overlay1">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay1-content">
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
        </div>

        <h2>Fullscreen Overlay Nav Example</h2>
        <p>Click on the element below to open the fullscreen overlay navigation menu.</p>
        <p>In this example, the navigation menu will slide in, from left to right:</p>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>

    </body>
</html>
