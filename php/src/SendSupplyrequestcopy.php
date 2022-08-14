<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
/*
$json = filter_input(INPUT_POST, 'json');
$decoded_json = json_decode($json);
$val1 = $decoded_json->val1;
*/
$find = "SELECT Employee.Usernm,Employee.Fname, Employee.Lname ,SupplyReq.CreateDate, SupplyReq.Siteid, Site.Sitename, SupplyReq.State,SupplyReq.Sid, SupplyReq.Reqloc FROM SiteProblem 
CROSS JOIN Site ON Site.Siteid= SupplyReq.Siteid
CROSS JOIN Employee ON Employee.Eid= SupplyReq.Empid;";

    $result = $mysqli -> query($find);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row2 = $result->fetch_assoc()) {
      $condition = $row["Usernm"].",".$row["Fname"].",".$row["Lname"].",".$row["CreateDate"].",".$row["Probloc"]. $imagefinder.",".$row["Siteid"].",".$row["Sitename"].",".$row["State"].",".$row["Sid"]."`";
      echo $condition;
    }
}
?>