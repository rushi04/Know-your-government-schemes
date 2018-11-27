 <?php
session_start();
include ("login/db.php");
$db = mysqli_connect('localhost', 'root', '', 'gov3');
if($_SESSION['logged_in'])
{
	
	$schemeid=$_POST['schemeid'];
	
	
	
	$query = 'DELETE FROM schemes
WHERE scheme_id="'.$schemeid.'" ';
  	$result = mysqli_query($db, $query);
	if(!mysqli_error($db)){
		echo'deleted successfully';
		header('location: delete.html') ;
	}
}
else {
	{
		$_SESSION['message']="Please login first";
		echo "please login first";
		header('location: login/login.html') ;
	}
}
?>