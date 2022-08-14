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
echo $day;
echo $time;
$location = $day + $time + $_POST["UserID"];
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
error_reporting(E_ALL);
//get username
$username = "Error012 not found at time of creation";
//database query
$find = "SELECT Employee.Usernm,Employee.Fname, Employee.Lname ,SiteProblem.CreateDate, SiteProblem.Siteid, Site.Sitename, SiteProblem.State,SiteProblem.Pid, SiteProblem.Probloc FROM SiteProblem 
CROSS JOIN Site ON Site.Siteid= SiteProblem.Siteid
CROSS JOIN Employee ON Employee.Eid= SiteProblem.Empid;";

$result = $mysqli -> query($find);

$sql = "SELECT Sitename FROM Site";
$possibleimages = $mysqli->query($sql);


  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    $find2= "SELECT ImageLoc FROM PhoID WHERE ProblemID=".$row["Pid"];
    $result2 = $mysqli -> query($find);
    
    $imagefinder = "null";
    if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result->fetch_assoc()) {
            $imagefinder = $row2["ImageLoc"];
        }
    }

    echo $row["Usernm"].",".$row["Fname"].",".$row["Lname"].",".$row["CreateDate"].",".$row["Probloc"].",". $imagefinder.",".$row["Siteid"].",".$row["Sitename"].",".$row["State"].",".$row["Pid"]."`";
    //echo $row["Employee.Usernm"]+$row["Employee.Fname"]+$row["Employee.Lname"]+$row["SiteProblem.CreateDate"]+/*PUT MESSAGE HERE+*/ /*PUT IMAGE URL HERE+*/$row["SiteProblem.Siteid"]+$row["Site.Sitename"]+$row[" SiteProblem.State"]+$row["SiteProblem.Pid"]+"`";
    }
  } else {
    echo "0 results";
  }
  /*
foreach($result as $outter){
    echo $outter;
    foreach($outter as $OUTMOST){
      $Name =$OUTMOST;
      echo $Name;
    }
  }
  */
/*
//write file 
$addToDB = "INSERT INTO SiteProblem (Conversetitle, Empid, Siteid,Probloc,CreateDate) VALUES ("$location"," $_POST["UserID"]"," $_POST["UserSite"]","$location","$currentDate,")";
*/
?>
