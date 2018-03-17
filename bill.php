<html>
<title>Order a Cab-Open Cab</title>
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

.myorders{
	position:absolute;
	height:40px;
	width:130px;
	top:5px;
	right:35px;
	background:#FF0000;
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





body 
{
	font-family:century gothic;
	background-color:#FF7;
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


#list
{
	position:fixed;
	left:1%;
	top:30%;
	height:70%;
	width:18%;
	background-color:palegreen;
	border-radius:10px;
}
#list li
{
display:inline;
padding:20px;
}



#form1
{
	position:absolute;
	left:25%;
	top:12%;
	width:60%;
	height:80%;
	background-color:orange;
	border-radius:10px;
}

#table
{
	position:absolute;
	left:25%;
	top:95%;
	width:60%;
	height:30%;
	background-color:orange;
	border-radius:10px;
}

#billbox
{
	position:absolute;
	left:40%;
	top:130%;
	width:45%;
	height:15%;
	background-color:white;
	border-radius:10px;
}

#buttonbox
{
	position:absolute;
	left:25%;
	top:130%;
	width:15%;
	height:15%;
	background-color:white;
	border-radius:10px;
}
</style>
<head>
<script>
var r1,p1,n,e,p,t1;
function bill()
{
	n=document.getElementById("n").value;
	e=document.getElementById("e").value;
	p=document.getElementById("p").value;
	p1=document.getElementById("p1").value;
	t1=r1;
	if(ncheck()==1 && pcheck()==1 &&echeck()==1)
	{
	document.getElementById("ans").value="Dear "+n+"\nYour Phone "+p;
	document.getElementById("ans").value+="\nYou ordered a "+p1+" cab @ Rs."+r1+"\nYour total fair ="+r1; 
	alert("Thank You for Ordering Your Ride");
	}
	
	else
	{
		ncheck();
		pcheck();
		echeck();
		alert("Check Your Details");
	}
}
function fill1()
{
	var p1=document.getElementById("p1").value;
	if(p1=='none')
	{
		r1="";
		document.getElementById("m1").src="";
	}
	if(p1=='Mini')
	{
		r1=180;
		document.getElementById("m1").src="mini.jpg";
	}
	else if(p1=='Medium')
	{
		r1=200;
		document.getElementById("m1").src="medium.jpg";
	}
	else if(p1=='Large')
	{
		r1=260;
		document.getElementById("m1").src="big.png";
	}
	else if(p1=='Rickshaw')
	{
		r1=150;
		document.getElementById("m1").src="auto.png";
	}
	document.getElementById("r1").value=r1;
}

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
<body>
<div class='updateprofile'>
	<font size='5' color='#9a9c90' face='century gothic'><a href="update2.php" style="text-decoration:none;color:black;text-align:right;"><b>Update Profile</b></a></font>	
</div>

<div class='logout'>
	<font size='5' color='#9a9c90' face='century gothic'><a href="logout.php" style="text-decoration:none;color:black;text-align:right;"><b>Logout</b></a></font>	
</div>

<div class='myorders'>
	<font size='5' color='#9a9c90' face='century gothic'><a href="myorders.php" style="text-decoration:none;color:black;text-align:right;"><b>My Orders</b></a></font>	
</div>


<form method="POST" action="bill.php">
<div id="form1" >
<font face="century gothic" color="white" size="4">
Username:<input type="text" name="uname" style="border:2px solid green;border-radius:4px;background-color:lightblue;width:100%;height:8%;font-size:25px;color:white;"><br><br>
Name:<input type="text" id="n" name="nm" style="border:2px solid green;border-radius:4px;background-color:lightblue;width:100%;height:8%;font-size:25px;color:white;"  onblur="ncheck()"><span id="nm" style="color:red"></span><br><br>
Email:<input type="text" id="e" name="em" style="border:2px solid green;border-radius:4px;background-color:lightblue;width:100%;height:8%;font-size:25px;color:white;" onblur="echeck()"><span id="em" style="color:red"></span><br><br>
Phone:<input type="text" id="p" name="ph" style="border:2px solid green;border-radius:4px;background-color:lightblue;width:100%;height:8%;font-size:25px;color:white;" onblur="pcheck()"><span id="pm" style="color:red"></span><br><br>
Pick-up Location:<input type="text" name="src"  style="border:2px solid green;border-radius:4px;background-color:lightblue;width:100%;height:8%;font-size:25px;color:white;" onblur="pcheck()"><span id="pm" style="color:red"></span><br><br>
Destination Location:<input type="text" name="dest"  style="border:2px solid green;border-radius:4px;background-color:lightblue;width:100%;height:8%;font-size:25px;color:white;" onblur="pcheck()"><span id="pm" style="color:red"></span><br><br>
</font>
</div>

<div id="table">
<table  height="100%" width="100%">
<tr>
	<th>CAB TYPE</th>
	<th>FAIR</th>
	<th>IMAGE</th>
</tr>

<tr>
	<th>
	<select onchange="fill1()" id="p1" name="pro">
	<option value="none">--Select--</option>
	<option value="Mini">Mini</option>
	<option value="Medium">Medium</option>
	<option value="Large">Large</option>
	<option value="Rickshaw">Rickshaw</option>
	<select>
	</th>
	<th><input type="text" id="r1" name="ra" readonly></th>
	<th><img src="" height="100" width="150" id="m1"></th>
</tr>
</table><br><br><br>
</div>
<div id="buttonbox">
<input type="submit" name="s1" value="Book Now" style="background-color:green;color:white;height:100%;width:100%;" onclick="bill()" ><br><br>
</div>
<div id="billbox">
<textarea rows="6" cols="80" id="ans" readonly style="border:transparent;width:100%;height:100%;"></textarea>
</div>

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


<?php
include("name.php");
if(isset($_POST['s1']))
{
	try
	{
		$cn=mysql_connect('localhost:3306','root','');
		mysql_select_db('facebook');
		$sql=mysql_query("insert into orders(name,email,phone,source,destination,cabtype,bill,username) values('$_POST[nm]','$_POST[em]','$_POST[ph]','$_POST[src]','$_POST[dest]','$_POST[pro]','$_POST[ra]','$_POST[uname]')");
		if(!$sql)
		{
			echo mysql_error();
		}
		else
		{
			echo"Done!";
		}
	
	}
	catch(Exception $e)
	{
		echo "Order Failed";
	}
}
?>
</form>
</body>
</html>
