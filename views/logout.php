<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/24/2019
 * Time: 6:20 PM
 */
?>
<?php
session_start();
session_destroy();

header('location: ../index.html');
?>