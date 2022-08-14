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


$find = "SELECT Timetrack.Empid, Timetrack.Siteid,Timetrack.Sdate,Timetrack.Coordinate,Timetrack.Timeid,Employee.Fname,Employee.Lname,Site.Sitename 
FROM Timetrack  
CROSS JOIN Site ON  Timetrack.Siteid = Site.Siteid
CROSS JOIN Employee ON Timetrack.Empid = Employee.Eid
WHERE Timetrack.Sdate BETWEEN '" . $_REQUEST['Sdate']."'  AND '". $_REQUEST['Edate']."' AND Timetrack.Empid=".$_REQUEST['EmployeeID']."
ORDER BY Timetrack.Empid,Timetrack.Sdate,Timetrack.Siteid;" ;
    $result = $mysqli -> query($find);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row2 = $result->fetch_assoc()) {
        $condition = $row2["Fname"]."~".$row2["Lname"]."~".$row2["Sitename"]."~".$row2["Empid"]."~".$row2["Siteid"]."~".$row2["Sdate"]."~".$row2["Coordinate"]."~";
        echo $condition;
    }
}
?>