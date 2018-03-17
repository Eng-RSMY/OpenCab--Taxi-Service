<?php
$c=0;
try
{
	$cn=mysql_connect('localhost:3306','root','');
	mysql_select_db('facebook');
	$r=mysql_query("select * from info where username='$_POST[uid]' and pass='$_POST[pw]'");
	if(!$r)
	{
		echo mysql_error();
	}
	else
	{
		while($row=mysql_fetch_row($r))
		{
			$c++;
			session_start();
			$_SESSION['fname']=$row[1];
			$_SESSION['uid']=$row[0];
		}
	}
	if($c>0)
	{
		session_start();
		$_SESSION['sid']=session_id();
		header("location:securepage.php");
	}
	else
	{
		echo"<script>alert('Username or Password Incorrect')</script>";
		header("location:account.html");
	}
}
catch(Exception $e)
{
	echo $e;
}
mysql_close();
?>