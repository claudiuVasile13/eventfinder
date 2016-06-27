<?php

/*
 * Description of loginClass
 *
 * @author TTraian
 */

require '../../config/dbOperations.php';
require '../classes/hashClass.php';

class loginClass {

    private $email;
    private $password;

    function login() {
//        get data from POST
        $this->email = $_POST["email"];
        $this->password = $_POST["pass"];
//Connect to database
        $dbOpp = new dbOperations();
        $dbOpp->connection();

// query database 
        $emailCheck = "WHERE user_email='$this->email'"; 
        $rows = $dbOpp->select('users', '*', $emailCheck);
        
        if (count($rows)) {
            
            $result = hashClass::checkPass($this->password, $rows[0]['user_password']);
            if($result) {
                //remember me
                if (isset($_POST["remember"])) {
                    loginClass::setCookie();
                } 
                else{
                    loginClass::startSession();
                }
            
                header("Location: ../../view/index.php");
            } else {
                header("Location: ../../view/login.php?pass=404");
            }
            
            
        }
        else {
            header("Location: ../../view/login.php?email=404");
        }
    }

    // Create a cookie
    static function setCookie() {
        $cookie_email = $_POST["email"];
        setcookie("isLoggedIn", $cookie_email, time() + (60), "/");
    }

    //Create a seesion
    static function startSession() {
        session_start();
        $session_data = $_POST["email"];
        $_SESSION["isLoggedIn"] = "true";
        $_SESSION["email"] = $session_data;
    }

}

$login = new loginClass();

