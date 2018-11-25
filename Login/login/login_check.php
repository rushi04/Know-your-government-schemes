
<?php
session_start();
include ("../login/db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
    if($_POST["username"]&&$_POST["password"])
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $sql = 'SELECT username,password
        FROM logincredentials WHERE userName="'.$username.'"';
        $result = $mysqli->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) 
        {
    	   if($username==$row["username"]){
    		  if($password==$row["password"])
              {
    			$_SESSION["logedin"]=1;
                $_SESSION["username"]=$username;
                $_SESSION["password"]=$password;
                $_SESSION["active"]=1;
                $_SESSION['logged_in'] = true;
    			header( 'location:../index.html' );
    		  }
              else
              {
    			$_SESSION['message'] = "You have entered wrong password, try again!";
                header("refresh:1;url=error.php" );
    		  }
    	   }
            else
           {
               $_SESSION['message'] = "Credentials Wrong!";
               header("refresh:1;url=error.php" );
           }
        }
    }
    else 
    {
    $_SESSION['message'] = "User with that username doesn't exist!";
    header("refresh:1;url=error.php" );
    }
    }
    else
    {
    }
}
 else
{
header("refresh:1;url=../index.php" );
}
?>