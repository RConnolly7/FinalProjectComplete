<?php
$find = "SELECT Timetrack.Empid, Timetrack.Siteid,Timetrack.Sdate,Timetrack.Coordinate,Timetrack.Timeid,Employee.Fname,Employee.Lname,Site.Sitename 
FROM Timetrack  
CROSS JOIN Site ON  Timetrack.Siteid = Site.Siteid
CROSS JOIN Employee ON Timetrack.Empid = Employee.Eid
ORDER BY Timetrack.Empid,Timetrack.Sdate,Timetrack.Siteid
WHERE Timetrack.Sdate >=" . $_POST['Sdate']."  AND Timetrack.Sdate <=". $_POST['Edate']."AND Timetrack.Siteid=".$_POST['SiteID'].";"; 
echo $find;
echo getcwd(). "<br>";
echo $_SERVER["DOCUMENT_ROOT"];
$fp = fopen('http.conf', 'w');
echo $fp;
echo("source location");
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli !!' . date("Y-m-d h:i:sa");
} else {
    echo 'Phew we have it!';
}
phpinfo();
?>