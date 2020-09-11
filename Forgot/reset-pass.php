<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
}
?>
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
    <!-- login form online icon script @k-avin -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!-- end @k-avin script -->
</head>
<?php 
if (isset($_GET['logout']) && isset($_SESSION['username']) ) {
    unset($_SESSION['username']);  
    header('Location: ../index.php');         
}
?>

<body>
        <?php
            if (isset($_SESSION['username'])){           
            }
        ?>
<?php 
         if(isset($_POST['reset'])){
            $uid = $_GET['id'];
            $vemail = $_GET['email'];

            $oldpassword = $_POST['old_password'];
            $password = $_POST['password'];
            $repassword = ($_POST['re_password']);
            $user_name1 = $_SESSION['username'];
            $status = "reset";
            
            $sql = "SELECT * FROM `user` where `user_id` = '$uid' AND `user_name` = '$vemail';";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);     
                $count = mysqli_fetch_array($result);
                $checkpassword = $row['password'];

                if ($oldpassword == $checkpassword) {

                    if($_POST["password"] === $_POST["re_password"]){ 
                
                        $sql = "UPDATE `user` SET `password` = '$password', `status` = '$status' WHERE `user`.`user_name` = '$user_name1';";
        
                    if (mysqli_query($con, $sql)) {
                            $sql = "SELECT * FROM `user` where `user`.`user_name` = '$user_name1'; ";
                            $result =mysqli_query($con,$sql);
                            $row = mysqli_fetch_assoc($result);                  
                            $status1 = $row['status'];
                            $usertype = $row['user_type'];                  
                            
                        if($status1=="reset" && $usertype=="lecturer"){
                            // $_SESSION['username'] = $username1;
                            header("Location:admin/index.php");
                           
        
                        }elseif($status1=="reset" && $usertype=="student"){
                            // $_SESSION['username'] = $username1;
                            header("Location:students/index.php");
                           
                        }
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
                    
                }else{
                    $errormsg = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'your old password is does not match!',
                        showConfirmButton: false,
                        timer: 1400
                    }) 
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
            <p class=" text-center mb-4 blockquote-footer"><?php echo $_SESSION['username'];?></p>         

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                    <div class="div">
                        <h5>Old Password</h5>
                        <input type="text" class="input" name="old_password">
                    </div>
                </div>
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