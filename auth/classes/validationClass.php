<?php
/**
 * Description of validationClass
 *
 * @author Skywalker
 */
class validationClass {
    
    function checkEmail($email) {
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        
        return true;
        
    }
    
    function sanatizeData($data) {
        
        return htmlentities($data, ENT_QUOTES, 'UTF-8'); 
        
    }
    
}
