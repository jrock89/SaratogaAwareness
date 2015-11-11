<?php  
session_start();

if ($_SESSION['name'])
{
	echo "<div style=\"padding-left:30px;padding-top:10px;height:30px;width:100%;background:#5d5895;color:#fff;margin-bottom:20vh;\">";
	echo "Hello, " . $_SESSION['name'] . "!";
	echo "</div>";
}
else
{
	die("<h3 style=\"width:200px;height:100px;text-align:center;margin:0 auto;margin-top:25vh;\">You must be logged in.<br><a href=\"login.php\" style=\"text-decoration:none;color:#62C462\"><em>Please Log In</em></a></h3>");
}

?>


<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Evan VanDyk</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="/favicon.ico">


        <link   href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <!-- 11:30 table -->
  <div class="row">
    <h3>Awareness Through Movement Class</h3>
  </div>
  <div class="row">
    <p>
      <a href="firstClass.php" class="btn btn-success">ATM - 11:30am</a>
    </p>
    <p>
      <a href="secondClass.php" class="btn btn-success">ATM - 1:00pm</a>
    </p>
    <br>
    <br>
    <p>
      <a href="../index.php" class="btn btn-success">Back to EvanVanDyk.com</a>
    </p>


  </div>
</div>

</body>
</html>