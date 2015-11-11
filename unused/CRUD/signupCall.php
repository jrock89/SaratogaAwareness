<html>
<head>
	<title>Signup Output</title>
</head>
<body>
	

	<?php
		// error_reporting(E_ALL);
		// ini_set('display_errors','1');

		include("connectDB.php");

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		print "<h1>Thanks for signing up $name, See you Sunday!</h1>";

		print "<br>";



		$query = "SELECT * FROM ClassList WHERE name = '$name'";
		$queryResult = mysql_query($query);
		$num = mysql_num_rows($queryResult);

		if($num == 0){


		if(mysqli_connect_errno()){
			printf("Connect Failed: $s\n", mysqli_connect_error());
			exit();
		}
		else
		{
			$table = "CREATE TABLE ClassList
					(
					id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					name varchar( 100 ) NOT NULL,
					email varchar( 100 ) NOT NULL,
					phone varchar( 100 ) NOT NULL
					)";

			$tableresult = mysql_query($table, $DBConnect);

			$SQLStringVisitors = "INSERT INTO ClassList
								VALUES ('$name', '$email', '$phone')";

			$QueryResultClassList = mysql_query($SQLStringVisitors, $DBConnect);

			if($QueryResultClassList === FALSE)
			{
				echo "<p>Unable to execute the query.</p>" . "<p>Error code:</p>";
			}
			else
			{
				echo "<h3>Name: $name <br>Class: Awareness Through Movement <br>When: This Sunday, 11:00.";
			}


		}




		}
		else
		{
			echo "You are already signed up";
		}






		
	?>

	<br>
	<br>
	<a href="../index.php"><button>{ Head back and Explore Feldenkrais with Evan }</button></a>

</body>
</html>