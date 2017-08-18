<?php
$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);


$selquery="select comeid from com_register where comeid='$_POST[txtcom_eid]'";
$result = mysql_query($selquery);
if(mysql_num_rows($result) > 0)
{
	echo "<script>alert('User Already Exist.')</script>";
echo "<script>document.location.href='http://localhost/jobportal/html/registercompany.htm'</script>";
//echo"User Already exist";
}
else
{
$query="insert into com_register values('','$_POST[txtcom_eid]','$_POST[txtcom_pass]','$_POST[txtcom_name]','$_POST[txtcom_add]','$_POST[txtcom_web]','$_POST[txtcom_per]','$_POST[txtcom_mono]','$_POST[txtcom_city]','$_POST[txtcom_pcode]','$_POST[txtcom_state]','$_POST[txtcom_cont]')";

if (!mysql_query($query,$connection))
  {
  die('Error: ' . mysql_error());
  }
  echo "<script>alert('You register successfully.')</script>";
  echo "<script>document.location.href='http://localhost/jobportal/html/index.php'</script>";
//echo "You register successfull";
}
mysql_close($connection);
?>