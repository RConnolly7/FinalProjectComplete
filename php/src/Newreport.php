<?php
//make CSV for image write USERID,Fname,Lname,USERSITE,ImageNM,Image,Creationdate,creationtime,Message
$host = 'Database';
$user2 = "root";
$pass2 = "example";
$user = 'PHP';
$pass = 'Sitetrack1!';
$dbnm = 'mwsitetrack';
$dbPort = "3306";
$UserID =$_REQUEST["UserID"];
$userSite =$_REQUEST["Site"];
$ImageNm = "NoImageUploaded";
$Image = "NoImageUploaded";
$Message ="";
$day = date("Y-m-d");
$time = date("h:i:sa");
$reportName = "Report";
echo $day;
echo $time;
$location = $day + $time + $_REQUEST["UserID"];
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user, $pass);
error_reporting(E_ALL);
$currentDate = $day;

$mysqli = new mysqli($host, $user2, $pass2,$dbnm,00);
//make request for employee
$query= "SELECT location FROM Site WHERE Siteid= ".$_REQUEST['Siteid'].";";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $locationName = $row["location"];
        }
    }

$find = "SELECT Fname,Lname,Usernm,type FROM Employee WHERE Eid = ".$_REQUEST['UserID'].";";
$result = $mysqli->query($find);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $Fname = $row["Fname"];
    $LName=$row["Lname"];
    }
}
//add write for reference in server for images 
if(isset($_REQUEST['ImageName'])){
$imgname = $_REQUEST['ImageName'];
$imsrc = base64_decode($_REQUEST['base64']);
$fp = fopen($imgname, 'w');
fwrite($fp, $imsrc);
if(fclose($fp)){
 echo "Image uploaded";
}else{
 echo "Error uploading image";
}
}

//if there is no image don't write with image values
if(isset($_REQUEST['ImageName'])){

}else{

}
//write file 
$ExportCSV=$_REQUEST['TheMessage'];
fwrite($location, $txt);
fclose($myfile);
$addToDB = "INSERT INTO SiteProblem (Conversetitle, Empid, Siteid,Probloc,CreateDate) VALUES (".$location.",". $_REQUEST["UserID"]."," .$_REQUEST["UserSite"].",'".$ExportCSV."','".$currentDate."')";
$addDbLink = ($mysqli , "INSERT INTO SiteProblem (Conversetitle, Empid, Siteid,Probloc,CreateDate) VALUES (".$location.",". $_REQUEST["UserID"]."," .$_REQUEST["UserSite"].",'".$ExportCSV."','".$currentDate."')");
$insertstate = "INSERT INTO SitePhoto (ImageLoc,SiteID,ProblemID) VALUES (".$imgname.",".$_REQUEST["UserSite"].",".$addDbLink.");";
?>
