<?php

unset($_COOKIE["token"]);
setcookie("token", "", -1, "/");
unset($_COOKIE["validator"]);
setcookie("validator", "", -1, "/");
header("Location: http://localhost/eventfinder/view/login.php?logout=true");

