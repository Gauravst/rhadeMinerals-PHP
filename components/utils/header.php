<?php ob_start(); ?>
<?php
$iniPath = './env.ini';
$ini = parse_ini_file($iniPath, true);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/favicon/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <title>Rhade KC Minerals - <?= $pageTitle ?></title>
    <meta
      name="description"
      content="Rhade KC Minerals specializes in supplying premium quality Talcum Powder and Soapstone Powder. Perfect for various industrial applications, our products are sourced from the finest materials and delivered to your location."
    />

    <meta
      name="keywords"
      content="Talcum Powder, Soapstone Powder, Rhade KC Minerals, Talc Supplier, Soapstone Supplier, Industrial Talc, Industrial Soapstone, Quality Minerals, Uttarakhand, India"
    />

    <meta
      property="og:title"
      content="Rhade KC Minerals | Premium Talcum Powder & Soapstone Powder Supplier"
    />
    <meta
      property="og:description"
      content="High-quality Talcum Powder and Soapstone Powder for industrial use."
    />
    <meta property="og:url" content="https://rhademinerals.com" />
    <meta property="og:type" content="website" />
    <link href="<?= $cssFile ?>" rel="stylesheet" />

    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-4P4H395R42"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "<?= $ini['google']['analytics'];?>");
    </script>

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
          <a href="/"><span>Rhade </span><span>KC Minerals</span></a>
        </div>
        <div class="headerRight">
          <nav>
            <ul>
              <li class="<?= ($pageTitle == 'Home') ? 'active' : '' ?>">
                <a href="./">Home</a>
              </li>
              <li class="<?= ($pageTitle == 'About Us') ? 'active' : '' ?>">
                <a href="./about">About Us</a>
              </li>
              <li
                class="<?= strpos($_SERVER['REQUEST_URI'], '/product/') !== false ? 'active' : '' ?>"
              >
                <div class="productNavLi">
                  Products
                  <div class="dropdownProductIcon">
                    <i class="fas fa-chevron-right"></i>
                  </div>
                </div>
                <div class="dropdown">
                  <div class="dropdownProduct">
                    <a href="./talc">
                      <img src="./assets/products/p1.webp" />
                      <p>Talcum Powder</p>
                    </a>
                    <a href="./soapstone">
                      <img src="./assets/products/p2.webp" />
                      <p>Soapstone</p>
                    </a>
                  </div>
                </div>
              </li>
              <li class="<?= ($pageTitle == 'Applications') ? 'active' : '' ?>">
                <a href="./applications">Applications</a>
              </li>
              <li
                class="<?= ($pageTitle == 'Infrastructure') ? 'active' : '' ?>"
              >
                <a href="./infrastructure">Infrastructure</a>
              </li>
              <li class="<?= ($pageTitle == 'Contact Us') ? 'active' : '' ?>">
                <a href="./contact">Contact Us</a>
              </li>
            </ul>
          </nav>
          <div class="whatsappBtn">
            <a href="https://wa.me/919988262608?text=Hi" target="_blank">
              <svg id="whatsappIconSVG" width="20" viewBox="0 0 24 24">
                <defs></defs>
                <path
                  fill="#eceff1"
                  d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"
                ></path>
                <path
                  fill="#25D366"
                  d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"
                ></path>
                <path
                  fill="#fafafa"
                  d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"
                ></path>
              </svg>
              <p>Message</p>
            </a>
          </div>
        </div>
      </header>
    </div>
  </body>
</html>
