<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pageTitle = 'Home';
$cssFile = './css/home/index.css';
$jsFile = './js/script.js';

include './components/utils/header.php';

include './components/home/heroSection.php';
include './components/home/aboutSection.php';
include './components/home/productSection.php';
include './components/home/visionSection.php';

include './backend/_contactFrom.php';
include './components/home/contactSection.php';

include './components/utils/footer.php';
