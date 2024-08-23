<?php

if (isset($_POST['newUserBtn'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($name) || empty($username) || empty($email) || empty($password)) {
        $_SESSION['err'] = "All fields are required.";
        header("Location: ./user");
        exit();
    }

    $checkEmailQuery = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' OR username = '$username'");
    if (mysqli_num_rows($checkEmailQuery) > 0) {
        $_SESSION['err'] = "Email or Username already exists.";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $createUserQuery = mysqli_query($conn, "INSERT INTO user (name, username, email, password, role) 
    VALUES ('$name', '$username', '$email', '$hashedPassword', 'admin')");

    if ($createUserQuery) {
        $_SESSION['msg'] = "Registration successful. You can now log in.";
        header("Location: ./user");
        exit();
    } else {
        $_SESSION['err'] = "Error registering user. Please try again.";
        header("Location: ./user");
        exit();
    }
}
