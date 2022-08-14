<?php
echo "start";
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
$location = $day + $time + $_POST["UserID"]
$ExportCSV ="1,2,3,4,5";
$mysqli = new mysqli($host, $user, $pass);
error_reporting(E_ALL);

//add write for reference in server for images 
if(isset($_POST['ImageName'])){
$imgname = $_POST['ImageName'];
$imsrc = base64_decode($_POST['base64']);
$fp = fopen($imgname, 'w');
fwrite($fp, $imsrc);
if(fclose($fp)){
 echo "Image uploaded";
}else{
 echo "Error uploading image";
}
}

//if there is no image don't write with image values
if(isset($_POST['ImageName'])){
    $ExportCSV=$UserID+","+$Fname+","+$LName+","+$userSite+","+$imgname+","+$day+","+$time+","+$Message;
}else{
    $ExportCSV=$UserID+","+ $FName+","+$LName+","+$userSite+","+"NoImageUploaded"+","+$day+","+$time+","+$Message;
}
//write file 
fwrite($location, $txt);
fclose($myfile);
$addToDB = "INSERT INTO SupplyReq (Conversetitle, Empid, Siteid,Reqloc,CreateDate) VALUES ("$location"," $_POST["UserID"]"," $_POST["UserSite"]","$location","$currentDate,")";

?>
