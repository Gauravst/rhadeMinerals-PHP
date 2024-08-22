<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$cssFile = '../css/dashboard/login/index.css';

include '../db/connect.php';
include '../backend/_login.php';
include '../components/dashboard/login/checkLogin.php';

if ($userLogin === true) {
    $redirectLocation = "./";
    header("Location: $redirectLocation");
}

include '../components/dashboard/login/loginSection.php';
