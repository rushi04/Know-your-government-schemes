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
    $firstname=$_POST["firstname"];
      $lastname=$_POST["lastname"];
    $country=$_POST["country"];
    $statename=$_POST["statename"];
    $castename=$_POST["castename"];
    $religioncode=$_POST["religioncode"];
    $username=$_SESSION["username"];
    /*$lastname = mysqli_real_escape_string($lastname);
    $country = mysqli_real_escape_string($country);
    $statename = mysqli_real_escape_string($statename);
    $religioncode = mysqli_real_escape_string($religioncode);
    $castename = mysqli_real_escape_string($castename);*/
    $sql = 'Select userid from logincredentials where username="'.$_SESSION['username'].'"';
    $result = $mysqli->query($sql);
    echo $mysqli->error;
    if($result)
    {//echo "here";
    if($row = $result->fetch_assoc())
    {
      $userid=$row['userid'];
      $sql = 'INSERT INTO profiledetails(userid, firstname, lastname, country, statename, castename, religioncode,created)
      VALUES ("'.$userid.'","'.$firstname.'", "'.$lastname.'", "'.$country.'", "'.$statename.'", "'.$castename.'","'.$religioncode.'",1)';
      echo $sql;
      $result = $mysqli->query($sql);
      if($result)
      {
      //  echo "h1";
        $sql1 ="SELECT id from eligibility,profiledetails where religioncode=religionname AND eligibility.nationalitycountry=profiledetails.country AND eligibility.statename=profiledetails.statename";
        //echo $sql1;
        $result2 = $mysqli->query($sql1);
        if($result2){
        //  echo "h2";
        while($row1=$result2->fetch_assoc())
        {
          //  echo $row1['id'];
            $sql3 ='SELECT scheme_id from schemes where eligibilityid="'.$row1['id'].'" ';
          //  echo $sql3;
              $result1 = $mysqli->query($sql3);
              if($result1)
              {//echo "h3";
              while($row2=$result1->fetch_assoc())
              {
                $x=$row2['scheme_id'];
                 $sql4 ='INSERT into eligiblefor values("'.$userid.'","'.$x.'")';
                 $result6=$mysqli->query($sql4);
                 //echo $sql4;
               }}
               else {
                 echo "op";
               }
        }
      }
      else {
        echo $mysqli->error;
        echo "sf";
      }
      header( 'location:coursesdetails-page.php' );
      }
      else {
        echo "er";
      }
    }else {
      echo "ty";
    }}
      else
      {
        echo "nopes";
        echo $mysqli->error;
      }

  }
}

 ?>
