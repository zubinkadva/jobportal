<?php
session_start();
$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);
$forgotid=$_REQUEST['txtforgotid'];

//$selquery="select emp_sq and emp_ans from emp_register where emp_eid='$forgotid'";
$result = mysql_query("select emp_sq and emp_ans from emp_register where emp_eid='$forgotid'");
	 if($row1=mysql_fetch_array($result))
	 {
	// $_SESSION['squestion']=$row1[0];
	// $_SESSION['seqans']=$row1[1];
	 //echo"$row1[0]";
	 	 	 echo $row1['emp_sq'];
	//header ("location:/jobportal/html/forgotuserform.php");
	 }
else
{
		echo"No Such User.";
}
	


?>