<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$username = null;
$userLogin = false;

if (isset($_COOKIE['remember_token'])) {
    $token = $_COOKIE['remember_token'];
    $checkLoginQuery = mysqli_query($conn, "SELECT user FROM login WHERE token = '$token'");
    if ($checkLoginQuery) {
        $loginData = mysqli_fetch_assoc($checkLoginQuery);

        if ($loginData) {
            $username = $loginData['user'];
            $userLogin = true;
        }
    }
}
