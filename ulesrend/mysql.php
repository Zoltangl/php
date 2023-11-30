<?php
$servername = "localhost";
$username = "phpteszt";
$password = "ViN2[Kyiq7xC.THw";
$db = "ulesrend";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// $connn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>