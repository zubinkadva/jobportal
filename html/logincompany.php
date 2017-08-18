<?php
$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);

$tuname=$_POST["txtcom_eid"];
$selquery="select comeid and compass from com_register where comeid='$_POST[txtcom_eid]' and compass='$_POST[txtcom_pass]'";
$result = mysql_query($selquery);
if(mysql_num_rows($result) > 0)
{
	
	$uname=mysql_query("select comname from com_register where comeid='$tuname'");
	 $row = mysql_fetch_row($uname);
	 session_start();
	 $_SESSION['dispname']=$row[0];
	header ("location:/jobportal/html/aftercompanylogin.php");
//echo"Welcome".$_SESSION['dispname'];
}
else
{
//header ("location:/jobportal/html/index.php");

echo "<script>alert('Invalid Id Or Password.')</script>";
echo "<script>document.location.href='http://localhost/jobportal/html/index.php'</script>";

}
mysql_close($connection);
?>