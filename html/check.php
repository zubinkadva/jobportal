<?php
$adminid=$_REQUEST['txtadminid'];
$adminpass=$_REQUEST['txtadminpass'];
if($adminid=="admin" and $adminpass=="admin")
{
	session_start();
	$_SESSION['dispname']="admin";
		header ("location:/jobportal/html/admin.php");
}
else
{
		print "<script type=\"text/javascript\">"; 
print "alert('Invalid User Name Or Password')"; 
print "</script>"; 

}
?>