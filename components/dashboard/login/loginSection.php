<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../assets/favicon/favicon.ico" />
    <title>Login</title>
    <link href="<?= $cssFile ?>" rel="stylesheet" />
  </head>
  <body>
    <div class="main">
      <section id="login">
        <div class="loginContainer">
          <form action="" method="post">
            <label for="username">Email</label>
            <input type="email" id="username" name="email" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />

            <input type="submit" value="Login" name="loginBtn" />
          </form>
        </div>
      </section>
    </div>
  </body>
</html>
