<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />


<body text="#000000" >
	<div class="meta">
		<div class="metalinks">
			
		</div>
        
        <?php
		  session_start();
		//echo"Welcome".$_SESSION['dispname'];
        
        if($_SESSION['dispname']==NULL)
header ("location:/jobportal/html/index.php");
else
        echo"<p>Welcome ".$_SESSION['dispname']."<a href='logout.php'> Log Out.</a></p>";
        ?>
        
																																															<div class="inner_copy"><a href="http://www.greatdirectories.org/">web directories</a><a href="http://www.bestfreetemplates.info/">free CSS templates</a></div>
	</div>
	<div id="header">
		<a href="index.php" class="logo"><img src="images/logo.jpeg" alt="setalpm" width="149" height="28" /></a>
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			
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
        <img src="images/Job.jpg"/ width="100%" height="420">
        </div>
		
         <br><br><br><br><br>
	
			<div style="position:relative; left:17%; width:80%; height:auto">
            
            <marquee>
            
            
            </marquee>
            <br><br><br><br><br>
            <form action="jobpost.php"> 
            <center>
            <input type="image" src="background/postajob.png">
            </center>
            </form>
            
            <form action="showuserjob.php">
            <center>
            <input type="image" src="background/deletejob.png">
            </center>
            </form>
            </div>

	</div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br>
    <br><br><br><br><br>
   
   
       
        <br>
        <br><br><br><br><br>
              <div id="footer">
            <center>
            <a href="index.php">HOME</a> | <a href="aboutus.php">AOUT US</a> | <a href="contactus.php">CONTACT US</a>
             
            </center>
            
    All rights reserved © 2012 RealOpportunity.com
    </div> 
			
</body>
</html>
