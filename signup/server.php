<?php
  session_start();

  // initializing variables
  $username = "";
  $password_1="";
  $password_2="";
  $errors = array();

  $db = mysqli_connect('localhost', 'root', '', 'gov3');


  if (isset($_POST['username'])&&isset($_POST['password_1'])) {

	  $user_check_query = "SELECT * FROM user  ORDER BY uid DESC LIMIT 1";
    $result1 = mysqli_query($db, $user_check_query);
	echo $user_check_query ;
	  $user = mysqli_fetch_assoc($result1);
	  if(!mysqli_error($db)){
		//echo'updated successfully';
		//header('location: update.html') ;
	}
  $r='begin transaction';
  $re=mysqli_query($db,$r);

		if($user['uid'])
		{

			$user_enter_query='INSERT INTO user(uid) values ("'.($user['uid']+1).'")';
			$userid=($user['uid']+1);
			$result = mysqli_query($db, $user_enter_query);
			//$result = mysqli_query($db, $user_check_query);
			//echo'in uid';

		}
		else{
			$user_enter_query="INSERT INTO user(uid) values (3)";
			$userid=1;
			$result = mysqli_query($db, $user_enter_query);
			echo'in error';
		}

	  //  $result = mysqli_query($db, $user_enter_query);


    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	$_SESSION['eroor']=0;
   echo $username;
    if (empty($username)) { $_SESSION['message']= "Username is required"; $_SESSION['error']=1; }
    if (empty($passsword_2)) { $_SESSION['message']= "Confirm password is required"; $_SESSION['error']=1;}
    if (empty($password_1)) { $_SESSION['message']= "Password is required"; $_SESSION['error']=1;}
    if ($password_1 != $password_2) {
  	$_SESSION['message']= "The two passwords do not match";
	$_SESSION['error']=1;
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM logincredentials WHERE username='$username'  LIMIT 1 ";
	//echo $user_check_query;
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['username'] === $username) {
        $_SESSION['message']= "Username already exists";
        $t1='rollback';
        $q1=mysqli_query($db,$t1);
		$_SESSION['error']=1;
		echo'hi';
      }
    }

   // Finally, register user if there are no errors in the form
    if ($_SESSION['eroor']==0) {
    	$password = ($password_1);//encrypt the password before saving in the database

    	$query = 'INSERT INTO logincredentials (userid,username, password)
    			  VALUES( "'.$userid.'","'.$username.'", "'.$password.'") ';
		echo $query;
    	mysqli_query($db, $query);
   $_SESSION['userid']=$userid;
   	$_SESSION['username'] = $username;
   	$_SESSION['success'] = "You are now logged in";
    $t='commit';
    $q=mysqli_query($db,$t);
   	header('location: ../index.php');
    }
	else{
		echo'fatal error';
	}
  }
     else
    {
         header('location: ./error.php') ;
    }

?>
