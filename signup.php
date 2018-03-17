<html>
<head>
<title>Sign Up</title>
<script>
function ncheck()
{
	var nm,n;
	n=document.getElementById("n");
	nm=/^[a-zA-Z ]+$/;
	if(!n.value.match(nm))
	{
		document.getElementById("nm").innerHTML="***Check Your Name";
		return 0;
	}
	else
	{
		document.getElementById("nm").innerHTML="";
		return 1;
	}
}

function lncheck()
{
	var lnm,ln;
	ln=document.getElementById("ln");
	lnm=/^[a-zA-Z ]+$/;
	if(!ln.value.match(lnm))
	{
		document.getElementById("lnm").innerHTML="***Check Your Name";
		return 0;
	}
	else
	{
		document.getElementById("lnm").innerHTML="";
		return 1;
	}
}

function echeck()
{
	var em,n;
	e=document.getElementById("e");
	em=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,6}$/;
	if(!e.value.match(em))
	{
		document.getElementById("em").innerHTML="***Check Your Email";
		return 0;
	}
	else
	{
		document.getElementById("em").innerHTML="";
		return 1;
	}
}


function pcheck()
{
	var pm,p;
	p=document.getElementById("p");
	pm=/^[0-9]{10,10}$/;
	if(!p.value.match(pm))
	{
		document.getElementById("pm").innerHTML="***Check Your Phone Number";
		return 0;
	}
	else
	{
		document.getElementById("pm").innerHTML="";
		return 1;
	}
}


</script>
</head>
<style>
body{
	background-color:#009061;
	font-family:century gothic;
}
.login{
	position:absolute;
	height:40px;
	width:100px;
	top:10px;
	right:100px;
	background:#FF7;
	padding-top:5px;
	padding-left:30px;
	border-radius:15px;
	border:5px solid transparent;
	font-family:century gothic;	
}

ul {
    list-style-type: none;
    margin: 0%;
    padding:0;
    width: 100%;
	height:20%;
    background-color: palegreen;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #009061;
    color: white;
}

.active {
    background-color: #4CAF50;
    color: white;
}


#header
{
	position:absolute;
	top:1%;
	left:20%;
	height:10%;
	width:79%;
	background-color:#FF7;
	border-radius:5px;
}

#main
{
	position:absolute;
	top:13%;
	left:20%;
	height:80%;
	width:79%;
	background-color:#FF7;
	border-radius:15px;
}

#list
{
	position:absolute;
	left:1%;
	top:20%;
	height70%;
	width:18%;
	background-color:palegreen;
	border-radius:10px;
}
#list li
{
display:inline;
padding:20px;
}
</style>
<body>

<a href="index.html"><img src="icon.png" height="100px" width="250px"></a>

<div id="list">
<ul>
	<li><a href="index.html">Home</a></li>
	<li><a href="service.html">Our Service Gallery</a></li>
	<li><a href="signup.php">Register</a></li>
	<li><a href="account.html">Order your Cab</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="help.html">Help n Support</a></li>
</ul>
</div>

<div id="header">
<font color="green" size="7">Create a new account</font>
</div>

<div class='login'>
	<font size="5"><a href="account.html" style="text-decoration:none;color:black;text-align:right;"><b>Login</b></a></font>	
</div>
<div class="main">

	<div class="form">
	<form method="POST" action="signup.php">
	<center>
	<table height="70%" width="60%">
	<tr>
		<td>First Name</td>
		<td><input type="text" name="fname" style="border:2px solid #9a9c90;border-radius:4px;background-color:lightblue;width:100%;height:45px;font-size:25px;color:white; size="20" id="n" onblur="ncheck()"><span id="nm" style="color:red"></span><br></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text"  name="lname" style="border:2px solid #9a9c90;border-radius:4px;background-color:lightblue;width:100%;height:45px;font-size:25px;color:white; size="20" id="ln" onblur="lncheck()"><span id="lnm" style="color:red"></span></td>
	</tr>
	<tr>
		<td>Mobile Number</td>
		<td><input type="text" style="border:2px solid #9a9c90;border-radius:4px;background-color:lightblue;width:100%;height:45px;font-size:25px;color:white; size="20" name="mobile" id="p" onblur="pcheck()"><span id="pm" style="color:red"></span></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><input type="text" style="border:2px solid #9a9c90;border-radius:4px;background-color:lightblue;width:100%;height:45px;font-size:25px;color:white; size="20" name="email" id="e" onblur="echeck()"><span id="em" style="color:red"></span></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
		<input type="radio" name="gender">Male
		<input type="radio" name="gender">Female</td>
	</tr>
	<tr>
		<td>Choose Username</td>
		<td><input type="text" style="border:2px solid #9a9c90;border-radius:4px;background-color:lightblue;width:100%;height:45px;font-size:25px;color:white; size="20" name="uname"></td>
	</tr>
	<tr>
		<td>Enter Password</td>
		<td><input type="password" style="border:2px solid #9a9c90;border-radius:4px;background-color:lightblue;width:100%;height:45px;font-size:25px;color:white; size="20" name="ps1"></td>
	</tr>
	<tr>
		<td>Re-enter Password</td>
		<td><input type="password" style="border:2px solid #9a9c90;border-radius:4px;background-color:lightblue;width:100%;height:45px;font-size:25px;color:white; size="20" name="ps2"></td>
	</tr>
	</table>
	<input type="submit" style="background-color:#9a9c90;color:white;height:7%;width:12%;border-radius:5px;" name="s1" value="Submit">
	<input type="reset" style="background-color:#9a9c90;color:white;height:7%;width:12%;border-radius:5px;" name="r1" value="Reset">
	<br><br>

<?php
$c=0;
$cn=mysql_connect('localhost:3306','root','');
mysql_select_db('facebook');
if(isset($_POST['s1']))
{
	$ps1=$_POST['ps1'];
	$ps2=$_POST['ps2'];
	if($ps1==$ps2)
	{
		$pass=$ps1;
		$r=mysql_query("select * from info where uname='$_POST[uname]'");
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
		if($c==0)
		{
			$r=mysql_query("insert into info values('$_POST[uname]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[mobile]','$_POST[ps1]')");
			if(!$r)
			{
				echo mysql_error();
			}
			else
			{
				echo"<font color='#FF6'>User Account Created Successfully</font>";
			}
		}
		else
		{
			echo"<font color='blue'>Try Another Username</font>";
		}
	}	
	else
	{
		echo"<font color='red'>Password Mismatch</font>";
	}
}

?>
</center>
</form>
</div>
</div>
</body>
</html>