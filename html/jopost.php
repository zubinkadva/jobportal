<?php
if($_REQUEST['txtjobtitle'] or $_REQUEST['txtjobdes'] or $_REQUEST['txtjobexp'] or $_REQUEST['txtjobplace'] or $_REQUEST['txtsal'] or  $_REQUEST['txtfa'] or $_REQUEST['txtkeysl'] or $_REQUEST['txtedu'] or $_REQUEST['txtcp']=="")  
{
	echo "<script>alert('All Fields Are Mendotary.')</script>";
echo "<script>document.location.href='http://localhost/jobportal/html/jobpost.php'</script>";
}


session_start();
$cname=$_SESSION['dispname'];
$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);
$query="insert into job_post values('','$cname','$_POST[txtjobtitle]','$_POST[txtjobdes]','$_POST[txtjobexp]','$_POST[txtjobplace]','$_POST[txtsal]','$_POST[txtfa]','$_POST[txtkeysl]','$_POST[txtedu]','$_POST[txtcp]')";

if (!mysql_query($query,$connection))
  {
  die('Error: ' . mysql_error());
  }
//echo "You job successfull Post Thank You.....";
/*print "<script type=\"text/javascript\">"; 
print "alert('The Job Successfully Post Thank You.')"; 
print "</script>";  */
echo "<script>alert('Your Job Successfully Post Thank You...')</script>";
echo "<script>document.location.href='http://localhost/jobportal/html/jobpost.php'</script>";
mysql_close($connection);

?>