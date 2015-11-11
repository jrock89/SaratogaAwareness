<?php

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

// username Jrock
// password Lemon1989
mysql_connect("localhost", "Jrock", "Lemon1989") or die ('Could not connect to the server.');

mysql_select_db("SAEmailList") or die('Could no find the database.');

$sql = "INSERT INTO EmailList (Name, Email, Telephone)
        VALUES
        ('$name','$email','$telephone')";

$query = mysql_query($sql);

mysql_close();

?>

<script type="text/javascript">
  window.location.href = "index.php";
</script>
