 <?php
session_start();
include ("login/db.php");
$db = mysqli_connect('localhost', 'root', '', 'gov3');
if($_SESSION['logged_in'])
{
	$domainid=$_POST['domainid'];
	$domainname=$_POST['domainname'];
	$schemeid=$_POST['schemeid'];
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	//$resultdate=$_POST['resultdate'];
	$type1=$_POST['type1'];
	$type2=$_POST['type2'];
	$type3=$_POST['type3'];
	$schemename=$_POST['schemename'];
	$eligibilityid=$_POST['eligibilityid'];
	$applicationfee=$_POST['applicationfee'];


	$query = 'INSERT INTO schemes(domain_id,scheme_id,start_date,end_date,type1,type2,type3,scheme_name,eligibilityid,application_fee)
  			  VALUES("'.$domainid.'", "'.$schemeid.'","'.$startdate.'","'.$enddate.'","'.$type1.'","'.$type2.'","'.$type3.'","'.$schemename.'","'.$eligibilityid.'","'.$applicationfee.'")';
      echo $query;
   mysqli_query($db, $query);
	//echo' '.$startdate.' ';
	header('location: admin_index.php') ;

}
else {
	{
		$_SESSION['message']="Please login first";
		echo "please login first";
		header('location: login/login.html') ;
	}
}
?>
