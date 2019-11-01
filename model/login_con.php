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