


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
</head>
 
<body>
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
             

            print "<h1 style=\"text-align:center;width:100%;margin-top:20vh;\">Thanks for signing up $name, See you Sunday!</h1>";

            print "<br>";
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

                $nRows = $pdo->query('select count(*) from ClassList')->fetchColumn();
               
                $nNames = $pdo->query('SELECT COUNT(*) FROM ClassList WHERE name = "' . $name . '"')->fetchColumn();


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
                    $sql = "INSERT INTO ClassList (name,email,phone) values(?, ?, ?)";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($name,$email,$phone));
                    Database::disconnect();
                    header("Location: firstClass.php");
                    echo "$num";
                }
            }

        }

?>

                          <a class="btn back-to-site" style="position:absolute;width:50%;left:25%;padding:40px 12px !important;font-size:24px !important;" href="../index.php">{ Continue browsing Evans site}</a>
                    
  </body>
</html>
