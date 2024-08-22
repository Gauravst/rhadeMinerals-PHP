<?php

$envFilePath = './env.ini';
include './db/connect.php';

if (isset($_POST['contactFromBtn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {

        $query = "INSERT INTO contactFrom (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

        if (mysqli_query($conn, $query)) {
            echo "Data successfully inserted!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    } else {
        echo "All fields are required!";
    }
}
