<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="../assets/favicon/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <title>Rhade KC Minerals - <?= $pageTitle ?></title>
    <link href="<?= $cssFile ?>" rel="stylesheet" />
  </head>
  <body>
    <div class="main">
      <button id="goToTopBtn" onclick="scrollToTop()">↑</button>
      <header>
        <div class="menuIcon">
          <i class="fas fa-bars"></i>
        </div>
        <div class="closeIcon">
          <i class="fas fa-times"></i>
        </div>
        <div class="logo">
          <a href="/">Rhade KC Minerals</a>
        </div>
        <div class="headerRight">
          <nav>
            <ul>
              <li>
                <a href="../">Home</a>
              </li>
              <li class="<?= ($pageTitle == 'Dashboard') ? 'active' : '' ?>">
                <a href="./">Dashboard</a>
              </li>
              <li class="<?= ($pageTitle == 'Contact From') ? 'active' : '' ?>">
                <a href="./contact">Contact From</a>
              </li>
              <li class="<?= ($pageTitle == 'Users') ? 'active' : '' ?>">
                <a href="./user">Users</a>
              </li>
              <li class="username">
              <a>@<?= $username ?></a>
              </li>
            </ul>
          </nav>
          <div class="whatsappBtn">
            <a href="./logout">Logout</a>
          </div>
        </div>
      </header>
