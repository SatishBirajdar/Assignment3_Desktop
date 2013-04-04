
<!--
Name 		: Satish Birajdar
File Name 	: Contact_Me.php
Description : A Desktop-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, HTML, CSS, JavaScript and MySQL.
			  This page will show my Contact details.
-->

<?php
 
if (isset($_SESSION['username'])) {
        header('http://localhost/Assignment3/securedpage.php');			//session maintained
}

?>

<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Contact Me</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />						<!--CSS linked-->
		<link href='http://fonts.googleapis.com/css?family=Underdog' rel='stylesheet' type='text/css'>		<!--google font-->
	</head>
	<body>
		<nav>
		<!--Navigation Menus-->
		<img src="images/logo.png" width="100" height="80">
			<ul>
				<li><a href="Index.html" ><img src="images/home_icon.png">Home</a></li>
				<li><a href="About_Me.html" ><img src="images/about_me_icon.png">About Me</a></li>
				<li><a href="Projects.html"><img src="images/projects_icon.png">Projects</a></li>
				<li><a href="Services.html"><img src="images/services_icon.png">Services</a></li>
				<li><a href="https://github.com/SatishBirajdar/Assignment3_Desktop.git"><img src="images/github_icon.png">GitHub</a></li>
				<li><a href="Contact_Me.php" class="selected"><img src="images/contact_me_icon.png">Contact Me</a></li>
			</ul>
		</nav>
		
		<header>
	<h1>Satish Birajdar</h1>
		
	<div class="cpartition1">   			<!--Login partition-->
		<div class="logintitle">Login:</div>
		<table border="0" align="center">
		<form method="POST" action="loginproc.php")>
		<tr><td>Username</td><td>:</td><td><input type="text" name="username" size="25"></td></tr>
		<tr><td>Password</td><td>:</td><td><input type="password" name="password" size="25"></td></tr>
		<tr></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="  Login  " style="height: 40px; width: 87px">&nbsp;<input type="reset" value="  Reset  " style="height: 40px; width: 87px"></td></tr>
		</form>
		</table>
	</div>
	
	<div class="cpartition2">				<!--contact partition-->
		<div class="para1">
			I am more comfortable working across many timezones, via Email, Skype, Google Hangouts, Google Talk and Phone. The right questions 
			are asked and treat it as our own. If you happen to be around here, we'll let's go out for a drink. Cheers!
		</div>

		<h3>BEST WAYS TO MAKE CONTACT :<br /></h3>
				
				Email: satishbirajdar@hotmail.com<br />
				&nbsp;&nbsp	   satishbirajdar1@gmail.com<br />
				Skype: satish.birajdar4<br />
				Mb. Number:7055002786<br />
				US Time: Monday to Saturday - 8 am to 11 pm <br />
				Asian Time:  Monday to Saturday - 6.30 pm to 9.30 am<br />
	</div>
	<div class="align_right"> Stay Connected:<br />
		<a href="http://www.facebook.com/pages/Web-Sailor/105607992942862?skip_nax_wizard=true"><img src="images/facebook.png" class="align_right" height="50px" width="50px"></a>
		<a href="https://twitter.com/satish_birajdar"><img src="images/twitter.png" class="align_right" height="50px" width="50px"></a>
	</div>
	
		<div class="footer1"><strong><em>copyright @ Web Sailor. All rights reserved, 2013</em></strong></div>
	</body>
</html>