<?php

$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);

$tuname=$_POST["txtemp_eid"];
$selquery="select emp_eid and emp_pass from emp_register where emp_eid='$_POST[txtemp_eid]' and emp_pass='$_POST[txtemp_pass]'";
$result = mysql_query($selquery);
if(mysql_num_rows($result) > 0)
{
	
	$uname=mysql_query("select emp_fname from emp_register where emp_eid='$tuname'");
	 $row = mysql_fetch_row($uname);
	 session_start();
	 $_SESSION['dispname']=$row[0];
	header ("location:/jobportal/html/afteruserlogin.php");
//echo"Welcome".$_SESSION['dispname'];
}
else
{
/*echo "<script>alert('Invalid Id Or Password.')</script>";
echo "<script>document.location.href='http://localhost/jobportal/html/index.php'</script>";*/
echo "<script>alert('Please Sing In Or Sing Up For Search A Job.')</script>";
echo "<script>document.location.href='http://localhost/jobportal/html/index.php'</script>";

}
if($_SESSION['dispname']==NULL)
header ("location:/jobportal/html/index.php");
mysql_close($connection);
?>