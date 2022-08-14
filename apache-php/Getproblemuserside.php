<?php
$servername = "Local instance MySQL80";
$username = "root";
$password = "Swordfish14!";
$dbname = "'mwsitetrack'";
$userid = "a"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Probloc FROM SiteProblem WHERE Empid <= $userid ";
$result = $conn->query($sql);

?> 