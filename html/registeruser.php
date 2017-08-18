<?php
/*if($_POST['txtemp_eid'] or $_POST['txtepass'] or $_POST['txtefname'] or $_POST['txtelname'] or $_POST['dobday'] or $_POST['txtmono']
 and $_POST['Gender'] and 
$_POST['Address'] or $_POST['txtcity'] or $_POST['txtpcode'] or $_POST['txtstate'] or $_POST['txtcountry'] or $_POST['txtgboard'] or 
$_POST['txtgper'] or 
$_POST['txtgyear'] or $_POST['txtpboard'] or $_POST['txtpper'] or $_POST['txtpyear'] or $_POST['txtoboard'] or $_POST['txtoper'] or 
$_POST['txtoyear'] or 
$_POST['exp'] or $_POST['txtkey'] or $_POST['txtcurindus'] or $_POST['txtfunarea'] or $_POST['sqs'] or $_POST['txtsans']=="")
{
	echo "<script>alert('All Fields Are Mendotary.')</script>";
echo "<script>document.location.href='http://localhost/jobportal/html/index.php'</script>";
}*/
$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);
$sqsvalue=$_REQUEST['sqs'];
$securequs="aa";
if($sqsvalue==0)
$securequs="What was your childhood nickname?";
else if($sqsvalue==1)
$securequs="What is the name of the company of your first job?";
else if($sqsvalue==2)
$securequs="What are the last 5 digits of your credit card?";
else if($sqsvalue==3)
$securequs="What is your current car registration number?";
else if($sqsvalue==4)
$securequs="What is the last name of your favorite high school teacher?";


$selquery="select emp_eid from emp_register where emp_eid='$_POST[txtemp_eid]'";
$result = mysql_query($selquery);
if(mysql_num_rows($result) > 0)
{
echo"User Already exist";
}
else
{
$query="insert into emp_register values('','$_POST[txtemp_eid]','$_POST[txtepass]','$_POST[txtefname]','$_POST[txtelname]','$_POST[dobday]','$_POST[txtmono]','$_POST[Gender]','$_POST[Address]','$_POST[txtcity]','$_POST[txtpcode]','$_POST[txtstate]','$_POST[txtcountry]','$_POST[txtgboard]','$_POST[txtgper]','$_POST[txtgyear]','$_POST[txtpboard]','$_POST[txtpper]','$_POST[txtpyear]','$_POST[txtoboard]','$_POST[txtoper]','$_POST[txtoyear]','$_POST[exp]','$_POST[txtkey]','$_POST[txtcurindus]','$_POST[txtfunarea]','$securequs','$_POST[txtsans]')";

if (!mysql_query($query,$connection))
  {
  die('Error: ' . mysql_error());
  }
echo "You register successfull";
}
mysql_close($connection);
?>