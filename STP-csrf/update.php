<?php
		
	require_once 'token.php';
	$val = $_POST["token"];
	//echo sha1($val). "<br>";
	//echo sha1($_COOKIE['id']);




	if(check::checkToken($val,$_COOKIE['id']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$uni = $_POST['university'];
		$phno = $_POST['phno'];
         				
	}
	else
	{
	  $errors['err'] = "Server request fail! Unauthorized request! \n <br>";
	}

?>

<html>

	<head>
		<title>Updated WS 1</title>
		<link rel="stylesheet" href="css/update.css">
		<script src="https://kit.fontawesome.com/973cebd43f.js" crossorigin="anonymous"></script>
	</head>
	
	<body>
		
		<div class = "box">
			<h1>Profile Updated</h1>
			<img src ="css/a.png" class = "avatar">
		
			<div>
				<?php if(isset($errors['err'])) echo "<p class = 'para'>",$errors['err'],"</p>"; else echo "<p class = 'para'>Server Request Accepted</p>";?>
				 	
			</div>
			<div>
				<p class ="para1"><?php if(isset ($fname)) echo $fname. " ",$lname; ?>
			
			</div>
			<div>
				<p class ="para1"><?php if(isset ($email)) echo $email; ?></p>
			
			</div>
			<div>
				<p class ="para1"><?php if(isset ($phno)) echo $phno; ?></p>
			
			</div>
			<div>
				<p class ="para1"><?php if(isset ($uni)) echo $uni; ?></p>
			
			</div>
			
			<div>
				<a href = "logout.php"><button class = 'btn'>Logout</button></a>
			</div>
			
			
			
		</div>
	
	
	</body>

</html>