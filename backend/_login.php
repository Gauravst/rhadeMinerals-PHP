<?php

if (isset($_POST['loginBtn'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, ($_POST['password']));

    $checkEmailQuery = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    $checkEmail = mysqli_num_rows($checkEmailQuery);


    if ($checkEmail > 0) {
        $result = mysqli_fetch_assoc($checkEmailQuery);

        if (password_verify($password, $result['password'])) {
            $username = $result['username'];

            $rememberToken = bin2hex(random_bytes(8));

            $createLoginQuery = mysqli_query($conn, "INSERT INTO login (user, token, time)
          VALUES ('$username', '$rememberToken',  current_timestamp())");
            setcookie('remember_token', $rememberToken, time() + (30 * 24 * 3600), '/');

            $link = "./";
            $_SESSION['msg'] = "Login Successful.";
            header("location:$link");
            exit();
        } else {
            $_SESSION['err'] = "Invalid Credentials.";
            header("location:./login");
            exit();
        }
    } else {
        $_SESSION['err'] = "Invalid Credentials.";
        header("location:./login");
        exit();
    }
}
