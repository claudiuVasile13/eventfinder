<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/loginPass.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
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
                    <form action="../auth/classes/loginPassClass.php" method="post">
                        <span id="email"><?php echo $_GET["email"]; ?></span>
                        <label><i class="fa fa-key"></i>Password</label>
                        <input type="password" name="pass" placeholder="******" /><br>
                        <div id="options">
                            <input type="checkbox" id="remember-me"><span>Keep me connected<span><br>
                            <a href="#">Forgot your password?</a>
                            <div></div>
                        </div>
                        <button type="submit" name="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button><br>
                    </form>
                </div>                
            </div>
        </div>
        <!-- Footer -->
        <?php require_once 'footer.php'; ?>
    </body>
</html>

