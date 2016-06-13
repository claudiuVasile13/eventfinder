<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fugaz One">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin Slab">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
    </head>
        <!-- Header -->
        <?php require_once 'header.php'; ?>

        <div class="row" id="box">
            <!-- Login -->
            <div class="col-lg-6 form-box" id="login-box">
                <!-- Register Form -->
                <!--<div id="login" class="form-container">-->             
                    <form id="login-form" class="form-container" action="../auth/login/loginCall.php" method="post">
                        <div class="group">
                            <input class="fields" type="text" name="email" />
                            <label>Email</label>
                        </div>
                        <div class="group">
                            <input class="fields" type="password" name="pass" />
                            <label>Password</label>
                        </div>
                        <div id="remember">
                            <input type="checkbox" name="remember"/>
                            <label>Stay connected</label><br>
                        </div>
                        <button type="submit" name="submit">LOGIN</button><br>
                        <a href="#">Forgot your password?</a>
                    </form>
                <!--</div>-->             
            </div>
            <!-- Register -->
            <div class="col-lg-6 form-box" id="register-box">
                <!-- Register Form -->
                <!--<div id="register" class="form-container">-->             
                    <form id="register-form" class="form-container" action="../auth/login/registerCall.php" method="post">
                        <div class="group">
                            <input class="fields" type="text" name="email" id="email_r"/>
                            <label>Email</label>
                            <span id="email_rs">Email is already taken</span>
                        </div>
                        <div class="group">
                            <input class="fields" type="password" name="pass" id="pass_r" />
                            <label>Password</label>
                            <span id="pass_rs">Password is too short</span>
                        </div>
                        <div class="group">
                            <input class="fields" type="password" name="re-pass" id="repass_r" />
                            <label>Re-Password</label>
                            <span id="repass_rs">Password does not match</span>
                        </div>                      
                        <button type="submit" name="submit">REGISTER</button><br>
                    </form>
                <!--</div>-->             
            </div>  
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="../js/menu.js"></script>
        <script src="../js/login.js"></script>
        <script src="../js/dbajax.js"></script>
    </body>
</html>
