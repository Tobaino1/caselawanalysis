<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/24/2019
 * Time: 6:32 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/24/2019
 * Time: 6:08 PM
 */
?>
<?php
//Start session
session_start();
?>

<?php
$con = mysqli_connect("localhost", "root", "", "case_law_analysis");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

if (isset($_POST['login'])) {
    $nba_no = mysqli_real_escape_string($con, $_POST['nba_no']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM subscription WHERE nba_no='$nba_no' and password='$password'");
    $row = mysqli_fetch_array($query);
    $num_row = mysqli_num_rows($query);

    if ($num_row > 0) {
        header('location:../views/welcome_sub.php');
//                            echo'tobi this function is okay';
    } else {
//        header('location:../views/error.php');
        echo "Error! You are required to login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case law analysis system ! welcome subscribers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">


    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="../index.html">case law analysis system</a>
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--<span class="oi oi-menu"></span> Menu-->
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
                <!--                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>-->
                <li class="nav-item active"><a href="./logout.php" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Subscriber's page</h1>
                <!--                <p class="breadcrumbs"><span class="mr-2"><a href="../index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>-->
            </div>
        </div>
    </div>
</section>


<section class="ftco-section contact-section">
    <div class="container">
        <h2 style="color: black" align="left">Select desired operation below</h2>

        <div class="row block-9"> <h4 align="center">
                <a href="./supreme.php">Supreme Court </a>
                <br>
                <a href="#"> Appeal Courts verdicts </a>
                <br>
                <a href="#"> Federal high court verdicts</a>
                <br>
                <a href="#"> State / Shariah court verdicts </a>
                <br>
                <a href="#"> Magistrate court verdicts </a>

            </h4>
            <div class="col-lg-6 order-md-last d-flex">

            </div>

            <div class="col-lg-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <!--<h2 class="ftco-heading-2">Whisper</h2>-->
                    <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Courts</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Supreme court</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Court of Appeal</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Federal High court</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>High  / Shariah court</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Magistrate court</a></li>
                        <!--<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fire Accident</a></li>-->
                        <!--<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>-->
                        <!--<li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li>-->

                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Availability</h2>
                    <div class="opening-hours">
                        <h4>Everyday</h4>
                        <p class="pl-3">
                            <span>24 hours / 7 days</span>
                            <!--<span>Saturday : 9am to 17 pm</span>-->
                        </p>
                        <!--<h4>Vacations:</h4>-->
                        <!--<p class="pl-3">-->
                        <!--<span>All Sunday Days</span>-->
                        <!--<span>All Official Holidays</span>-->
                        <!--</p>-->
                    </div>
                </div>
            </div>
            <!--<div class="col-md">-->
            <!--<div class="ftco-footer-widget mb-4">-->
            <!--<h2 class="ftco-heading-2">Have a Questions?</h2>-->
            <!--<div class="block-23 mb-3">-->
            <!--<ul>-->
            <!--<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>-->
            <!--<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>-->
            <!--<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design by <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.sparklegrid.tech" target="_blank">Tobaino (Sparklegrid)</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>

</body>
</html>