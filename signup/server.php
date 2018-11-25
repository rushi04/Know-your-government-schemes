<?php
session_start();
include ("../login/db.php");

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'gov');


if (isset($_POST['username'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { $_SESSION['message']= "Username is required"; }
  if (empty($passsword_2)) { $_SESSION['message']= "Confirm password is required"; }
  if (empty($password_1)) { $_SESSION['message']= "Password is required"; }
  if ($password_1 != $password_2) {
	$_SESSION['message']= "The two passwords do not match";
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM logincredentials WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $_SESSION['message']= "Username already exists";
    }
  }

  // Finally, register user if there are no errors in the form
  if (!$_SESSION['message']) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO logincredentials (username, password) 
  			  VALUES('$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.html');
  }
   else
  {
       header('location: ./error.php') ;
   }
}