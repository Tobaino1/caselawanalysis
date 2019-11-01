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
        header('location:../views/error.php');
//        echo "Error! Wrong Login Credentials";
    }
}
?>
