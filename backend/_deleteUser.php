<?php

include '../db/connect.php'; // Ensure to include your database connection

// Set the content type to JSON
header('Content-Type: application/json');

// Only proceed if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON input from the request body
    $input = json_decode(file_get_contents('php://input'), true);

    // Check if username is provided
    if (isset($input['username']) && !empty($input['username'])) {
        $username = mysqli_real_escape_string($conn, $input['username']);

        // Check if the user exists
        $checkUserQuery = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if (mysqli_num_rows($checkUserQuery) > 0) {
            // User exists, proceed with deletion
            $deleteQuery = mysqli_query($conn, "DELETE FROM user WHERE username = '$username'");

            if ($deleteQuery) {
                echo json_encode(['success' => true, 'message' => 'User deleted successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Error deleting user']);
            }
        } else {
            // User does not exist
            echo json_encode(['success' => false, 'message' => 'User not found']);
        }
    } else {
        // Username is not provided
        echo json_encode(['success' => false, 'message' => 'Username is required']);
    }
} else {
    // Invalid request method
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// Close the database connection
$conn->close();
