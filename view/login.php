<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
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
                    <form action="../auth/classes/loginClass.php" method="post">
                        <h3>Login and start tracking your favorite events</h3>
                        <label><i class="fa fa-envelope"></i>Email</label>
                        <input type="text" name="email" placeholder="name@host.domain" />
                        <button type="submit" name="submit"><i class="fa fa-forward" aria-hidden="true"></i></i>Forward</button><br>
                        <a href="register.php">Don't have an account? Register Here</a>
                    </form>
                </div>             
            </div>
        </div>
    </body>
</html>
    


