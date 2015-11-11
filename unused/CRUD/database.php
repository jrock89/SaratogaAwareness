<html>
<head>
	<title></title>
</head>
<body>
	
	<?php


		// $HostName = "localhost";
		// $UserName = "root";
		// $Password = "root";
		// $DBName = "evanScheduler";

		// $DBConnect = mysql_connect($HostName, $UserName, $Password) or die("Unable to connect to $DBName");

		// mysql_query("CREATE DATABASE $DBName");

		// Mysql_select_db($DBName)or die("Unable to select $DBName");

		class Database
		{
			private static $dbName = 'evanScheduler';
			private static $dbHost = 'localhost';
			private static $dbUsername = 'root';
			private static $dbUserPassword = 'root';

			private static $cont = null;

			public function __construct() {
				die('Init function is not allowed');
			}

			public static function connect()
			{
				if (null == self::$cont )
				{
					try
					{
						self::$cont = new PDO( "mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
					}
					catch(PDOException $e)
					{
						die($e->getMessage());
					}
				}
				return self::$cont;
			}

			public static function disconnect()
			{
				self::$cont = null;
			}
		}


	?>
</body>
</html>