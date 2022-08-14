<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
echo "rr";
$find= "INSERT INTO Employee (Fname,Lname,Usernm,pwhsh,type) VALUES ('".$_REQUEST['Fname']."','".$_REQUEST['Lname']."','".$_REQUEST['Usernm']."','".$_REQUEST['pwhsh']."',".$_REQUEST['type'].")";
echo $find;
$result = $mysqli->query($find);
echo "op";
?>