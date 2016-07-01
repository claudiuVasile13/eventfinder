<?php

require_once __DIR__ . "/../../email/sendEmail.php";
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $e = $sendEmail->sendMessage($email);
    var_dump($e);
    
}
else echo "eroare";




