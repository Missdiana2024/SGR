<?php
include('sgr_db_connect.php');  // Include your DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);  // Hash the password using SHA-256

    // Query to check the email and password in the database
    $query = "SELECT * FROM passenger WHERE email_address = :email AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Check if any user exists with the given email and password
    if ($stmt->rowCount() > 0) {
        // User found, fetch data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Respond with status and user details
        echo json_encode([
            'status' => 'success',
            'resultCode' => 1,
            'email_address' => $user['email_address'],  // Return email address
            'fullname' => $user['fullname']             // Return fullname
        ]);
    } else {
        // Invalid credentials
        echo json_encode(['status' => 'error', 'message' => 'Invalid credentials']);
    }
} else {
    // Invalid request method
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
