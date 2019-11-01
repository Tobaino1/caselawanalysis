<?php

session_start();
?>
<?php
$case_title=$_POST['case_title'];
$court_n_address=$_POST['court_n_address'];
//$dates=$_POST['dates'];
$justice_presiding_judge=$_POST['justice_presiding_judge'];
$suit_no=$_POST['suit_no'];
$plaintiff=$_POST['plaintiff'];
$defendant=$_POST['defendant'];
$prosecuting_counsel=$_POST['prosecuting_counsel'];
$defense_counsel=$_POST['defense_counsel'];
$documents_submitted=$_POST['documents_submitted'];
$judgement=$_POST['judgement'];

// Create connection
$conn = mysqli_connect("localhost", "root", "", "case_law_analysis");
//$conn = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO supreme(case_title, court_n_address) VALUES 
('$case_title', '$court_n_address','$justice_presiding_judge')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
//    header("Location: success_news.php"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
