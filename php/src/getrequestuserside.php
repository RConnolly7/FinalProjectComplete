<?php
$servername = "Local instance MySQL80";
$username = "root";
$password = "Swordfish14!";
$dbname = "'mwsitetrack'";
$userid = "a"

$host = 'Database';
$user2 = "root";
$pass2 = "example";
$user = 'PHP';
$pass = 'Sitetrack1!';
$dbnm = 'mwsitetrack';
$dbPort = "3306";
//phpinfo();
//port 00 works
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,$i);
$sql = "SELECT Reqloc FROM SupplyReq WHERE Empid <= $userid ";
$resultOut = $mysqli->query($sql);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Reqloc FROM SupplyReq WHERE Empid <= $userid ";
$result = $conn->query($sql);

?> 