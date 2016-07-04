<!DOCTYPE html>

<html>
    <head>
        <title>Recover Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/forgotPass.css">
        <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div id="main-box">
            <div id="form-box">
                <h2 id="title">Recover your password</h2>
                <p id="description">
                    <span class="number">1.</span> In order to get a new password you need to enter your email in the field below.<br>
                    <span class="number">2.</span>  We will send you a message to the email address that you provided.<br>
                    <span class="number">3.</span>  The message will contain a link which will take you to a web page where you will choose a new password.<br>
                    <span class="number">4.</span>  Once you have done that you will be redirected to the login page where you can login with your email and new password.<br>
                </p>
                <div id="form-container">
                    <form action="../auth/forgot/forgotPassAction.php" method="POST">
                        <input type="text" name="email" id="email-field" placeholder="Email">
                        <button type="submit" id="submit-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>