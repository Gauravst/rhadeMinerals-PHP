<?php
$contactFromQuery = mysqli_query($conn, "SELECT COUNT(*) AS count FROM contactFrom");
$contactCount =  mysqli_fetch_assoc($contactFromQuery)['count'];

$userQuery = mysqli_query($conn, "SELECT COUNT(*) AS count FROM user WHERE role != 'hidden'");
$userCount = mysqli_fetch_assoc($userQuery)['count'];

?>

<div class="page">
  <div class="dashboardBox">
    <a href="./contact">
    <h1><?= $contactCount ?></h1>
      <p>Contact Form</p>
    </a>
  </div>
  <div class="dashboardBox">
    <a href="./user">
    <h1><?= $userCount ?></h1>
      <p>Users</p>
    </a>
  </div>
</div>
