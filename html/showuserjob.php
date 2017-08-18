<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div class="meta">
		<div class="metalinks">
			<a href="#"><img src="images/meta1.gif" alt="" width="15" height="14" /></a>
			<a href="#"><img src="images/meta2.gif" alt="" width="17" height="14" /></a>
			
			<a href="#"><img src="images/meta4.gif" alt="" width="15" height="14" /></a>
		</div>
        <?php
		 session_start();
		//echo"Welcome".$_SESSION['dispname'];
        echo"<p>Welcome ".$_SESSION['dispname']."<a href='logout.php'> Log Out.</a></p>";
        ?>
		</div>
	</div>
	<div id="header">
		<a href="index.php" class="logo"><img src="images/logo.jpeg" alt="setalpm" width="149" height="28" /></a>
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">Employer</a></li>
			<li><a href="#">Our Career</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Help</a></li>
			
		</ul>
		<img src="images/bigpicture.jpg" alt="" width="892" height="303" />
	</div>
	<div id="content">
    <style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:#B5E61D;
text-align: center; text-decoration: underline; background-color:#000}
table{font-family: Calibri; color:#000; font-size: 11pt; font-style: normal;
text-align:; background-color: #FFF; border-collapse: collapse; border: 2px solid black}
table.inner{border: 0px}

tr{ padding-bottom: 10em;}
</style>
    

<center>
<?php
	
	$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);

$cnm=$_SESSION['dispname'];
$selquery="select * from job_post where cname='$cnm'";
$result = mysql_query($selquery);
	
	echo "<table border='1' style=\"font-size:24px\">
<tr>
<th>Job_id</th>
<th>Com Name</th>
<th>Job Title</th>
<th>Job Description</th>
<th>Job Experience</th>
<th>Job Place</th>
<th>Job Functional Area</th>
<th>Key Skill</th>
<th>Education</th>
<th>Company Profile</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['job_id'] . "</td>";
  echo "<td>" . $row['cname'] . "</td>";
  echo "<td>" . $row['jobtitle'] . "</td>";
  echo "<td>" . $row['jobdes'] . "</td>";
  echo "<td>" . $row['jobexp'] . "</td>";
  echo "<td>" . $row['jobplace'] . "</td>";
  echo "<td>" . $row['jobfarea'] . "</td>";
  echo "<td>" . $row['jobkskill'] . "</td>";
  echo "<td>" . $row['jobedu'] . "</td>";
  echo "<td>" . $row['jobcprofile'] . "</td>";
  
  echo "</tr>";
  }
echo "</table>";
echo"<form name='delfrm' method='post' action='deljobbyuser.php'>";
echo"Enter Job Id Which You Want to Delete <input type='text' name='txtdel'>    <input type='submit' value='Delete'>";
echo"</form>";
	mysql_close($connection);

	?>

</center>

    </div>
    
	 <div id="footer">
            <center>
            <a href="index.php">HOME</a> | <a href="aboutus.php">AOUT US</a> | <a href="contactus.php">CONTACT US</a>
             
            </center>
            
    All rights reserved © 2012 RealOpportunity.com
    </div> 
</body>
</html>
