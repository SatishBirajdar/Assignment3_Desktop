<!--
Name 		: Satish Birajdar
File Name	: securedpage.php
Description : A Desktop-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, HTML, CSS, JavaScript and MySQL.
			  This is secured page and displays Users content.
-->

<?php
	session_start();
	if (!isset($_SESSION['username'])) {
			header('http://localhost/Assignment3/index.php');
	}
	 
	if (isset($_SESSION['connection'])) {
			header('http://localhost/Assignment3/Logout.php');
	}

	if (isset($_SESSION['i'])) {
			header('http://localhost/Assignment3/securedpage.php');
	}
?>


<html>
	<head>	
	  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />	
	  <title>Secured Page</title>
	</head>

	<body>
		<p>Hello... <b><?php echo $_SESSION['username']; ?></b>,<br />
		You are inside your account </p>
		<div class="logout_button">
			<form method=POST action="Logout.php">
				<?php $s=$_SESSION['username']; ?>
				<input type="submit" value="Logout" style="height: 40px; width: 87px">
			</form>
		</div>
		<div class="securedpagehead">Your Contact Details:</div>		

		<?php

			// set database server access variables:
			$host = "localhost";
			$user = "root";
			$pass = "";
			$db = "profile_assignment";

			// open connection
			$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

			// select database
			mysql_select_db($db) or die ("Unable to select database!");

			// create query
			$query = "SELECT * FROM contact_details ORDER BY Name ASC";

			// execute query
			$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

			// see if any rows were returned
			if (mysql_num_rows($result) > 0) 
			{
				// yes
				// print them one after another
				echo "<table cellpadding=10 border=1 align=center>";
				while($row = mysql_fetch_row($result)) 
				{
					echo "<tr>";
					$i=$row[0];
					echo "<td>"."<center>"."<button id='".$i."' onclick='myFunction(this.id)' style='height: 45px; width: 120px'>".$row[1]."</button>"."</center>"."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
			else
			{
				echo "No rows found!";
			}

			//Alert box for button clicked
			echo "<script type='text/javascript'> 	
				function myFunction(clicked_id) 
				{
					alert(clicked_id);
				}</script>";

			// free result set memory
			mysql_free_result($result);

			// close connection
			mysql_close($connection);

		?>

		</body>
</html>