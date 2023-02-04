<?php
$servername = "localhost";
$username = "Cpe1017";
$password = "Susa&171145";
$dbname = "Cpe1017";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>