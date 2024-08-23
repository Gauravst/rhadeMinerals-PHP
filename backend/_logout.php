<?php

$token = $_COOKIE['remember_token'];
$DeleteLoginQuery = mysqli_query($conn, "DELETE FROM login WHERE token = '$token'");

session_start();
session_unset();
session_destroy();
setcookie('remember_token', '', time() - 3600, '/');
header("location:./login");
exit();
