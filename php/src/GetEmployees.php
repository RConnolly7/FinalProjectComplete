<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
$json = filter_input(INPUT_POST, 'json');
$decoded_json = json_decode($json);
$val1 = $decoded_json->val1;
//make request for employee
$find = "SELECT Eid,Fname,Lname,  FROM Employee ;"
$result = $mysqli->query($find);
if ($result->num_rows > 0) {
    // output data of each row
    while($row2 = $result->fetch_assoc()) {
        $condition = $row2["Eid"].$row2["Fname"].$row2["Lname"].":";
        echo $condition;
    }
}
?>