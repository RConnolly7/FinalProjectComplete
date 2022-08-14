<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$today =  date("Y-m-d");
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
//make request for employee
$result = $mysqli->query($find);

$find= "SELECT Siteid,Sitename,Sitenum,Location FROM Site WHERE EndDate >='". $today."' AND startdate <='".$today."';";

$result = $mysqli -> query($find);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $trimmedSite = str_replace(","," ",$row["Sitename"]);
          $trimmedLoc = str_replace(","," ",$row["Location"]);
         echo $row["Siteid"].",".$trimmedSite.",".$row["Sitenum"].",".$trimmedLoc.",";
    //echo $row["Employee.Usernm"]+$row["Employee.Fname"]+$row["Employee.Lname"]+$row["SiteProblem.CreateDate"]+/*PUT MESSAGE HERE+*/ /*PUT IMAGE URL HERE+*/$row["SiteProblem.Siteid"]+$row["Site.Sitename"]+$row[" SiteProblem.State"]+$row["SiteProblem.Pid"]+"`";
    }
}
?>