<?php
//make CSV for image write USERID,Fname,Lname,USERSITE,ImageNM,Image,Creationdate,creationtime,Message
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$user = 'PHP';
$pass = 'Sitetrack1!';
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$username = "";
$password = "";
$confirm_password = "";
$username_err = "";
$password_err = "";
$confirm_password_err = "";
$UserID ="";
$userSite ="";
$ImageNm = "NoImageUploaded";
$Image = "NoImageUploaded";
$Message ="";
$day = date("Y-m-d");
$time = date("h:i:sa");
$reportName = "Report";

$location = $day + $time + $_POST["UserID"];
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
//get username
$username = "Error012 not found at time of creation";

$find = "SELECT Employee.Usernm,Employee.Fname, Employee.Lname ,SupplyReq.CreateDate, SupplyReq.Siteid, Site.Sitename, SupplyReq.State,SupplyReq.Sid, SupplyReq.Reqloc FROM SupplyReq 
CROSS JOIN Site ON Site.Siteid= SupplyReq.Siteid
CROSS JOIN Employee ON Employee.Eid= SupplyReq.Empid;";

$result = $mysqli -> query($find);

$sql = "SELECT Sitename FROM Site";


  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    $find2= "SELECT ImageLoc FROM PhoID WHERE ProblemID=".$row["Sid"];
    $result2 = $mysqli -> query($find2);
    
    $imagefinder = "null";
    if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result->fetch_assoc()) {
            $imagefinder = $row2["ImageLoc"];
        }
    }
  
    echo $row["Usernm"].",".$row["Fname"].",".$row["Lname"].",".$row["CreateDate"].",".$row["Reqloc"]. ",".$imagefinder.",".$row["Siteid"].",".$row["Sitename"].",".$row["State"].",".$row["Sid"]."`";
    }
  } else {
    echo "0 results";
  }
?>
