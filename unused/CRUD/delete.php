<?php

    session_start();

    if ($_SESSION['name'])
    {
        echo "<div style=\"padding-left:30px;padding-top:10px;height:30px;width:100%;background:#5d5895;color:#fff;margin-bottom:20vh;\">";
        echo "Hello, " . $_SESSION['name'] . "!";
        echo "</div>";

        require 'database.php';
        $id = 0;
         
        if ( !empty($_GET['id'])) {
            $id = $_REQUEST['id'];
        }
         
        if ( !empty($_POST)) {
            // keep track post values
            $id = $_POST['id'];
             
            // delete data
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM ClassList WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
           
            Database::disconnect();
            header("location: firstClass.php");
             
        }
    }
    else
    {
        die("<h3 style=\"width:200px;height:100px;text-align:center;margin:0 auto;margin-top:25vh;\">You must be logged in.<br><a href=\"login.php\" style=\"text-decoration:none;color:#62C462\"><em>Please Log In</em></a></h3>");
    }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a Customer</h3>
                    </div>
                     
                    <form class="form-horizontal" action="delete.php" method="post" data-ajax=false>
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      <p class="alert alert-error">Are you sure you want to delete?</p>
                      <div class="form-actions">
                          <a href="firstClass.php"><input type="submit" value="Yes" class=""></a>
                          <a class="btn" href="firstClass.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
