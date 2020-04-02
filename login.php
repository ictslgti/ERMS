<?php
$title = "Login | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>
<div class="container">
		<div class="img">
			<img src="img/main-cover.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
                <h2 class="title">Welcome</h2>	
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
					<input type="submit" class="sbtn" value="Singin">
				</div>
				
            </form>
        </div>
    </div>

    <?php include_once("script.php"); ?>
    <script type="text/javascript" src="js/login/main.js"></script>
</body>

</html>
