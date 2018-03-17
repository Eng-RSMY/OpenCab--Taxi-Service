<center
<?php
	$cn=mysql_connect('localhost:3306','root','');
	mysql_select_db('facebook');
	$r=mysql_query("update info set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',mobile='$_POST[mobile]',pass='$_POST[pass]' where username='$_POST[uname]'");
	if(!$r)
	{ 
		echo mysql_error();
	}	
	else
	{
		echo"<font color='green'>Data Updated Successfully";
		header("location:securepage.php");
	}

?>
