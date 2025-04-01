<?php
$host = "my-mysql-franknokwe100.aivencloud.com";
$port = "12345";
$dbname = "defaultdb";
$user = "avnadmin";
$pass = "your-secret-password";
$conn = new mysqli($host, $user, $pass, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to Aiven database successfully";
?>
