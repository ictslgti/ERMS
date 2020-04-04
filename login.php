<?php
$title = "Login | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
	<!-- #begin "login form online links @k-avin" -->
	<link rel="stylesheet" type="text/css" href="css/main-login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<!-- #end "login form online links @k-avin" -->
	<!-- login form online icon script @k-avin -->
	 <script src="https://kit.fontawesome.com/a81368914c.js"></script>
 	<!-- end @k-avin script -->
</head>

<body>
<div class="container">
		<div class="img">
			<img src="img/main-cover.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
                <h2 class="title">Welcome to</h2>	
                <p class=" text-center mb-4 blockquote-footer">Exam Result Management System</p>			
				<img class="user-img" src="img/user.jpg">				
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
				<a href="#">Forgot Password?</a>
				<div class="button">
					<input type="submit" class="lbtn" value="Login">
					<input type="submit" class="sbtn" value="Signup">
				</div>
				
            </form>
        </div>
    </div>

    <?php include_once("script.php"); ?>
    <script type="text/javascript" src="js/login/main.js"></script>
</body>

</html>
