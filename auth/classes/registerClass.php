<?php

/**
 * Description of loginClass
 *
 * @author Skywalker
 */

require_once 'hashClass.php';

class registerClass {
    
    private $email,
            $user,
            $password,
            $repeatPassword;
    
    function register() {
        
        require_once 'validationClass.php';
        require_once '../../config/dbOperations.php';
        
        if(isset($_POST['submit'])) {
            if(!empty($_POST['email']) && !empty($_POST['pass'])) {
                $this->email = $_POST['email'];
                $this->user = strtok($this->email, "@");
                $this->password = $_POST['pass'];
                $this->repeatPassword = $_POST['re-pass'];
                
                $sanatizeData = new validationClass();
                $this->email = $sanatizeData->sanatizeData($this->email);
                $this->user = $sanatizeData->sanatizeData($this->user);
                $this->password = $sanatizeData->sanatizeData($this->password);
                $this->repeatPassword = $sanatizeData->sanatizeData($this->repeatPassword);
                if($sanatizeData->checkEmail($this->email)) {
                  
                    $dbOpp = new dbOperations();
                    $dbOpp->connection();                 
                    //secure the passowrd
                    $passHash = hashClass::passHash($this->password);             
//                    var_dump($passHash);
                    //save the data to the users tabel from the database
                    $dbOpp->insert('users', 'user_name,user_email,user_password,user_type,user_activation_key', "'$this->user','$this->email','$passHash','guest','userActivationKey'");
                    header("Location: ../../index.php");
                            
                }
            }
                    
        }
    }
    
} //end of the register class
        
    
$register = new registerClass();
