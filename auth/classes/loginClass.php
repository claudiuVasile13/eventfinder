<?php
/*
 * Description of loginClass
 *
 * @author TTraian
 */

require '../../config/dbOperations.php';

class loginClass {
    
    private $email;
    private $password;
    
    function login(){
//        get data from POST
      $this->email = $_POST["email"];
      $this->password = $_POST["pass"];
//Connect to database
      $dbOpp =  new dbOperations();
      $dbOpp->connection();
      
// query database 
      $conditions = "WHERE user_email='$this->email' AND user_password='$this->password'";
      $rows = count($dbOpp->select('users','*', $conditions));
      if($rows){
          if(isset($_POST["remember"])){
                 loginClass::cookie();
      }
          header("Location: ../../view/index.php");
      }
      else{
          header("Location: ../../view/newlogin.php");
      }
    }
    
    // Create a cookie
    static function cookie(){
        $cookie_email = $_POST["email"];
        setcookie("isLoggedIn",$cookie_email, time() + (60), "/");
    }
    
}

$login = new loginClass();

