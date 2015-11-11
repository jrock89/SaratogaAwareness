<?php
session_start();

$name =  $_POST['name'];
$password = $_POST['password'];

if ($name&&$password)
{
    $HostName = "localhost";
    $UserName = "root";
    $Password = "root";
    $DBName = "phplogin";

    $DBConnect = mysql_connect($HostName, $UserName, $Password) or die("Unable to connect to $DBName");

    Mysql_select_db($DBName)or die("Unable to select $DBName");

    $query = mysql_query("SELECT * FROM users WHERE name ='$name'");

    $numRows = mysql_num_rows($query);

    if ($numRows!=0)
    {
        while($row = mysql_fetch_assoc($query))
        {
            $dbName = $row['name'];
            $dbPassword = $row['password'];


        }
        //check to see if they match
        if ($name==$dbName&&$password==$dbPassword)
        {
            echo "<div style=\"font-size:26px;height:500px;width:300px;margin:25vh auto;text-align:center\">";
            echo "Thanks for logging in ". $name . "!";
            echo "<br>";
            echo "<a href=\"schedule.php\"><button style=\"cursor:pointer;padding:5px;background:#5BB75B;font-size:21px;border-radius:5px;border:none;color:#fff; margin:30px auto;\">View Class Schedule</button></a>";
            echo "</div>";

            $_SESSION['name']=$dbName;

        }
        else
        {
            echo "<h3 style=\"width:200px;height:100px;text-align:center;margin:0 auto;margin-top:25vh;\">Incorrect password!<br><a href=\"login.php\" style=\"text-decoration:none;color:#62C462\"><em>Please Try Again</em></a></h3>";
        }

    }
    else
    {
        die("That user doesn't exist!");
    }


}
else
{
    die("<a href=\"login.php\"><h1>Please Log In.</h1></a>");
}

?>


