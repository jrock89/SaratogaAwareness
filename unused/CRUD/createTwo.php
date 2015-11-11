<?php
    session_start();

    if ($_SESSION['name'])
    {
    echo "<div style=\"padding-left:30px;padding-top:10px;height:30px;width:100%;background:#5d5895;color:#fff;margin-bottom:20vh;\">";
    echo "Hello, " . $_SESSION['name'] . "!";
    echo "</div>";




        require 'database.php';

        if ( !empty($_POST)) {
            // keep track validation errors
            $nameError = null;
            $emailError = null;
            $phoneError = null;
             
            // keep track post values
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
             
            // validate input
            $valid = true;
            if (empty($name)) {
                $nameError = 'Please enter Name';
                $valid = false;
            }
             
            if (empty($email)) {
                $emailError = 'Please enter Email Address';
                $valid = false;
            } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
                $emailError = 'Please enter a valid Email Address';
                $valid = false;
            }
             
            if (empty($phone)) {
                $phoneError = 'Please enter phone Number';
                $valid = false;
            }
             
            // insert data
            if ($valid) {
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO ClassListTwo (name,email,phone) values(?, ?, ?)";
                $q = $pdo->prepare($sql);
                $q->execute(array($name,$email,$phone));
                Database::disconnect();
                header("Location: secondClass.php");
            }
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
                        <h3>Create a Customer</h3>
                    </div>
             
                    <form class="form-horizontal" action="createTwo.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($phoneError)?'error':'';?>">
                        <label class="control-label">phone Number</label>
                        <div class="controls">
                            <input name="phone" type="text"  placeholder="phone Number" value="<?php echo !empty($phone)?$phone:'';?>">
                            <?php if (!empty($phoneError)): ?>
                                <span class="help-inline"><?php echo $phoneError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="secondClass.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
