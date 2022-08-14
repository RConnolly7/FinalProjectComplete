<?php
$servername = "Local instance MySQL80";
$username = "root";
$password = "Swordfish14!";
$dbname = "'mwsitetrack'";
$input = "a"
$today =  date("Y-m-d")

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sitenum,Sitename FROM Site WHERE EndDate <= $today ";
$result = $conn->query($sql);

?> 