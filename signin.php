<?php
$title = "Login | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
          include_once("./head.php"); 
          include_once("databases/config.php");
    ?>
    <!-- #begin "login form online links @k-avin" -->
    <link rel="stylesheet" type="text/
	css" href="css/main-login.css">
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
                $password = $_POST['password'];
                $sql = "SELECT * FROM `user` WHERE `user_name` = '$username'";
                $result =mysqli_query($con,$sql);
                if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_assoc($result);
                    if($password == $row['password']){                        
                        header("Location: index.php");
                    }else{
                        echo  '<div class="alert alert-warning" role="alert">
                                    Password Wrong!
                                </div>';
                    }
                }
                else{
                    echo    '<div class="alert alert-info" role="alert">
                                User not found!
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
                <a href="#">Forgot Password?</a>
                <div class="button">
                    <input type="submit" class="lbtn" value="Signin" name="signin">
                    <input type="button" class="sbtn" value="Signup" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                </div>
                <p>All Rights Reserved. Designed and Developed by Department of Information and Communication
                    Technology, </p> 
                   
                    
                
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <form method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Signup</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body"> 
                                
                            <?php
            if(isset($_POST['signup'])){
                $number = $_POST['number'];
                $email = $_POST['email'];                
                $username = $_POST['user_name'];
                $password = $_POST['password'];
                $conform = $_POST['c_password'];
                $sql = "SELECT * FROM `students` WHERE `nic` = '$number' OR `regs` = '$number' AND `email` = '$email'";                
                $result =mysqli_query($con,$sql);
                if(mysqli_num_rows($result)){
                    $row = mysqli_fetch_assoc($result);
                    if($password == $conform){                        
                        $sql = "INSERT INTO `students` (`user_name`,`password`) VALUES ('$username','$password')";
                    }else{
                        echo  '<div class="alert alert-warning" role="alert">
                                You are Not Slgti Student
                                </div>';
                    }
                }
                else{
                    echo    '<div class="alert alert-info" role="alert">
                                User not found!
                            </div>';
                }
            }
            ?> 

                                    <div class="form-group">                                        
                                        <input type="email" class="form-control" id="inputAddress" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">                                        
                                        <input type="text" class="form-control" id="inputAddress2" name="number"
                                            placeholder="Register No / Nic No">
                                    </div>
                                    <div class="form-group">                                        
                                        <input type="text" class="form-control" id="inputAddress2" name="user_name"
                                            placeholder="User name">
                                    </div>
                                    <div class="form-row">                                        
                                        <div class="form-group col-md-6">                                            
                                        <input type="text" class="form-control" id="" placeholder="Password" name="password">                                          
                                        </div>
                                        <div class="form-group col-md-6">                                            
                                        <input type="text" class="form-control" id="" placeholder="Conform Password" name="c_password">    
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                         <button type="submit" class="btn btn-primary" name="signup">Signup</button>
                                    </div>
                                </div>
                                </form>

            
        </div>
    </div>

    <?php include_once("script.php"); ?>
    <script type="text/javascript" src="js/login/main.js"></script>
</body>
</html>