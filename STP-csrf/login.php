<?php
$_SESSION["adminuser"] = '';


	if(isset($_POST['username']) && isset($_POST['password']))
	
	{

 	if($_POST['username'] == "admin" && $_POST['password']=="admin")
	
	{

			$_SESSION["adminuser"] = $_POST['username'];					
	        header('Location: control.php');
			header('Location: ./control.php');
	}
  else
  {
	$errors['err'] = "Incorrect username or password";
	
	//echo "<script>alert('Check username and password');</script>";
    //echo "<noscript>Check username and password</noscript>";
  }
}
 
?>



<html>

	<head>
		<meta charset = "utf-8">
		<title>Login WS 1</title>
		<link rel="stylesheet" href="css/wslogin.css">
		<script src="https://kit.fontawesome.com/973cebd43f.js" crossorigin="anonymous"></script>
		
	</head>
	
	<body>
		<div class = "login-box">
			<h1>Login as Admin</h1>
			<img src ="css/a.png" class = "avatar">
			
			<form name="loginForm" class="login" action="" method="post">
			<div class ="textbox">
				
				<i class="fas fa-user" ></i>
				<input type="text" id="username" name="username" placeholder="Enter Username" class="login" required>	
			</div>
		
			<div class ="textbox">
				
				<i class="fas fa-lock" color = "black"></i>
				<input type="password" id="password" name="password" placeholder="Enter password" class="login" required>	
			</div>
			<p class="p"><?php if(isset($errors['err'])) echo $errors['err'];?></p>
			<input name="Login" type="submit" value="Login" class="btn">
			<input name="Reset" type="reset" value="Reset" class="btn2">
			
		</div>
		
	</body>


</html>