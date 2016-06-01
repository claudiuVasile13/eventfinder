<?php

/*
    This is the class that contains the functions: connect, insert, update, delete and select.
        connect - create the connection with the database
        insert - insert data in a specific tabel from the database
        update - update the data that you want form a specific table of the database
        delete - delete the data that you want from a specific table of the database
        select - select the data that you want fom a specific tabele of the database
  */

class dbOperations {
    
    private $conn = null;
     
    //create the connection to the database
    function connection() {
        
        require_once 'db.php';
        
        $db = new db();
        $dbArr = $db->dbInfo();
        
        try {
            $this->conn = new PDO("mysql:host=$dbArr[0];dbname=$dbArr[1]", $dbArr[2], $dbArr[3]);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    
    //insert data into a specific tabel
    function insert($tabel, $fields, $values) {
       
        var_dump($query = "INSERT INTO {$tabel} ({$fields}) VALUES ({$values})");
//        try {}
//        catch(PDOException $e)
        $exe = $this->conn->prepare($query);
        
        $exe->execute(); 
        
    }
    
    //delete data from a specific tabel where field = value
    function delete($tabel, $conditions) {
            
        $query = "DELETE FROM {$tabel} WHERE {$conditions}";
        $exe = $this->conn->prepare($query);
        
        return $exe->execute();
        
    }
    
    //update data from a specific tabel based on specific conditions
    function update($tabel, $fieldsAndValues, $conditions) {
        
        $query = "UPDATE {$tabel} SET {$fieldsAndValues} WHERE {$conditions}";
        $exe = $this->conn->prepare($query);
        
        return $exe->execute();
        
    }
    
    //select data from a specific tabel based on specific conditions
    function select($tabel, $fields, $conditions) {
        
        $query = "SELECT {$fields} FROM {$tabel} {$conditions}";
        $exe = $this->conn->prepare($query);
        $exe->execute();
        $results = $exe->fetchAll();
        return $results;
        
    } 
    
}
