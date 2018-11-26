<?php
session_start();
include ("login/db.php");

$sql = 'SELECT username,firstnamme
FROM profiledetails WHERE username="'.$username.'"';
$result = $mysqli->query($sql);



if($_SESSION['profile']==0)
{
  header('location: editprofile.php');
  $_SESSION['profile']=1;
}
else {

  header('location: coursesdetails-page.php');
}
 ?>
