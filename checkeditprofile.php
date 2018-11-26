<?php
session_start();
include ("login/db.php");
$firstname="";
$lastname="";
$country="";
$statename="";
$castename="";
$religioncode="";
$username="";
if($_SESSION['logged_in']==1)
{
  if($_POST['submit'])
  {
    $lastname=$_POST["lastname"];
    $country=$_POST["country"];
    $statename=$_POST["statename"];
    $castename=$_POST["castename"];
    $religioncode=$_POST["religioncode"];
    $username=$_SESSION["username"];
    $username = mysqli_real_escape_string($username);
    $lastname = mysqli_real_escape_string($lastname);
    $country = mysqli_real_escape_string($country);
    $statename = mysqli_real_escape_string($statename);
    $religioncode = mysqli_real_escape_string($religioncode);
    $username = mysqli_real_escape_string($username);
    echo 'its fine till here'.$_SESSION['username'];
    $sql = 'Select uid from logincredentials where username=."'$username'".';
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    echo $row["uid"];
  }
}
/*  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $country=$_POST["country"];
  $statename=$_POST["statename"];
  $castename=$_POST["castename"];
  $religioncode=$_POST["religioncode"];
  $username=$_SESSION["username"];

  $sql = 'INSERT INTO profiledetails (userid, firstname, lastname, country, statename, castename, religioncode)
  VALUES ($username, $firstname, $lastname, $country, $statename, $castename,)';

  $result = $mysqli->query($sql);
  if($result==true)
  {
  header( 'location:coursesdetails-page.php' );
  }
  else {
    header( 'location:editprofile.php' );


}*/

 ?>
