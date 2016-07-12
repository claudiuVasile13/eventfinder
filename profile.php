<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>

        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/profile.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!-- Header -->
        <?php require_once 'header.php'; ?>

        <div class="row" id="row_main">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8" id="main_containter">
                <div id="cover-photo">
                    <img src="../profile_img/default_cover_photo.jpg">
                </div>
                <div id="profile-photo">
                    <img src="../profile_img/default-profile-picture.png">
                </div>

                <div id="info">
                    <input id="name" type="text" readonly="readonly" value="Tanase Traian Constantin"><br>
                    <ul class="inlinie" id="location">
                        <li><input type="text" readonly="readonly" value="Usbdfjduhfsjhufhsjfuhdjhsufjhekistan"></li>
                        <li><input type="text" readonly="readonly" value="Arges"></li>
                        <li><input id="oras" readonly="readonly" type="text"  value="Mioveni"></li>
                    </ul>
                    <p>Contact email: <input type="email" readonly="readonly" value="tanase_traian95@yahoo.com"></p>
                    <div id="social-media">
                        <a href="http://www.facebook.com"><img src="../img/facebook.png"></a>
                        <a href="http://www.twitter.com"><img src="../img/twitter.png"></a>
                        <a href="http://www.google.com"><img src="../img/google.png"></a>
                        <a href="http://www.linkedin.com"><img src="../img/linkedin.png"></a>
                    </div>
                    <div id="counters">
                        <div class="row">
                            <div class="inlinie col-lg-4 numarator">
                                <p>5</p>
                                <p>Oferte</p>
                            </div>

                            <div class="inlinie col-lg-4 numarator">
                                <p>5</p>
                                <p>Oferte</p>
                            </div>

                            <div class="inlinie col-lg-4 numarator">
                                <p>5</p>
                                <p>Oferte</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="info-icons">
            <form>
                <button type="button"><img id="edit-icon" src="../profile_img/document-edit.png"></button>
                <button type="submit"><img id="submit-icon" hidden="hidden" src="../profile_img/clipboard-checked.png"></button>
            </form>
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="../js/profile.js"></script>

    </body>
</html>
