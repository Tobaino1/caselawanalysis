<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/23/2019
 * Time: 1:00 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 9/6/2019
 * Time: 6:27 PM
 */
?>
<?php
//Start session
session_start();
?>
<?php
$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$occupation = $_POST['occupation'];

$uploads_dir = 'signup_images/';
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];


move_uploaded_file($temp, $uploads_dir . basename($image));


$conn = mysqli_connect("localhost", "root", "", "case_law_analysis");

//$conn = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO signup(surname, othernames, username, password, email, phone, occupation, image) VALUES 
('$surname', '$othernames', '$username','$password','$email','$phone', '$occupation','$image')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
//    header("Location: success.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
