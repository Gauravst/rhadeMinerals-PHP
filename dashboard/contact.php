<?php


$pageTitle = 'Contact From';
$cssFile = '../css/dashboard/contact/index.css';
$jsFile = '../js/dashboard/contact/script.js';

include '../db/connect.php';
include '../components/dashboard/login/checkLogin.php';
include '../components/utils/dashboard/header.php';

if ($userLogin === false) {
    $redirectLocation = "./login";
    header("Location: $redirectLocation");
}

include '../components/dashboard/contact/contactSection.php';
include '../components/utils/dashboard/footer.php';
