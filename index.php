<?php
session_start();
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>

    <!-- #1 Insert Your Content-->
    <?php
$title = "Login | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        //   include_once("./head.php"); 
          include_once("databases/config.php");
    ?>
        <?php
            // define( 'DB_HOST', 'tvec.achchuthan.org' );
            // define( 'DB_USER', 'ermsuser' );
            // define( 'DB_PASS', '!23$cfDSrt67' );
            // define( 'DB_NAME', 'erms' );

            // $con = mysqli_connect( 'tvec.achchuthan.org', 'ermsuser', '!23$cfDSrt67', 'erms' );
            // if ( mysqli_connect_errno() ) {
            //     echo 'Failed to connect to MySQL: ' . mysqli_connect_error();

            // }  
        ?>
        
        <!-- #begin "login form online links @k-avin" -->
        <link rel="stylesheet" type="text/css" href="css/main-login.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <!-- #end "login form online links @k-avin" -->
        <!-- login form online icon script @k-avin -->
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <!-- end @k-avin script -->
    </head>

    <body>
        <?php 
         if(isset($_POST['signin'])){
            $username = $_POST['username'];
            echo $password = ($_POST['password']);
            $sql = "SELECT * FROM `user` WHERE `user_name` = '$username'";
            $result =mysqli_query($con,$sql);
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_assoc($result);
                $type=$row['user_type'];
                if($password == $row['password'] && $type=="lecturer" ){
                    $_SESSION['username'] = $username;
                    header("Location: admin/index.php");
                }
                else if($password == $row['password'] && $type=="student" ){
                    $_SESSION['username'] = $username;
                    header("Location: students/index.php");
                }
                else {
                        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> Password is wrong!</strong> check your password or user name then press the signin button.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                    }
                    
                }            
            else{
                echo    '<div class="alert alert-info" role="alert">
                user not found!
                        </div>';
            }
        }
    ?>
        <div class="container">
            <div class="img">
                <img src="img/main-cover.svg">
            </div>
            <div class="login-content">

                <form method="post">
                    <h2 class="title">Welcome to</h2>
                    <p class=" text-center mb-4 blockquote-footer">Exam Result Management System</p>
                    <img class="user-img" src="img/user.jpg">
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input" name="username">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input" name="password">
                        </div>
                    </div>
                    <a href="#">About the application</a>
                    <div class="button">
                        <input type="submit" class="lbtn" value="Signin" name="signin">
                        <input type="button" class="sbtn" value="Reset" class="btn btn-primary" data-toggle="modal"
                            data-target="#staticBackdrop">
                    </div>
                    <p>All Rights Reserved. Designed and Developed by Department of Information and Communication
                        Technology.</p>


                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md">
                            <form method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Reset password</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputAddress2" name="number"
                                                placeholder="Register No / Nic No">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputAddress2" name="user_name"
                                                placeholder="User name">
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="email" class="form-control" id="inputAddress" name="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputAddress2" name="Verify"
                                                placeholder="Verification code">
                                        </div> -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="password" class="form-control" id=""
                                                    placeholder="New Password" name="new_password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="password" class="form-control" id=""
                                                    placeholder="Conform Password" name="c_password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="forgot">Reset</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                    <?php include_once("script.php"); ?>
                    <script type="text/javascript" src="js/login/main.js"></script>
    </body>

    </html>
    <!-- #1 Insert Your Content" -->
    </div>
    </div>
    </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>