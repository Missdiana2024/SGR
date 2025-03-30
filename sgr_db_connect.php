<?php
$host = "sgrdb-sgrnotificationdb.g.aivencloud.com";       // Database server
$port = "14283";            // Port you're using for PostgreSQL
$dbname = "sgr_notification_system";   // Database name
$username = "avnadmin";     // Database username
$password = "AVNS_TMT7VxP2bkdpVepWhV2";     // Database password

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to PostgreSQL SGR NOTIFICATION SYSTEM DATABASE successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
