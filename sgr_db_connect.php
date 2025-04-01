<?php
$host = "sgrdb-sgrnotificationdb.g.aivencloud.com";
$port = "14283";
$dbname = "defaultdb";
$user = "avnadmin";
$pass = "AVNS_TMT7VxP2bkdpVepWhV2";
$conn = new mysqli($host, $user, $pass, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to Aiven database successfully";
?>
