<?php

$iniPath = '../env.ini';
if(isset($envFilePath) && !empty($envFilePath)) {
    $ini = parse_ini_file($envFilePath, true);
} else {
    $ini = parse_ini_file($iniPath, true);
}

$db_hostname = $ini['db']['host'];
$db_username = $ini['db']['user'];
$db_password = $ini['db']['password'];
$db_database = $ini['db']['database'];

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database) or die("DB not connected");
