<?php 
    $connection = mysqli_connect("localhost","root",'',"project");

    if(!$connection){
        header('Location: errors.php?error=ConnectionToDataBaseFailed');
    }

    $sender_email = "emailaddress@gmail.com";
    $sender_password = "password";
?>