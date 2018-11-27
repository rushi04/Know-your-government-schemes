 <?php
session_start();
include ("login/db.php");
$db = mysqli_connect('localhost', 'root', '', 'gov3');
$result;
if($_SESSION['logged_in'])
{
	$domainid=$_POST['domainid'];
	$domainname=$_POST['domainname'];
	$schemeid=$_POST['schemeid'];
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	$resultdate=$_POST['resdate'];
	$type1=$_POST['type1'];
	$type2=$_POST['type2'];
	$type3=$_POST['type3'];
	$schemename=$_POST['schemename'];
	$eligibilityid=$_POST['eligibilityid'];
	$applicationfee=$_POST['applicationfee'];
	
	
	$query = 'UPDATE schemes
   SET domain_id = "'.$domainid.'",
		start_date = "'.$startdate.'",
		end_date = "'.$enddate.'",
		result_date = "'.$resultdate.'",
		type1 = "'.$type1.'",
		type2 = "'.$type2.'",
		type3 = "'.$type3.'",
		scheme_name = "'.$schemename.'",
		eligibilityid = "'.$eligibilityid.'",
		application_fee = "'.$applicationfee.'" 
 WHERE scheme_id= "'.$schemeid.'" ';
  	$result = mysqli_query($db, $query);
	if(!mysqli_error($db)){
		echo'updated successfully';
		header('location: update.html') ;
	}
	else{
		
	}
	
	//echo' '.$startdate.' ';
	
	
}
else {
	{
		$_SESSION['message']="Please login first";
		echo "please login first";
		header('location: login/login.html') ;
	}
}
?>