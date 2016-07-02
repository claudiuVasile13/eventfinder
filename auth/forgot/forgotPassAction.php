<?php

require_once __DIR__ . "/../../email/sendEmail.php";
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $value = $sendEmail->sendMessage($email);
    if($value){
        header("Location: ../../view/login.php");
    }
    else{
        header("Location: ../../view/forgotPass.php");
    }
}




