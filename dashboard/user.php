<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pageTitle = 'Users';
$cssFile = '../css/dashboard/user/index.css';
$jsFile = '../js/dashboard/user/script.js';

include '../db/connect.php';
include '../backend/_createUser.php';
include '../components/dashboard/login/checkLogin.php';
include '../components/utils/dashboard/header.php';

if ($userLogin === false) {
    $redirectLocation = "./login";
    header("Location: $redirectLocation");
}

include '../components/dashboard/user/userSection.php';
include '../components/utils/dashboard/footer.php';
