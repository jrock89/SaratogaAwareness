<?php  
session_start();

session_destroy();

echo "You've been logged out <a href=\"login.php\">Click herer to log back in</a>";


?>