<?php

class check
{
   
	public static function checkToken($token,$sessionId)
	{
		
		
        //echo " Token: $sessionId ";
		
		$myfile = fopen("Server Side/server.txt", "r") or die("Unable to open file!");
		
		list($tok,$sid) = explode(",",chop(fgets($myfile)),2);
		fclose($myfile);
		
		if($tok === sha1($token))
		{
		     if($sid === sha1($sessionId))
			 {		
				return true;
				echo sha1($token);
			 }
		}
	}
}
?>



