<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/24/2019
 * Time: 4:46 PM
 */
?>
<?php
//Start session
session_start();
?>
<?php
$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$nba_no = $_POST['nba_no'];
$chamber = $_POST['chamber'];

$uploads_dir = 'subscription_images/';
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];


move_uploaded_file($temp, $uploads_dir . basename($image));


$con = mysqli_connect("localhost", "root", "", "case_law_analysis");

//$conn = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if ($con === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO subscription(surname, othernames,email, phone, password, nba_no, chamber, image) VALUES 
('$surname', '$othernames','$email','$phone', '$password', '$nba_no','$chamber','$image')";


if (mysqli_query($con, $sql)) {
    echo "New record created successfully ";
            header('location:../views/subscription_payment.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>

