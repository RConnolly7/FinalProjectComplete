<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$user = 'PHP';
$pass = 'Sitetrack1!';
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$currentDate = new date();
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,"00");

$insert = "INSERT INTO Timetrack (Empid, Siteid, coordinate,Sdate,duration) VALUES ("$_POST['userid'].",". $_POST['Siteid']."," .$_POST['Location']",".$currentDate.",1800000)";
//make query 
//co-ordinates are longtitude and latitude seperated by a comma with no spaces in the string.
$rownumb = $mysqli -> query($insert);

?>