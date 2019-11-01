<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/24/2019
 * Time: 2:31 AM
 */
?>
<?php
$con = mysqli_connect("localhost", "root", "", "case_law_analysis");

//$con = mysqli_connect("localhost", "lagosrep_tobaino", "pass?1><m", "lagosrep_lagos_reporter");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
?>
