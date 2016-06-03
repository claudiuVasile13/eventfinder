<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/newlogin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fugaz One">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin Slab">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
    </head>
    <body>  
        <!-- Header -->
        <?php require_once 'header.php'; ?>
        
        <div class="row" id="box">
            <!-- Login -->
            <div class="col-lg-6 form-box" id="login-box">
                <!-- Register Form -->
                <div id="login" class="form-container">             
                    <form id="login-form" action="../auth/login/loginCall.php" method="post">
                        <label>Email</label>
                        <input class="fields" type="text" name="email" placeholder="name@host.domain" /><br>
                        <label>Password</label>
                        <input class="fields" type="password" name="pass" placeholder="******" /><br>
                        <button type="submit" name="submit">LOGIN</button><br>
                        <a href="#">Forgot your password?</a>
                    </form>
                </div>             
            </div>
            <!-- Register -->
            <div class="col-lg-6 form-box" id="register-box">
                <!-- Register Form -->
                <div id="register" class="form-container">             
                    <form id="register-form" action="../auth/login/registerCall.php" method="post">
                        <label>Email</label>
                        <input class="fields" type="text" name="email" placeholder="name@host.domain" /><br>
                        <label>Password</label>
                        <input class="fields" type="password" name="pass" placeholder="******" /><br>
                        <label>Re-Password</label>
                        <input class="fields" type="password" name="re-pass" placeholder="******" /><br>
                        <input type="checkbox" id="remember" name="remember"/>
                        <label>Stay connected</label><br>
                        <button type="submit" name="submit">REGISTER</button><br>
                    </form>
                </div>             
            </div>  
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="../js/menu.js"></script>
    </body>
</html>
