<?php
     
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

                $nRows = $pdo->query('select count(*) from ClassListTwo')->fetchColumn();
                

                $nNames = $pdo->query('SELECT COUNT(*) FROM ClassListTwo WHERE name = "' . $name . '"')->fetchColumn();

                echo "$nNames";

                if($nNames >= 1)
                {
                    print "You have already signed up for this class.";
                    
                }
                else if($nRows >= 10)
                {
                    print "Sorry this class is full";
                }
                else
                {
                    $sql = "INSERT INTO ClassListTwo (name,email,phone) values(?, ?, ?)";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($name,$email,$phone));
                    Database::disconnect();
                    header("Location: secondClass.php");
                    echo "$num";
                }
            }
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


                          <a class="btn" href="../index.php">{ Continue browsing Evans site}</a>
  </body>
</html>
