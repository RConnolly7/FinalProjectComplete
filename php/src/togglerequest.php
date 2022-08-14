<?php
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
$find = "SELECT State FROM SiteProblem WHERE Pid=".$_REQUEST['Pid'];
$result = $mysqli->query($find);
if ($result->num_rows > 0) {
    // output data of each row
    while($row2 = $result->fetch_assoc()) {
        $condition = $row2["State"];
        echo $condition;
    }
}
if($condition="open"){
$find = "UPDATE SiteProblem
SET State = 'closed'
WHERE Pid=".$_REQUEST['Pid'].";";
}else{
    $find = "UPDATE SiteProblem
    SET State = 'open'
    WHERE Pid=".$_REQUEST['Pid'].";";
}
echo "complete"
?>