<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 10/24/2019
 * Time: 4:22 PM
 */
?>
<?php
if(isset($_POST["submit"])){

    $to = "olayemiladipo@gmail.com";
    $name=$_POST["name"];
    $from=$_POST["email"];
    $subject=$_POST["subject"];
    $msg=$_POST["msg"];
    $headers = "From: $from";

    mail($to,$subject,$msg,$headers);
    echo "Email successfully sent.";
}
?>
