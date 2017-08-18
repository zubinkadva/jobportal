<?php
/*$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);
$forgotid=$_REQUEST['txtforgotid'];*/
$to="gr8arj@hotmail.com";
$sub="FORGOT PASSWORD";
$msg="Your Password is abc";
$from="realopportunity.com@gmail.com";
mail($to,$sub,$msg,'From:'.$from);
/*$selquery="select emp_eid from emp_register where emp_eid='$forgotid'";
$result = mysql_query($selquery);
if(mysql_num_rows($result) > 0)
{*/
	/*$row = mysql_fetch_row($result);*/
	
	/*echo"Mail Send";
	else
	echo"Mail Fail";
}*/
?>
