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
        ?>																																														<div class="inner_copy"><a href="http://www.greatdirectories.org/">web directories</a><a href="http://www.bestfreetemplates.info/">free CSS templates</a></div>
	</div>
	<div id="header">
		<a href="index.html" class="logo"><img src="images/logo.jpeg" alt="setalpm" width="149" height="28" /></a>
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<li><a href="#"></a></li>
			
			
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
<div id="content">
<form name="usershow" method="post" action="showuser.php">
<input type="image" src="images/showuser.png">
 </form>
<br>
<form name="comshow" method="post" action="showcom.php">
<input type="image" src="images/showrecruiter.png">

</form>
<br>

<form name="Jobshow" method="post" action="showpost.php">
<input type="image" src="images/showjob.png">

</form>

</div>

</center>

    </div>
    
	<div id="footer">
		Copyright &copy;. All rights reserved. Design by <a href="http://www.bestfreetemplates.info" target="_blank" title="Free CSS templates">realoportunity.com</a> 																																																						<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div> 
	</div>
</body>
</html>
