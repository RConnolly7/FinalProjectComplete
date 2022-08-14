<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
$insert ="INSERT INTO Site (Sitenum, Sitename,Startdate,EndDate,Location) VALUES (".$POST_['SiteNum'].",".$POST_['SiteName'].",".$POST_['StartDate'].",".$POST_['EndDate'].",".$Post_['LocationT'].");";
$mysqli($insert);
?>