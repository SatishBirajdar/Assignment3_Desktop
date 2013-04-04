
//Name 		: Satish Birajdar
//File Name	: config.inc
//Description : A Desktop-Specific Web App for my portfolio site leveraging using
//			    accumulated knowledge of PHP, HTML, CSS, JavaScript and MySQL.
//				This page will connect php files to MySQL


<?php
	$hostname = 'localhost';        
	$dbname   = 'Profile_Assignment'; 
	$username = 'root';             
	$password = '';                 

	mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');   //Mysql connection
	mysql_select_db($dbname) or DIE('Database name is not available!');														//select DB
?>
