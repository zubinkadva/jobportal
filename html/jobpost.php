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
<h1>JOB POST FORM</h1>

<form  method="POST" action="jopost.php">

<table align="center" cellspacing="10">
<tr>
<td colspan="2"><h3><u>Job Details</h3></td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>JobTitle.</td>
<td><input type="text" name="txtjobtitle" maxlength="100" /></td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>Job Description</td>
<td><input type="text" name="txtjobdes"/></td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>Job Experience</td>
<td><input type="text" name="txtjobexp"/></td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>


<tr>
<td>Job Place.</td>
<td><input type="tel" name="txtjobplace" maxlength="100" /></td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td colspan="2"><h3><u>Job Description</h3></td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>


<tr>
<td>
Enter Salary.
</td>
<td>
<input type="text" name="txtsal">
</td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>Functional Area</td>
<td><input type="text" name="txtfa">
</td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>KeySkill</td>
<td>
<input type="text" name="txtkeysl">
</td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>Education</td>
<td>
<textarea name="txtedu" ></textarea>
(150 Charactor)
</td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<!----- Gender ----------------------------------------------------------->
<tr>
<td>Company Contact Details</td>
<td>
<textarea name="txtcp"></textarea>
</td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
<tr><td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

</table>

</form>


</center>

    </div>
    
	 <div id="footer">
            <center>
            <a href="index.php">HOME</a> | <a href="aboutus.php">AOUT US</a> | <a href="contactus.php">CONTACT US</a>
             
            </center>
            
    All rights reserved � 2012 RealOpportunity.com
    </div> 
</body>
</html>
