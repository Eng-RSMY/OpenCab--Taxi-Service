<style>
body{
	font-family:century gothic;
	margin-top:100px;
	background-color:#009061;

}
</style>

<form>
<center>
<?php
session_start();
$uid=$_SESSION['id'];
	$c=0;
	$cn=mysql_connect('localhost:3306','root','');
	$cn=mysql_select_db('facebook');
	$r=mysql_query("select * from orders where username='".$uid."'");
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
		$r=mysql_query("select * from orders where username='".$uid."'");
		if(!$r)
		{
			echo mysql_error();
		}
		else
		{
			echo"<table height='60%' width='80%'>";
			while($row=mysql_fetch_row($r))
			{	
				echo"<tr><td>Name</td><td><input type='text' name='name' value='$row[0]' readonly></td></tr>";
				echo"<tr><td>E-mail</td><td><input type='text' name='email' value='$row[1]' readonly></td></tr>";
				echo"<tr><td>Mobile</td><td><input type='text' name='mobile' value='$row[2]' readonly></td></tr>";
				echo"<tr><td>Source</td><td><input type='text' name='src' value='$row[3]' readonly></td></tr>";
				echo"<tr><td>Destination</td><td><input type='text' name='dest' value='$row[4]' readonly></td></tr>";
				echo"<tr><td>Cab Type</td><td><input type='text' name='pro' value='$row[5]' readonly></td></tr>";
				echo"<tr><td>Fair</td><td><input type='text' name='rate' value='$row[6]' readonly></td></tr>";
				echo"<tr><td>Order ID</td><td><input type='text' name='oid' value='$row[8]' readonly></td></tr>";
			}
			
			echo"</table>";
			echo"<hr>";
		}
	}
	else
	{
		echo"<font color='red' size='7'>You have no orders yet!</font>";
	}
?>
<br><br>
<a href ="securepage.php"><font color="white" size="6">Back</font></a><br>
<a href ="del1.php"><font color="white" size="6">Cancel Order</font></a>
</center>
</form>