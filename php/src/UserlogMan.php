<?php
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
//phpinfo();
//port 00 works
  $mysqli = new mysqli($host, $user2, $pass2,$dbnm,"00");
  //fmsuf
  $psw = $_REQUEST['password'];
  $find = "SELECT pwhsh FROM Employee WHERE Usernm = '". $_REQUEST['username']."' AND type <> 1;";
  
  $PW = $mysqli -> query($find);
 
  if ($PW->num_rows > 0) {    
    while($row = $PW->fetch_assoc()) {

    if( $psw == $row["pwhsh"]){
      echo "success";
    }
    }
  }
  
  $mysqli->close();
  session_start();
  $_SESSION["username"] = $_REQUEST['username'];
  ?>