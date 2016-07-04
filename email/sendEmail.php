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
            $mail->Username = "eventfinderInc@gmail.com";
            $mail->Password = "our_business_2016";
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                );
            $mail->setFrom($email);
            $mail->addAddress($email);
            $mail->addReplyTo($email, "Replay");
            $mail->Subject = "Change password - Eventfinder";
            $token = random_int(0,100000000000000);
            $link = "<a href='http://localhost/eventfinder/view/newPass.php?recoverToken=" . $token . "'>Click here for new password</a>";

            $dbOpp = new dbOperations();
            $dbOpp->connection();
            $dbOpp->update("users", "recover_token='$token'", "WHERE user_email='$email'");

            $mail->Body = wordwrap($link);
            $mail->isHTML(true);
            
            if (!$mail->send()) {
                return 0;
            } else {
                return 1;
            }
        }
    }

}

$sendEmail = new sendEmail();
