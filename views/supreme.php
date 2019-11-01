<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/24/2019
 * Time: 2:44 PM
 */
$con = mysqli_connect("localhost", "root", "", "case_law_analysis");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

?>
<?php
//Start session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case law analysis system ! supreme</title>
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
        <h2 style="color: black" align="left">PREVIOUS VERDICTS (SUPREME COURT)</h2>

        <?php
        $query = $con->query("select * from supreme order by id desc limit 10");
        while ($row = mysqli_fetch_array($query)) {
            $case_title=$row['case_title'];
            $court_n_address=$row['court_n_address'];
            $dates=$row['dates'];
            $justice_presiding_judge=$row['justice_presiding_judge'];
            $suit_no=$row['suit_no'];
            $plaintiff=$row['plaintiff'];
            $defendant=$row['defendant'];
            $prosecuting_counsel=$row['prosecuting_counsel'];
            $defense_counsel=$row['defense_counsel'];
            $documents_submitted=$row['documents_submitted'];
            $judgement=$row['judgement'];    }
        ?>
        <div>
<!--            <p align="center"> Possible outcome of cases based on defined rules and logic</p>-->

                <tr>
                    <td><strong style="color: black">  CASE TITLE: <?php echo $case_title; ?> </strong></td><br>
                    <td><strong style="color: black"> COURT:  <?php echo $court_n_address; ?> </strong></td><br>
                    <td><strong style="color: black"> DATE:  <?php echo $dates; ?></strong> </td><br>
                    <td><strong style="color: black"> JUSTICE / PRESIDING JUDGE:  <?php echo $justice_presiding_judge; ?> </strong></td><br>
                    <td><strong style="color: black"> SUIT NO: <?php echo $suit_no; ?>  </strong></td><br>
                    <td><strong style="color: black"> PLAINTIFF: <?php echo $plaintiff; ?> </strong></td><br>
                    <td><strong style="color: black"> PROSECUTING COUNSEL: <?php echo $prosecuting_counsel; ?> </strong></td><br>
                    <td><strong style="color: black"> DEFENSE COUNSEL: <?php echo $defense_counsel; ?> </strong></td><br>
                    <td><strong style="color: black"> DOCUMENTS SUBMITTED: <?php echo $documents_submitted; ?> </strong></td><br>
                    <td><strong style="color: black"> JUDGEMENT: <?php echo $judgement; ?> </strong></td><br>

                    <br><br><br><br>
                </tr>

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