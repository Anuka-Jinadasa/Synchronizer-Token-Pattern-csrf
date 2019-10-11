<?php
	//loged out function
	session_start();
	session_unset();
	session_destroy();
	//destroy session and uset all the variables

	setcookie('PHPSESSID');
    setcookie('id',null, time() - 3600, "/");
	
	$myfile = fopen("Server Side/server.txt", "w") or die("Unable to open file!");
	fwrite($myfile, "0,0");
	fclose($myfile);

	header("Location:index.php");
   	exit;


?>