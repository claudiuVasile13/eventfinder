<?php
/**
 * Description of hash
 *
 * @author Skywalker
 */

use \ParagonIE\PasswordLock\PasswordLock;
use \Defuse\Crypto\Key;

class hash {
    
    //This is the function which hash the password 
   function passHash($pass) {
       
       $salt = Key::createNewRandomKey();
       $storeMe = PasswordLock::hashAndEncrypt($pass, $salt);
       $arr = ['salt' => $salt, 'hash' => $storeMe];
       return $arr;
       
   }
   
   //This is the function which check the password 
   //that the user will enter when he will try to login in 
   //with the password that he provided when he registered
   function checkPass($pass, $hash, $salt) {
       
       if(PasswordLock::decryptAndVerify($pass, $hash, $salt)) {
           return true;
       }
       return false;
       
   }
   
}
