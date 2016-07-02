<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    
    <body>
        <form action="../auth/forgot/newPassClass.php?recoverToken=<?php if(isset($_GET["recoverToken"])) echo rawurlencode($_GET['recoverToken'])?>" method="POST">
        <input name="pass"><br><br>
        <input name="repass"><br><br>
        <button type="submit">Reset password</button>
        </form>
    </body>
</html>
