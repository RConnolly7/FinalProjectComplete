<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
//make request for employee
$find = "DELETE FROM Employee WHERE Eid= ".$_REQUEST['Eid'].";";
echo $find;
$result = $mysqli->query($find);
echo "successfully";
?>