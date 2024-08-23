<?php

include '../db/connect.php'; // Ensure to include your database connection

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['id']) && !empty($input['id'])) {
        $id = mysqli_real_escape_string($conn, $input['id']);

        $checkFromQuery = mysqli_query($conn, "SELECT * FROM contactFrom WHERE id = '$id'");
        if (mysqli_num_rows($checkFromQuery) > 0) {
            $deleteQuery = mysqli_query($conn, "DELETE FROM contactFrom WHERE id = '$id'");

            if ($deleteQuery) {
                echo json_encode(['success' => true, 'message' => 'From deleted successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Error deleting from']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'From not found']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'id is required']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

$conn->close();
