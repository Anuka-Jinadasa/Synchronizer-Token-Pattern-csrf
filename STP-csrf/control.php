<!DOCTYPE html>
<html>
<head>
<title>Edit Profile WS 1</title>

<link rel="stylesheet" href="css/wscontrol.css">
<script src="https://kit.fontawesome.com/973cebd43f.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	$(document).ready(function(){

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_hidden_field").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "tokengen.php", true);
	xhttp.send();
	
	});
</script>
	<body>
			<div class = "profile">
				<h1>Edit Profile</h1>
				<img src ="css/a.png" class = "avatar">
				<form name="updateForm" class= "update" action="update.php" method="post">
				<div class ="textbox">
					<i class="fas fa-user" ></i>
					<input type="text" id="fname" name="fname" placeholder="First Name" value = "" required>	
				</div>
				<div class ="textbox">
					<i class="fas fa-user" ></i>
					<input type="text" id="lname" name="lname" placeholder="Last Name" value = ""  required>
					<input type="hidden" id="token_hidden_field" name="token" value = "">
				</div>
				<div class ="textbox">
					<i class="fas fa-at" ></i>
					<input type="email" id="email" name="email" placeholder="E-mail Address" value = ""  required>	
				</div>
				<div class ="textbox">
					<i class="fas fa-university"></i>
					<input type="text" id="university" name="university" placeholder="University Name" value = "" required>
				</div>
				<div class ="textbox">
					<i class="fas fa-phone-alt"></i>
					<input type="text" id="phno" name="phno" placeholder="phone number"maxlength="10" value = "" required>	
				</div>
				<input name="Submot" type="submit" value="Submit" class="btn">
				<input name="Reset" type="reset" value="Reset" class="btn2">
			</div>
			
        
	</body> 


</html>