<style>
body{
color:#FF7;
}

</style>


<form>
<?php
session_start();
$name=$_SESSION['fname'];
$uid=$_SESSION['uid'];
if($_SESSION['sid']==session_id())
{
	echo"<br>";
	echo"<div class='welcome'><font size='5' color='green' face='century gothic'>Welcome, ".$name."<br></font></div>";
	$_SESSION['id']=$uid;
}
else
{
	header("location:account.html");
}
?>
<br><br>
</form>