<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/23/2019
 * Time: 12:27 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/5/2019
 * Time: 11:29 AM
 *
 */
session_start();

?>

<?php
$con = mysqli_connect("localhost", "root", "", "case_law_analysis");

//$con = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

if (mysqli_connect_errno()) {
    echo "unable to connect to db" . mysqli_connect_error();
}


$query = $con->query("select * from admin");

//while ($row = mysqli_fetch_array($query)){
$row = mysqli_fetch_array($query);
$num_row = mysqli_num_rows($query);

if ($num_row > 0) {
    $username = $row['username'];
    $password = $row['password'];

} else {
    echo 'Invalid username or password, please try again with the correct credentials ';
//    header("location: error.php"); //error page for wrong longin
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case Law Analysis | ADMIN Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/bg_1.jpg">

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
        <a class="navbar-brand" href="../index.html">Case Law Analysis System</a>
        <!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--            <span class="oi oi-menu"></span> Menu-->
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
<!--                <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>-->
                <!--                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>-->
                                <li class="nav-item"><a href="./logout.php" class="nav-link">Logout</a></li>
                <!--                <li class="nav-item active"><a href="attorneys.html" class="nav-link">Attorneys</a></li>-->
                <!--                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
                <!--                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>-->
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
                <h1 class="mb-3 bread">Admin's Page</h1>
                <div align="center"><strong><h3 style="color: white"> You are welcome Administrator:</strong> <?php echo $username; ?></h3>
                </div>

            </div>
        </div>
    </div>

    <br><br><br>
    <div align="center">
    <h3 style="color: blue">Use the form to lodge previous verdict for Supreme Court</h3>
    <form enctype="multipart/form-data" action="../model/supreme_con.php" name="form" method="post">


        <input type="text" id="case_title" name="case_title"  placeholder="CASE TITLE" size ="70" required>
        <br><br>
        <input type="text" name="court_n_address" id="court_n_address" PLACEHOLDER="COURT & ADDRESS" size="70" required>
        <br><br>
        DATE OF VERDICT
        <input type="date" id="dates" name="dates" size ="70"  required>
        <br><br>
        <input type="text" name="justice_presiding_judge" id="justice_presiding_judge"  placeholder="JUSTICE / PRESIDING JUDGE" size="70" required>
<br><br>
        <input type="text" name="suit_no" id="suit_no" PLACEHOLDER="SUIT NO" size="70" required>
        <br><br>

        <input type="text" name="plaintiff" id="plaintiff" PLACEHOLDER="PLAINTIFF" size="70" required>
        <br><br>

        <input type="text" name="defendant" id="defendant" PLACEHOLDER="DEFENDANT" size="70" required>
        <br><br>

        <input type="text" name="prosecuting_counsel" id="prosecuting_counsel" PLACEHOLDER="PROSECUTING COUNSEL" size="70" required>
        <br><br>

        <input type="text" name="defense_counsel" id="defense_counsel" PLACEHOLDER="DEFENSE COUNSEL" size="70" required>
        <br><br>

        <input type="text" name="documents_submitted" id="documents_submitted" PLACEHOLDER="DOCUMENTS SUBMITTED" size="70" required>
        <br><br>

        <textarea name="judgement" cols="70" rows="15" align="justify" id="judgement"  placeholder="JUDGEMENT / VERDICT"  required></textarea>
        <br><br>


        <input type="reset" name="reset" id="submit" value="reset" />

        <input type="submit" name="submit" id="submit" value="Submit" />

        <br>
    </form>
    </div>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Case Law Analysis System</h2>
                        <p>A project by Ladipo Olayemi, under the Supervision of Akinuwesi Moboluwaji (PhD)</p>
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