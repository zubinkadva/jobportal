<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />


<body text="#000000"  >
	<div class="meta">
		<div class="metalinks">
			
		</div>
        
        <?php
		 session_start();
		//echo"Welcome".$_SESSION['dispname'];
        echo"<p>Welcome ".$_SESSION['dispname']."<a href='logout.php'> Log Out.</a></p>";
        ?>
        
																																															<div class="inner_copy"><a href="http://www.greatdirectories.org/">web directories</a><a href="http://www.bestfreetemplates.info/">free CSS templates</a></div>
	</div>
	<div id="header">
		<a href="index.php" class="logo"><img src="images/logo.jpeg" alt="setalpm" width="149" height="28" /></a>
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<li><a href="#"></a></li>
			
			
		</ul>
		    
        
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Volkhov:400italic,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.13303.js"></script>
	</head>
	
    
    
   	  <div style="width:80%;height:auto;left:30%;position:relative;">
        <img src="images/7.jpg"/ width="100%" height="420">
        </div>
		
         <br><br><br><br><br>
	

<center>


<?php
	
	$connection=mysql_connect("localhost","root","")or die("Unable to connect to a Data base");

$db=mysql_select_db("jobportal",$connection);


$selquery="select * from job_post";
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
echo"<form name='delfrm' method='post' action='deljob.php'>";
echo"Enter Job Id Which You Want to Delete <input type='text' name='txtdel'>    <input type='submit' value='Delete'>";
echo"</form>";
	mysql_close($connection);

	?>
</center>
       
</div>
	</div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br>
    <br><br><br><br><br>
   
   
       
        <br>
        <br><br><br><br><br>
             
			
</body>
</html>
