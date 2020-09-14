<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');}
?>
<?php 
	require('phpmailer/PHPMailerAutoload.php'); 
	require('phpmailer/crediantial/crediantial.php');
?>
<?php
$title = "Forgot Password with email";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        if (isset($_GET['logout']) && isset($_SESSION['username']) ) {
            unset($_SESSION['username']);  
            header('Location: index.php');         
    }
    ?>
    <?php
          include_once("./head.php"); 
          include_once("databases/config.php");
    ?>
    <!-- #begin "login form online links @k-avin" -->
    <link rel="stylesheet" type="text/css" href="css/main-login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!-- #end "login form online links @k-avin" -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- login form online icon script @k-avin -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!-- end @k-avin script -->
</head>

<body>
        <?php
            if (isset($_SESSION['username'])){           
            }
        ?>
    <?php 
         if(isset($_POST['forgot'])){
            $email = $_POST['email'];            
                $sql = "SELECT * FROM `user` where `user`.`user_name` = '$email'; ";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);     
                $count = mysqli_fetch_array($result);
                $id = $row['user_id'];
                $emaildata = $row['user_name']; 
                $url = 'http://'.$_SERVER['SERVER_NAME'].'/erms/Forgot/reset-pass.php?id='.$id.'&email='.$email;
                $output = ' <!DOCTYPE html>
                                <html lang="en">

                                <head>
                                    <meta charset="utf-8">
                                    <meta name="viewport" content="width=device-width">
                                    <style type="text/css">
                                        /* RESET STYLES */
                                        
                                        body {
                                            margin: 0;
                                            padding: 0;
                                        }
                                        
                                        img {
                                            border: 0;
                                            height: auto;
                                            line-height: 100%;
                                            outline: none;
                                            text-decoration: none;
                                        }
                                        
                                        table {
                                            border-collapse: collapse !important;
                                        }
                                        
                                        body {
                                            height: 100% !important;
                                            margin: 0;
                                            padding: 0;
                                            width: 100% !important;
                                        }
                                        /* iOS BLUE LINKS */
                                        
                                        .appleBody a {
                                            color: #68440a;
                                            text-decoration: none;
                                        }
                                        
                                        .appleFooter a {
                                            color: #999999;
                                            text-decoration: none;
                                        }
                                        /* MOBILE STYLES */
                                        
                                        @media screen and (max-width: 525px) {
                                            /* ALLOWS FOR FLUID TABLES */
                                            table[class="wrapper"] {
                                                width: 100% !important;
                                            }
                                            /* ADJUSTS LAYOUT OF LOGO IMAGE */
                                            td[class="logo"] {
                                                text-align: left;
                                                padding: 20px 0 20px 0 !important;
                                            }
                                            td[class="logo"] img {
                                                margin: 0 auto!important;
                                            }
                                            /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
                                            td[class="mobile-hide"] {
                                                display: none;
                                            }
                                            img[class="mobile-hide"] {
                                                display: none !important;
                                            }
                                            img[class="img-max"] {
                                                max-width: 100% !important;
                                                height: auto !important;
                                            }
                                            /* FULL-WIDTH TABLES */
                                            table[class="responsive-table"] {
                                                width: 100%!important;
                                            }
                                            /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
                                            td[class="padding"] {
                                                padding: 10px 5% 15px 5% !important;
                                            }
                                            td[class="padding-copy"] {
                                                padding: 10px 5% 10px 5% !important;
                                                text-align: center;
                                            }
                                            td[class="padding-meta"] {
                                                padding: 30px 5% 0px 5% !important;
                                                text-align: center;
                                            }
                                            td[class="no-pad"] {
                                                padding: 0 0 20px 0 !important;
                                            }
                                            td[class="no-padding"] {
                                                padding: 0 !important;
                                            }
                                            td[class="section-padding"] {
                                                padding: 50px 15px 50px 15px !important;
                                            }
                                            td[class="section-padding-bottom-image"] {
                                                padding: 50px 15px 0 15px !important;
                                            }
                                            /* ADJUST BUTTONS ON MOBILE */
                                            td[class="mobile-wrapper"] {
                                                padding: 10px 5% 15px 5% !important;
                                            }
                                            table[class="mobile-button-container"] {
                                                margin: 0 auto;
                                                width: 100% !important;
                                            }
                                            a[class="mobile-button"] {
                                                width: 80% !important;
                                                padding: 15px !important;
                                                border: 0 !important;
                                                font-size: 16px !important;
                                            }
                                        }
                                    </style>
                                </head>
                                                <body style="margin: 0; padding: 0;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                        <tr>
                                            <td bgcolor="#ffffff" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
                                                <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                                                    <tr>
                                                        <td>
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <!-- HERO IMAGE -->
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="padding-copy">
                                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <a href="http://kavin.gq" target="_blank"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/48935/responsive-email.jpg" width="500" height="200" border="0" alt="Can an email really be responsive?" style="display: block; padding: 0; color: #666666; text-decoration: none; font-family: Helvetica, arial, sans-serif; font-size: 16px; width: 500px; height: 200px;"
                                                                                                            class="img-max"></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                            <tr>
                                                                                <td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">Password reset requested for your erms Account
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Someone knows your login details and used it to access your account. To protect your account, reset your password and turn on two-factor authentication.</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                                                            <tr>
                                                                                <td align="center" style="padding: 25px 0 0 0;" class="padding-copy">
                                                                                    <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                                                        <tr>
                                                                                            <td align="center"><a href="'.$url.'"target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #5D9CEC; border-top: 15px solid #5D9CEC; border-bottom: 15px solid #5D9CEC; border-left: 25px solid #5D9CEC; border-right: 25px solid #5D9CEC; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;"
                                                                                                    class="mobile-button">Reset password &rarr;</a></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </body>';
                if($email == $emaildata){
                $mail = new PHPMailer;
                                //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = EMAIL;                 // SMTP username
                                $mail->Password = PASS;                           // SMTP password
                                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = 587;                                    // TCP port to connect to

                                $mail->setFrom(EMAIL, 'ERMS');
                                $mail->addAddress($email, $emaildata);     // Add a recipient
                                // $mail->addAddress('ellen@example.com');               // Name is optional
                                // $mail->addReplyTo('info@example.com', 'Information');
                                // $mail->addCC('cc@example.com');
                                // $mail->addBCC('bcc@example.com');

                                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                $mail->isHTML(true);                                  // Set email format to HTML

                                $mail->Subject = 'Reset Your Password';
                                $mail->Body    = $output;
                                $mail->AltBody = 'Reset Your Password ';

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    $alert =  "<script>
                                    Swal.fire(
                                        'Conformation Mail has be send',                         
                                        '',
                                        'success'
                                        )
                                </script>";
                }
                }else{
                    $errormsg = "<script>
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'error',
                                        title: 'Your email is invalid!',
                                        showConfirmButton: false,
                                        timer: 1400
                                    }) 
                                </script>";
                   
                }
            }

           
    ?>
        <?php if(isset($alert)){ echo $alert;} ?>
        <?php if(isset($errormsg)){ echo $errormsg;} ?>
    <div class="container">        
        <div class="img">
            <img src="img/main-cover.svg">
        </div>
        <div class="login-content">
            <form method="post">
            <h2 class="title">Reset Your Password</h2>
            <p class=" text-center mb-4 blockquote-footer"><?php echo $_SESSION['username'];?></p>                

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>E-mail</h5>
                        <input type="text" class="input" name="email">
                    </div>
                </div>

                <div class="buttonfor">
                    <input type="submit" class="lbtnfor" value="Send" name="forgot">
                </div>

            </form>
        </div>
    </div>
    </div>
    <!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <script type="text/javascript" src="js/login/main.js"></script>
    <?php include_once("script.php"); ?>
</body>

</html>