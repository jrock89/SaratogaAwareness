<!-- Page for Evan to log in and check the sign up list -->


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Evan VanDyk</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- <link rel="stylesheet" href="css/main.css"> -->
        <link   href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <section id="loginBody">

        <div class="container" style="margin-top:20vh">
         
                    <div class="span10 offset1">
                        <div class="row">
                            <h3>Please Log In</h3>
                        </div>
                 
                        <form class="form-horizontal" action="logedin.php" method="post">
                          <div class="control-group">
                            <label class="control-label">Name</label>
                            <div class="controls">
                                <input name="name" type="text"  placeholder="Name" required>

                                    <span class="help-inline"></span>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls">
                                <input name="password" type="password" placeholder="Password" required>
                                
                                    <span class="help-inline"><?php echo $emailError;?></span>
                            
                            </div>
                          </div>
                         
                          <div class="form-actions">
                              <button type="submit" class="btn btn-success">Login</button>
                              <a class="btn" href="../index.php">Back To EvanVanDyk.com</a>
                            </div>
                        </form>
                    </div>
                     
        </div> <!-- /container -->

    </section>
</body>
</html>