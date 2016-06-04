<!DOCTYPE html>

<?php
    if(!isset($_COOKIE["isLoggedIn"])){
        header("Location: newlogin.php");
    }
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!-- Header -->
        <?php require_once 'header.php'; ?>
        
        <h1>Profile Page</h1>
    </body>
</html>
