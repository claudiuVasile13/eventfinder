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
                    <input name="pass" id="pass_field" placeholder="Password"><br>
                    <span id="pass-s">Password is too short</span><br>
                    <input name="repass" id="repass_field" placeholder="Re-Password" disabled="disabled"><br>
                    <span id="repass-s">Password does not match</span><br>
                    <button type="submit" disabled="disabled">Reset password</button>
                </form>
            </div>
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="../js/newPass.js"></script>
    </body>
</html>
