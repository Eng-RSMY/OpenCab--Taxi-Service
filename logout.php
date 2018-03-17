<html>
<head>
<title>Session Timeout</title>
<style>
body{
	font-family:century gothic;
	background:#FF7;
	font-size:50px;
}

</style>
</head>
</html>

<?php
	
	session_start();
	unset($_SESSION["username"]);
	unset($_SESSION["pass"]);
	session_destroy();
	header('Refresh:1;URL=account.html');
	echo"Successfully Logged Out !";
	
?>

<br><br>