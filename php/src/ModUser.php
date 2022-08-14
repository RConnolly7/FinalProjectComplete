<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
//make request for employee

$find= "UPDATE Site
SET Fname" .$_REQUEST['Fname'].",Lname=".$_REQUEST['Lname'].",Usernm=".$_REQUEST['Usernm'].",pwhsh=".$_REQUEST['pwhsh'].",type=".$_REQUEST['type']. ") WHERE Eid=".$_REQUEST['Eid'];
$result = $mysqli->query($find);
?>