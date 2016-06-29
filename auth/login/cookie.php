<?php

require_once __DIR__."/../classes/loginClass.php";

$loggedIn = loginClass::validateCookie();

loginClass::validateCookie();

