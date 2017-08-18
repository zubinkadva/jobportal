<?php
session_start();
$autho=$_SESSION['dispname'];

$delid=$_REQUEST['txtdel'];
$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");
$db=mysql_select_db("jobportal",$connection);
$delquery="delete from job_post where job_id='$delid' and cname='$autho'";
$result = mysql_query($delquery);
header ("location:/jobportal/html/showuserjob.php");

?>