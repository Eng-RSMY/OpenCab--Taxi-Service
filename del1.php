<html>
<head>
<title>Cancel Orders</title>
<style>
body{
	font-family:century gothic;
	margin-top:100px;
	background-color:#009061;
	color:#009061;

}
</style>

</head>
<body>
<form method="POST" action="del1.php">
<center>
<table>
<tr>
	<th><font color="white">Enter Order ID to delete<font></th>
	<th><input type='text' name='oid' size='20' style="border:2px solid green;border-radius:4px;background-color:lightblue;width:100%;height:100%;font-size:25px;color:white;"></th>
	<th><input type='submit' name='s1' value='Cancel Order' style="background-color:green;color:white;height:100%;width:100%;"></th>
</tr>
</table>
<br><br>

<?php
	$c=0;
	if(isset($_POST['s1']))
	{
		$cn=mysql_connect('localhost:3306','root','');
		mysql_select_db('facebook');
		$r=mysql_query("select * from orders where id='$_POST[oid]'");
	}
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
		$r=mysql_query("delete from orders where id='$_POST[oid]'");
		if(!$r)
		{
			echo mysql_error();
		}
		else
		{
			echo"<font color='red'>Order Cancelled Successfully</font>";
		}
	}
	else
	{
		echo "<font size='5' color='white'>You have no orders now!</font>";
	}

?>

<br><br>
<a href="myorders.php"><font color="White" size="6">Back</font></a>