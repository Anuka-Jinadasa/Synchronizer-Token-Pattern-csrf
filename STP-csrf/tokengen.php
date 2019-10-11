<?php

session_start();

$myfile = fopen("Server Side/server.txt", "w") or die("Unable to open file!");
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));

$txt = sha1($_SESSION['token']).",";

fwrite($myfile, $txt);
$session_id = sha1(session_id());
setcookie('id',session_id(),time()+60*60*24*365,'/');
$txt1 = $session_id."\n";
fwrite($myfile, $txt1);
fclose($myfile);

echo $_SESSION['token'];

?>