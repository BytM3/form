<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <title>Form</title>
</head>
<body>

        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                            <div class="col">
                                <h1>Registration</h1>
                                <hr class="mb">
                                <label for="firstname"><b>First Name</b></label>
                                <input class="form-control" id="firstname" type="text" name="firstname" required>


                                <label for="lastname"><b>Last Name</b></label>
                                <input class="form-control" id="lastname" type="text" name="lastname" required>

                                <label for="cin"><b>ID</b></label>
                                <input class="form-control" id="cin" type="text" name="cin" required>

                                <label for="email"><b>E-mail</b></label>
                                <input class="form-control" id="email" type="email" name="email" required>

                                <label for="phonenumber"><b>Phone Number</b></label>
                                <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>
                                <hr class="mb">
                                <a  href="succ.php"><input class="btn " type="submit" name="register" id="register" value="Register"></a>
                            </div>   
                </div>
            </div>
        </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript"> 
        $(function(){
            $('#register').click(function(e){
                    <?php
                    $firstname    = $_POST['firstname'];
                    $lastname     = $_POST['lastname'];
                    $cin          = $_POST['cin'];
                    $email        = $_POST['email'];
                    $phonenumber  = $_POST['phonenumber'];
                    $sql = "INSERT INTO users (firstname, lastname,cin, email, phonenumber) VALUES(?,?,?,?,?)";
                    $stmtinsert = $db->prepare($sql);
                    $result = $stmtinsert->execute([$firstname, $lastname , $cin , $email , $phonenumber]);
                    ?>
                    swat.fire()            })  
    });
    </script>
</body>
</html>