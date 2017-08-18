<?php
$delid=$_REQUEST['txtdel'];
$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");
$db=mysql_select_db("jobportal",$connection);
$delquery="delete from com_register where com_id='$delid'";
$result = mysql_query($delquery);
header ("location:/jobportal/html/showcom.php");

?>