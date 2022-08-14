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
  if(empty(trim($_POST["username"]))){
    $username_err = "Please enter a username.";
  }  elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"])))
  {
    $username_err = "Username can only contain letters, numbers, and underscores.";
  }else{
    //find username query
    $find = "SELECT Usernm FROM Employee WHERE Usernm = ". $_POST["username"];
    //make query 
    $rownumb = $conn -> query($find);
    //check if only one name is returned should there is a unique index on the DB
    if($rownumb->num_rows == 1){
    //make password query
    $find2 = "SELECT pwhsh FROM Employee WHERE Usernm = ". $_POST["username"];
    $result = $conn -> query($find);
      //check if they match 
    $pwresult == $conn -> query($find2);
    $passwordcheck = "";
    //export readible version of the password this only works if there is 1 password
    foreach($pwresult as $outter){
      foreach($outter as $OUTMOST){
        $passwordcheck =$OUTMOST;
      }
    }
    if($_POST["password"]==$OUTMOST){
      echo("success for user "+ .$_POST["username"])
    }
  }
  }
  $mysqli->close();
  ?>