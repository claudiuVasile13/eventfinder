<?php
/**
 * Description of hash
 *
 * @author Skywalker
 */

class hashClass {
    
    //This is the function which hash the password 
   static function passHash($pass) {
       $hash = password_hash($pass, PASSWORD_BCRYPT);
       return $hash;
   }
   
   //This is the function which check the password 
   //that the user will enter when he will try to login in 
   //with the password that he provided when he registered
   static function checkPass($pass, $hash) {
       if(password_verify($pass, $hash)) {
           return true;
       }
       return false;
   }
   
}
