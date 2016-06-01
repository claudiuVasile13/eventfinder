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
            
    function searchEmail(){
//        get data from POST
      $this->email = $_POST["email"];
      
//Connect to database
      $dbOpp =  new dbOperations();
      $dbOpp->connection();
      
// query database 
      $conditions = "WHERE user_email='$this->email'";
      $rows = count($dbOpp->select('users','*', $conditions));
      if($rows){
          header("Location: ../../view/loginPass.php?email=$this->email");
      }
      else{
          header("Location: ../../view/login.php");
      }
    }
    
    //Verify pass function
     function verifyPass(){
         $this->password = $_POST["pass"];
         
//         Connect to database
         $dbOpp = new dbOperations();
         $dbOpp->connection();
     }
    
    // Create a cookie
    function cookie(){
        $cookie_email = $_POST["email"];
        setcookie("isLoggedIn",$cookie_email, time() - (60), "/");
    }
    
}

$login = new loginClass();
$login->login();

$login->cookie();