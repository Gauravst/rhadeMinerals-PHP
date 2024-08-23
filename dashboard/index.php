<?php


$pageTitle = 'Dashboard';
$cssFile = '../css/dashboard/dashboard/index.css';

include '../db/connect.php';
include '../components/dashboard/login/checkLogin.php';
include '../components/utils/dashboard/header.php';

if ($userLogin === false) {
    $redirectLocation = "./login";
    header("Location: $redirectLocation");
}

include '../components/dashboard/dashboard/dashboardSection.php';
include '../components/utils/dashboard/footer.php';
