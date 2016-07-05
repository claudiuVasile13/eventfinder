<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/profile.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!-- Header -->
        <?php require_once 'header.php'; ?>

        <div class="row">
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
                    <input id="name" type="text" readonly="readonly" value="Tanase Traian Constantin">
                    <ul id="location">
                        <li><input type="text" readonly="readonly" value="Romania"></li>
                        <li><input type="text" readonly="readonly" value="Arges"></li>
                        <li><input id="oras" readonly="readonly" type="text"  value="Mioveni"></li>
                    </ul>

                </div>
            </div>
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="../js/profile.js"></script>

    </body>
</html>
