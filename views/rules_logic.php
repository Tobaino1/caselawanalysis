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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case Law Analysis | Rules & Logic</title>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
<!--                <li class="nav-item"><a href="practice-areas.html" class="nav-link">Practice Areas</a></li>-->
<!--                <li class="nav-item"><a href="attorneys.html" class="nav-link">Attorneys</a></li>-->
<!--                <li class="nav-item"><a href="login.php" class="nav-link">Blog</a></li>-->
                <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
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
                <h1 class="mb-3 bread">Rules & Logic</h1>
<!--                <p class="breadcrumbs"><span class="mr-2"><a href="../index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>-->
            </div>
        </div>
    </div>
</section>

<?php

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM signup WHERE username='$username' and password='$password'");
    $row = mysqli_fetch_array($query);
    $num_row = mysqli_num_rows($query);

    if ($num_row > 0) {
        header('location:../views/rules_logic.php');
//                            echo'tobi this function is okay';
    } else {
        header('location:../views/error.php');
//        echo "Error! Wrong Login Credentials";
    }
}
?>
<?php
//$query = $con->query("select * from signup WHERE username='$username' and password='$password' ");
//while ($row = mysqli_fetch_array($query)) {
//    $image = $row['image'];
//    $username = $row['username'];
//    $email = $row['email'];
//}
//?>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <?php
                $query = $con->query("select * from signup");
                while ($row = mysqli_fetch_array($query)) {
                    $image = $row['image'];
                     $username = $row['username'];
                        $email = $row['email'];
                }
                ?>
<!--                <h3 class="h3"><strong>You are welcome! </strong> </h3>-->

<!--                                <img src="signup_images/--><?php //echo $image ?><!--" width="60" height="50">-->
                <h2 class="h3"><strong>You are welcome! </strong> <?php echo $username; ?> , <?php echo $email; ?></h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
<!--                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>-->
            </div>
            <?php
            $query = $con->query("select * from rules_logic order by id desc limit 10");
            while ($row = mysqli_fetch_array($query)) {
                $offence = $row['offence'];
                $punishment_prescribed_for_offence = $row['punishment_prescribed_for_offence'];
                $nature_of_offence = $row['nature_of_offence'];
            }
            ?>
            <div>
                <p align="center"> Possible outcome of cases based on defined rules and logic</p>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                    <tr>
                        <th width="1%" align="center">OFFENCE</th>
                        <th width="15%" align="center">PUNISHMENT PRESCRIBED FOR OFFENCE</th>
                        <th width="1%" align="center">NATURE OF OFFENCE</th>

                    </tr>
                    <tr>
                        <td>  <?php echo $offence; ?> </td>
                        <td>&nbsp;<?php echo $punishment_prescribed_for_offence; ?> </td>
                        <td>&nbsp;<?php echo $nature_of_offence; ?> </td>


                    </tr>
                </table>
            </div>
            <div class="col-md-3">
<!--                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>-->
            </div>
            <div class="col-md-3">
<!--                <p><span>Website</span> <a href="#">yoursite.com</a></p>-->
            </div>
        </div>
<!--        <div class="row block-9">-->
<!--            <div class="col-lg-6 order-md-last d-flex">-->
<!--                <form action="#" class="bg-light p-5 contact-form">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" placeholder="Your Name">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" placeholder="Your Email">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" class="form-control" placeholder="Subject">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">-->
<!--                    </div>-->
<!--                </form>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="col-lg-6 d-flex">-->
<!--                <div id="map" class="bg-white"></div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>



<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Whisper</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Practice Areas</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Family Law</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Business Law</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Insurance Law</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Drug Offenses</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fire Accident</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Business Hours</h2>
                    <div class="opening-hours">
                        <h4>Opening Days:</h4>
                        <p class="pl-3">
                            <span>Monday – Friday : 9am to 20 pm</span>
                            <span>Saturday : 9am to 17 pm</span>
                        </p>
                        <h4>Vacations:</h4>
                        <p class="pl-3">
                            <span>All Sunday Days</span>
                            <span>All Official Holidays</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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