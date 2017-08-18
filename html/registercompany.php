<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<script language="javascript">
function isDigits(argvalue) {
argvalue = argvalue.toString();
var validChars = "0123456789";
var startFrom = 0;
	if (argvalue.substring(0, 2) == "0x") {
	validChars = "0123456789abcdefABCDEF";
	startFrom = 2;
	}
	else if (argvalue.charAt(0) == "0") {
	validChars = "01234567";
	startFrom = 1;
	}
		for (var n = 0; n < argvalue.length; n++) {
			if (validChars.indexOf(argvalue.substring(n, n+1)) == -1) return false;
		}
		
return true;
}
function reset_data() 
{
	registercompany.txtcom_eid.value="";
	registercompany.txtcom_pass.value="";
	registercompany.txtcom_name.value="";
	registercompany.txtcom_add.value="";
	registercompany.txtcom_web.value="";
	registercompany.txtcom_per.value="";
	registercompany.txtcom_mono.value="";
	registercompany.txtcom_city.value="";
	registercompany.txtcom_pcode.value="";
	registercompany.txtcom_state.value="";
	
}
<body>
	<div class="meta">
		<div class="metalinks">
			<a href="#"><img src="images/meta1.gif" alt="" width="15" height="14" /></a>
			<a href="#"><img src="images/meta2.gif" alt="" width="17" height="14" /></a>
			
			<a href="#"><img src="images/meta4.gif" alt="" width="15" height="14" /></a>
		</div>
		<p>Recruiters: <a href="#">Log in</a> or <a href="registeruser.htm">Register.</a></p>																																															<div class="inner_copy"><a href="http://www.greatdirectories.org/">web directories</a><a href="http://www.bestfreetemplates.info/">free CSS templates</a></div>
	</div>
	<div id="header">
		<a href="index.html" class="logo"><img src="images/logo.jpeg" alt="setalpm" width="149" height="28" /></a>
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
    <div id="content">
   
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:#B5E61D;
text-align: center; text-decoration: underline; background-color:#000}
table{font-family: Calibri; color:#000; font-size: 11pt; font-style: normal;
 background-color: #FFF;  border: 2px solid black}
table.inner{border: 0px}

tr{ padding-bottom: 10em;}
</style>


<center>
<h1>RECRUTER REGISTRATION FORM</h1>

<form  method="POST" action="companyregister.php">

<table border="0" cellSpacing="1" cellPadding="3"  >
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td colspan="2"><h3><u>Create Account</h3></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>EMAIL ID</td>
<td><input type="text" name="txtcom_eid" maxlength="100" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>ENTER PASSWORD</td>
<td><input type="password" name="txtcom_pass" maxlength="100" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>CONFIRM PASSWORD</td>
<td><input type="password" name="txtcom_passc" maxlength="100" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td colspan="2"><h3><u>Contact Details</h3></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>
Enter Company Name.
</td>
<td>
<input type="text" name="txtcom_name">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>Company Address</td>
<td><textarea name="txtcom_add" maxlength="150"></textarea>
(max 150 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>
Enter Company WebSite.
</td>
<td>
<input type="text" name="txtcom_web">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>


<tr>
<td>COntact Person</td>
<td>
<input type="text" name="txtcom_per"  />
(Name Of The Person)
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="txtcom_mono" maxlength="10" />
(10 digit number)
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<!----- Gender ----------------------------------------------------------->
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<!----- Address ---------------------------------------------------------->


<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="txtcom_city" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>PIN CODE</td>
<td><input type="text" name="txtcom_pcode" maxlength="6" />
(6 digit number)
</td>
</tr>


<!----- State ---------------------------------------------------------->
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>STATE</td>
<td><input type="text" name="txtcom_state" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Country ---------------------------------------------------------->
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td>COUNTRY</td>
<td><input type="text" name="txtcom_cont" value="India" readonly /></td>
</tr>


<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
<tr>
<td>&nbsp;</td>
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
            
    All rights reserved © 2012 RealOpportunity.com
    </div> 
</body>
</html>
