<html>
<head>
<title>Welcome to your Account</title>
</head>
<style>
.logout{
	position:absolute;
	height:40px;
	width:100px;
	top:5px;
	right:200px;
	background:#00FFF0;
	padding-top:5px;
	padding-left:30px;
	border-radius:0px 5px 5px 0px;
	border:5px solid transparent;
}

.updateprofile{
	position:absolute;
	height:40px;
	width:250px;
	top:5px;
	right:330px;
	background:lightblue;
	padding-top:5px;
	padding-left:30px;
	border-radius:0px;
	border:5px solid transparent;
}

.welcome{
	position:absolute;
	height:40px;
	width:350px;
	top:5px;
	right:620px;
	background:#FFFFF0;
	padding-top:5px;
	padding-left:30px;
	border-radius:5px 0px 0px 5px;
	border:5px solid transparent;
}

</style>
<body>
<div class='updateprofile'>
	<font size='5' color='#9a9c90' face='century gothic'><a href="update2.php" style="text-decoration:none;color:black;text-align:right;"><b>Update Profile</b></a></font>	
</div>

<div class='logout'>
	<font size='5' color='#9a9c90' face='century gothic'><a href="logout.php" style="text-decoration:none;color:black;text-align:right;"><b>Logout</b></a></font>	
</div>
</body>


<form>
<?php
session_start();
$name=$_SESSION['fname'];
$uid=$_SESSION['uid'];
if($_SESSION['sid']==session_id())
{
	echo"<br>";
	echo"<div class='welcome'><font size='5' color='green' face='century gothic'>Welcome, ".$name."<br></font></div>";
	header("location:bill.php");
	$_SESSION['id']=$uid;
}
else
{
	header("location:account.html");
}
?>
<br><br>
</form>