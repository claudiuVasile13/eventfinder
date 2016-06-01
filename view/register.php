<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/register.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fugaz One">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin Slab">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Courgette">
    </head>
    <body>
        <!-- Header -->
        <?php require_once 'header.php'; ?>
        
        <div class="row" id="box">
            <div class="col-lg-12" id="container">
                <img src="http://irdl.info.yorku.ca/files/2014/04/category-icon-speaker.png" alt="logo">
                <h1>eventfinder.com</h1>
                <h4>Join us and find the event which fits you</h4>
                <!-- Register Form -->
                <div id="register">
                    <form action="../auth/classes/registerClass.php" method="post">
                        <p id="form-header"><i class="fa fa-file-text-o"></i>Create Account</p>
                        <label><i class="fa fa-user"></i>Username</label>
                        <input type="text" name="user" placeholder="user1234" /><br>
                        <label><i class="fa fa-envelope"></i>Email</label>
                        <input type="text" name="email" placeholder="name@host.domain" /><br>
                        <label><i class="fa fa-key"></i>Password</label>
                        <input type="password" name="pass" placeholder="******" /><br>
                        <label><i class="fa fa-key"></i>Repeat Password</label>
                        <input type="password" name="repeatPass" placeholder="******" /><br>
                        <button type="submit" name="submit">Register</button><br>
                        <a href="login.php">Have an account? Login In Here</a>
                    </form>
                </div>           
            </div>
        </div>
    </body>
</html>

