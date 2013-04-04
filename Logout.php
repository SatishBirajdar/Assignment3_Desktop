<!--
Name 		: Satish Birajdar
File Name	: Logout.php
Description : A Desktop-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, HTML, CSS, JavaScript and MySQL.
			  This is page is called to break all the connection with MySQL
-->

<?php
 
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['connection']);
	session_destroy();						//session destroy
	mysqli_close($connection);				//connection close
	header('Location: Contact_Me.php');		//link to page

?>

 