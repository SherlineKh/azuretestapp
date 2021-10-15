<?php
$servername = getenv('DB_SERVER');
$database = getenv('DB_NAME');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connected successfully";
}
?>
