<?php

/**
 * Description of loginClass
 *
 * @author Skywalker
 */

class registerClass {
    
    private $email,
            $user,
            $password,
            $repeatPassword;
    
    function register() {
        
        require_once 'validationClass.php';
        require_once '../../config/dbOperations.php';
        
        if(isset($_POST['submit'])) {
            if(!empty($_POST['email']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
                $this->email = $_POST['email'];
                $this->user = $_POST['user'];
                $this->password = $_POST['pass'];
                $this->repeatPassword = $_POST['repeatPass'];
                
                $sanatizeData = new validationClass();
                $this->email = $sanatizeData->sanatizeData($this->email);
                $this->user = $sanatizeData->sanatizeData($this->user);
                $this->password = $sanatizeData->sanatizeData($this->password);
                $this->repeatPassword = $sanatizeData->sanatizeData($this->repeatPassword);
                var_dump($this->email);
                if($sanatizeData->checkEmail($this->email) && strlen($this->password) >= 6) {
                  
                    if($this->password !== $this->repeatPassword) {
                        echo 'The passwords don\'t match';
                    } else {
                        //check if the email is available
                        $dbOpp = new dbOperations();
                        $dbOpp->connection();
                        $conditions = "WHERE user_email='$this->email'";
                        $rows = count($dbOpp->select('users', '*', $conditions));
                        var_dump($dbOpp->select('users', '*', $conditions));
                        if($rows) {
                            echo 'The email is already registered';
                        } else {                      
                            //secure the passowrd
                            
                            
                            //save the data to the users tabel from the database
                            $dbOpp->insert('users', 'user_name,user_email,user_password,user_salt,user_type,user_activation_key', "'$this->user','$this->email','$this->password','userSALT','guest','userActivationKey'");
                        }
                    }
                    
                } else {
                    echo 'The email is invalid or the passowrd is less the 6 characters.';
                }
            }
        }
        
    } 
    
}

$register = new registerClass();
$register->register();
