<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/newPass.css">
        <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div id="main-box">
            <div id="form-box">
                <h2 id="title">Choose a new password</h2>
                <form action="../auth/forgot/newPassClass.php?recoverToken=<?php if(isset($_GET["recoverToken"])) echo rawurlencode($_GET['recoverToken'])?>" method="POST">
                    <input name="pass" id="pass_field" placeholder="Password"><br><br>
                    <input name="repass" id="repass_field" placeholder="Re-Password"><br><br>
                    <button type="submit">Reset password</button>
                </form>
            </div>
        </div>
    </body>
</html>
