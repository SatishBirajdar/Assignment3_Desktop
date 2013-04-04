<!--
Name 		: Satish Birajdar
File Name	: loginproc.php
Description : A Desktop-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, HTML, CSS, JavaScript and MySQL.
			  This page will check for Authentication.
-->

<?php

	session_start();

	include('config.inc');

	$login = mysql_query("SELECT * FROM admin_table WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "') ");
	$result = mysql_query("SELECT * FROM admin_table");

	while($row = mysql_fetch_array($result))
	{
		$_SESSION['Acc']= mysql_real_escape_string($_POST['srno']) ;
	}
	if (mysql_num_rows($login) == 1) 
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['Extra']= $_POST['Extra'];
				 
		header('Location: securedpage.php');
	}
	else 
	{		  
			header('Location: Incorrect_Login.php');
	}

?>
