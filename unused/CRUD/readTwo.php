<?php
    session_start();

    if ($_SESSION['name'])
    {
    echo "<div style=\"padding-left:30px;padding-top:10px;height:30px;width:100%;background:#5d5895;color:#fff;margin-bottom:20vh;\">";
    echo "Hello, " . $_SESSION['name'] . "!";
    echo "</div>";
 

        require 'database.php';
        $id = null;
        if ( !empty($_GET['id'])) {
            $id = $_REQUEST['id'];
        }
         
        if ( null==$id ) {
            header("Location: logedin.php");
        } else {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM ClassListTwo where id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            Database::disconnect();
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
                        <h3>Read a Customer</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['email'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Phone Number</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['phone'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="logedin.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
