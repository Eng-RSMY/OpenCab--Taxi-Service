<html>
<head>
<title>Contact Us-Open Cab</title>
<style>
body{
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




body
{
	background-color:#009061;
}

#header
{
	position:absolute;
	font-size:40;
	top:1%;
	left:20%;
	height:7%;
	width:78%;
	background-color:#FF7;
	border-radius:6px;
	transition:all 0.2s;
}

#header:hover
{
	height:10%;
	font-size:65;
}


#main
{
	position:absolute;
	top:13%;
	left:20%;
	height:80%;
	width:78%;
	background-color:#FF7;
	border-radius:15px;
}

#footer
{
	position:absolute;
	top:95%;
	left:20%;
	height:4%;
	width:78%;
	background-color:#FF7;
	border-radius:5px;
}

#list
{
	position:absolute;
	left:1%;
	top:20%;
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




#phone
{
	position:absolute;
	top:20%;
	left:25%;
	height:65%;
	width:17%;
	background-color:black;
	border-radius:20px;
	box-shadow:4px 4px 5px grey;
}

#phonescreen
{
	position:absolute;
	top:25%;
	left:26%;
	height:58%;
	width:15%;
	background-color:white;
}

#phonetop
{
	position:absolute;
	top:22%;
	left:31%;
	height:1%;
	width:4%;
	background-color:grey;
	border-radius:10px;
}


#contact
{
	position:absolute;
	top:15%;
	left:45%;
	height:75%;
	width:50%;
	background:linear-gradient(white,cyan);
	border-radius:20px;
}
</style>
</head>
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
<font color="green">Contact Us</font>
</div>
<div id="main"></div>
<div id="footer"></div>
<div id="phone"></div>
<div id="phonescreen"><img src="lcd.jpg" height="100%" width="100%"></div>
<div id="phonetop"></div>
<div id="contact">
<font color="lightgreen" size="6" face="arial narrow">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Leave us a messege</u></b></font>
<br><br><br><br>

<form method="POST" action="contact.php" align="center">
<font face="microsoft sans serif" color="green" size="5">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <input type="text" name="name" style="background-color:lightpink; height:7%;width:70%;border-radius:10px;color:white;font-size:20px;">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail:&nbsp;&nbsp;&nbsp;&nbsp;:  <input type="text" name="email" style="background-color:lightpink; height:7%;width:70%;border-radius:10px;color:white;font-size:20px;">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Subject:&nbsp;&nbsp;&nbsp;&nbsp;:  <input type="text" name="subject" style="background-color:lightpink; height:7%;width:70%;border-radius:10px;color:white;font-size:20px;">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Messege:  <textarea name="message" rows="10" cols="50" style="background-color:lightpink; height:30%;width:70%;border-radius:10px;color:white;font-size:20px;"></textarea>
<input type="submit" value="Send Message" name="submit" style="background-color:green;border-radius:10px;color:white;size:15;">
</font>
</div>
</body>
</form>
</html>


<?php
if(isset($_POST['submit']))
{
	$to='opencab@gmail.com';
	$from=$_POST['email'];
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$subject2="from:".$to;
	$message=$name. "wrote the following:"."\n\n".$_POST['message'];
	$message2="Here is a copy of your message".$name."\n\n".$_POST['message'];
	$headers="From:".$from;
	$headers2="From:".$to;
	mail($to,$subject,$message,$headers);
	mail($from,$subject2,$message2,$headers2);
	echo"Message Sent. Thank You".$name;
}

?>