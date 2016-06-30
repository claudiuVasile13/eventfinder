<?php

/*
 * Description of loginClass
 *
 * @author TTraian
 */

require_once __DIR__."/../../config/dbOperations.php";
require_once __DIR__."/hashClass.php";

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
                    loginClass::setCookie($this->email);
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
    static function setCookie($email) {
 
        $tokenData = self::resetToken();  //get a random token and its hash
        
        $validator = openssl_random_pseudo_bytes(22); //generate a unique random validator
        $validatorHash = hash("sha256", $validator);    // hashing validator
        
        $dbOpp = new dbOperations();
        $dbOpp->connection();                 //connect to database
        $userID = $dbOpp->select("users", "ID", "WHERE user_email='$email'");   //select id by user email

        $dbOpp->insert("auth_tokens", "user_id, token, validator", "'" . $userID[0]['ID'] . "','" . $tokenData['tokenHash'] . "', '$validatorHash'");
        
        setcookie("token", $tokenData["token"], time() + (3600), "/");    //set token cookie
        setcookie("validator", $validator, time() + (3600), "/");         //set validator cookie
    }

    static function validateCookie() {
        if(isset($_COOKIE["validator"]) && isset($_COOKIE["token"])){
            $validator = $_COOKIE["validator"];
            $validatorHash = hash("sha256", $validator);
//            var_dump($validatorHash);
//            die();
            $token = $_COOKIE["token"];
            $dbOpp = new dbOperations();
            $dbOpp->connection();
            $results = $dbOpp->select("auth_tokens", "*", "WHERE validator='$validatorHash'");
            if(count($results)){
                $tokenHash = hash("sha256", $token);
                if(hash_equals($results[0]["token"], $tokenHash)){
                    $tokenData = self::resetToken();
                    $dbOpp->update("auth_tokens","token='" . $tokenData['tokenHash'] . "'", "WHERE id='" . $results[0]['id'] . "'");  //update with new hashed token
                    setcookie("token", $tokenData['token'], time() + (3600), "/");
                }
                else {
                    unset($_COOKIE["token"]);
                    setcookie("token", "", -1, "/");
                    unset($_COOKIE["validator"]);
                    setcookie("validator", "", -1, "/");
                    header("Location: http://localhost/eventfinder/view/login.php?hack=true");
                }
            }
            else {
                header("Location: ../../view/login.php");
            }
        }
        else { 
            header("Location: ../../view/login.php");
        }
    }
    
    static function resetToken() {
        $token = openssl_random_pseudo_bytes(22); //generate random token
        $tokenHash = hash("sha256", $token); //hashing token
        $tokenData = ["token"=>$token, "tokenHash"=>$tokenHash];
        return $tokenData;
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

