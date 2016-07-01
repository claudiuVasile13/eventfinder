<?php

/**
 * Description of sendEmail
 *
 * @author TTraian
 */

require_once __DIR__ . "/../auth/classes/validationClass.php";
require_once __DIR__ . "/PHPMailer-master/class.phpmailer.php";
require_once __DIR__ . "/../config/dbOperations.php";


class sendEmail {
    
    public function sendMessage($email) {
        
        $validare = new validationClass();
        if ($validare->checkEmail($email)) {
            
            $mail = new PHPMailer();
            $mail->SMTPDebug = 3;
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "smtp.gmail.com";
            $mail->Username = "theblur.2015@gmail.com";
            $mail->Password = "younghermano2013";
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->setFrom($email);
            $mail->addAddress($email);
            $mail->addReplyTo($email, "Replay");
            $mail->Subject = "Change password - Eventfinder";
            $token = openssl_random_pseudo_bytes(22);
            $link = "<a target=_blank href=" .__DIR__ . "../view/newPass.php?recoverToken=". $token . ">Click here for new password</a>";
            
            $dbOpp = new dbOperations();
            $dbOpp->connection();
            $dbOpp->update("users", "recover_token='$token'", "WHERE user_email='$email'");
                
            $mail->Body = wordwrap($link);
            // var_dump($mail->send());
            // die();
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                return $email;
            } else {
                header('Location: ../view/login.php');
            }
        }
    }

}


$sendEmail = new sendEmail();
