<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once '../../config/dbOperations.php';

    $email = $_GET["email"];
    $dbOpp = new dbOperations();
    $dbOpp->connection();
    $res = count($dbOpp->select('users', 'user_email', "WHERE user_email ='$email'"));
    echo $res;