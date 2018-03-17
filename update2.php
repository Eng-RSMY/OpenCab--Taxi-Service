<style>
body{
	font-family:century gothic;
	margin-left:350px;
	margin-top:100px;
	background-color:#9a9c90;
}
</style>

<form method="POST" action="update3.php">
<center>
<?php
session_start();
$uid=$_SESSION['id'];
	$c=0;
	$cn=mysql_connect('localhost:3306','root','');
	$cn=mysql_select_db('facebook');
	$r=mysql_query("select * from info where username='".$uid."'");
	if(!$r)
	{
		echo mysql_error();
	}
	else
	{
		while($row=mysql_fetch_row($r))
		{
			$c++;
		}
	}
	if($c>0)
	{
		$r=mysql_query("select * from info where username='".$uid."'");
		if(!$r)
		{
			echo mysql_error();
		}
		else
		{
			echo"<table height='60%' width='80%'>";
			while($row=mysql_fetch_row($r))
			{
				echo"<tr><td>Username</td><td><input type='text' name='uname' value='$row[0]' readonly></td></tr>";
				echo"<tr><td>First Name</td><td><input type='text' name='fname' value='$row[1]' ></td></tr>";
				echo"<tr><td>Last Name</td><td><input type='text' name='lname' value='$row[2]'></td></tr>";
				echo"<tr><td>E-mail</td><td><input type='text' name='email' value='$row[3]'></td></tr>";
				echo"<tr><td>Mobile</td><td><input type='text' name='mobile' value='$row[4]'></td></tr>";
				echo"<tr><td>Password</td><td><input type='text' name='pass' value='$row[5]'></td></tr>";
			}
			echo"</table>";
		}
	}
	else
	{
		echo"<font color='red'>No Such Records</font>";
	}
?>

<input type="submit" name="s2" value="Update">
</center>
</form>