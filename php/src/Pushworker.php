<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
$Manager =(int) $POST_['Manager'];
$insert ="INSERT INTO Employee (Fname, Lname,Usernm,pwhsh,type) VALUES (".$POST_['FirstName'].",".$POST_['LastName'].",".$POST_['UserName'].",".$POST_['PassWord'].",".$Manager.");";
$mysqli($insert);
?>