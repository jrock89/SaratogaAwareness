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
    <h3>Awareness Through Movement Class 11:30am</h3>
  </div>
  <div class="row">
    <p>
      <a href="create.php" class="btn btn-success">Create</a>
    </p>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email Address</th>
          <th>Phone Number</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php


        include("database.php");
         $pdo = Database::connect();
         $sql = 'SELECT * FROM ClassList ORDER BY id DESC';
         foreach ($pdo->query($sql) as $row) {
                  echo '<tr>';
                  echo '<td>'. $row['name'] . '</td>';
                  echo '<td>'. $row['email'] . '</td>';
                  echo '<td>'. $row['phone'] . '</td>';
                  echo '<td width=250>';
                  echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                  echo ' ';
                  echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                  echo ' ';
                  echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                  echo '</td>';
          }
       
           Database::disconnect();



          ?>
      </tbody>
    </table>
  </div>
</div>


    <p style="margin:0 auto;width:200px;">
      <a href="schedule.php" class="btn btn-success">Choose a different class</a>
    </p>



</body>
</html>