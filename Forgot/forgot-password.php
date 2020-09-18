<?php
$title = "Reset";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
          include_once("../head.php"); 
          include_once("../databases/config.php");
    ?>
    <!-- #begin "login form online links @k-avin" -->   
    <link rel="stylesheet" type="text/css" href="../css/main-login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- #end "login form online links @k-avin" -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- login form online icon script @k-avin -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!-- end @k-avin script -->
</head>

<body>        
<?php 
         if(isset($_POST['reset'])){
            $uid = $_GET['id'];
            $vemail = $_GET['email'];
            
            $password = $_POST['password'];
            $repassword = ($_POST['re_password']);           
            $status = "reset";
            
            $sql = "SELECT * FROM `user` where `user_id` = '$uid' AND `user_name` = '$vemail';";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);     
                $count = mysqli_fetch_array($result);        

                    if($_POST["password"] === $_POST["re_password"]){ 
                
                        $sql = "UPDATE `user` SET `password` = '$password', `status` = '$status' WHERE `user`.`user_id` = '$uid';";
        
                    if (mysqli_query($con, $sql)) {
                        
                                echo "<script>
                                        Swal.fire(
                                            'Sucess full Rest',                         
                                            '',
                                            'success'
                                            )
                                     </script>";
                    }
                        
                }else{
                    echo "<script>
                    Swal.fire(
                        'Password & conform password is not macth',                         
                        'Type on fileds same password',
                        'warning'
                        )   
                         </script>";
                                    
                    }
                    
                }
    ?>
    
 <?php if(isset($errormsg)){ echo $errormsg;} ?>
    <div class="container">
        <div class="img">
            <img src="../img/main-cover.svg">
        </div>
        <div class="login-content">

            <form method="post">
            <h2 class="title">Reset Your Password</h2>
            <p class=" text-center mb-4 blockquote-footer">Forgot Password with E-mail</p>         

                
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>New Password</h5>
                        <input type="text" class="input" name="password">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Conform Password</h5>
                        <input type="text" class="input" name="re_password">
                    </div>
                </div>

                <div class="button">
                    <button type="submit" class="lbtnfor" value="Reset" name="reset">Reset</button>
                    <input type="button" class="sbtn" value="Signin">
                </div>                               
            </form>
            
            
        </div>
    </div>
    </div>
    <!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <script type="text/javascript" src="../js/login/main.js"></script>
    <?php include_once("script.php"); ?>
</body>

</html>