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
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Courgette">
    </head>
    <body>  
        <!-- Header -->
        <?php require_once 'header.php'; ?>
        
        <h1>eventfinder.com</h1>
        <h4>Join us and find the event which fits you</h4>
        
        <div class="row" id="box">
            <!-- Register -->
            <div class="col-lg-6" id="register-box">
                <!-- Register Form -->
                <div id="register" class="form-container">             
                    <form action="../auth/login/registerClass.php" method="post">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="name@host.domain" /><br>
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="******" /><br>
                        <label>Re-Password</label>
                        <input type="password" name="re-pass" placeholder="******" /><br>
                        <input type="checkbox" id="remember" name="remember"/>
                        <label>Stay connected</label>
                        <button type="submit" name="submit">Register</button><br>
                         <a href="#">Forgot your password?</a>
                    </form>
                </div>             
            </div>
            <!-- Login -->
            <div class="col-lg-6" id="register-box">
                <h1>eventfinder.com</h1>
                <h4>Join us and find the event which fits you</h4>
                <!-- Register Form -->
                <div id="login" class="form-container">             
                    <form action="../auth/login/loginClass.php" method="post">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="name@host.domain" /><br>
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="name@host.domain" /><br>
                        <button type="submit" name="submit">Login</button><br>
                    </form>
                </div>             
            </div>
        </div>
        
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="../js/menu.js"></script>
    </body>
</html>
