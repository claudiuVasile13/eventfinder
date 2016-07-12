<?php

/**
 * Description of newPassClass
 *
 * @author TTraian
 */
require_once __DIR__ . '/../../config/dbOperations.php';
require_once __DIR__ . '/../classes/hashClass.php';

class newPassClass {

    private $pass,
            $repass,
            $token;

    function newPass() {
        if (isset($_GET["recoverToken"]) && isset($_POST["pass"]) && isset($_POST["repass"])) {
            $this->pass = $_POST["pass"];
            $this->repass = $_POST["repass"];
            $this->token = $_GET["recoverToken"];
            if (strlen($this->pass) >= 6 && strlen($this->repass) >= 6) {
                if ($this->pass === $this->repass) {
                    $dbOpp = new dbOperations();
                    $dbOpp->connection();

                    $hashPass = new hashClass();
                    $hash = $hashPass->passHash($this->pass);
                    $dbOpp->update("users", "user_password='$hash', recover_token='null'", "WHERE recover_token='$this->token'");
                    header("Location: ../../login.php");
                } else
                    echo "al treilea if";
            } else
                echo "al doilea if";
        }
        else {
            echo "primu if";
            var_dump($_POST);
            var_dump($_GET);
        }
    }

}

$newPass = new newPassClass();
$newPass->newPass();
