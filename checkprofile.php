<?php
session_start();
include ("login/db.php");
$sql = 'SELECT userid from logincredentials where username="'.$_SESSION['username'].'"';
$result = $mysqli->query($sql);
if($row = $result->fetch_assoc())
{
  $userid=$row['userid'];
}
$sql = 'SELECT created FROM profiledetails WHERE userid="'.$userid.'"';
$result = $mysqli->query($sql);
if($row = $result->fetch_assoc())
{
  $us=$row['created'];
}
if($us==0)
{
  header('location: editprofile.php');
  $_SESSION['profile']=1;
}
else {

  header('location: coursesdetails-page.php');
}
 ?>
