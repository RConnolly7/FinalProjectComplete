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
SET Sitename" .$_REQUEST['Sitename'].",sitenum=".$_REQUEST['SiteNum'].",startdate=".$_REQUEST['StartDate'].",EndDate=".$_REQUEST['EndDate'].",location=".$_REQUEST['LocationT']. ") WHERE ".$_REQUEST['Siteid']. ";";
$result = $mysqli->query($find);
?>