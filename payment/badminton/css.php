<?php

$con=mysqli_connect('localhost','root','','techaura');


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
body {   padding: 0; 
	margin: 0; 
font-family: Arial;}
nav{
		width: 100%;
	height: 100px;
	padding: 10px 90px;
	box-sizing: border-box;
	background: rgba(0,0,0,0.5);

}
nav .logo{
	
	padding: 22px 20px;
	height: 80px;
	float: left;
	font-size: 35 px;
	font-weight: bold;
	color: #fff;

}
 nav ul{
 	list-style:none;
 	float: right;
 	margin: 0;
 	padding: 0;
 	display: flex;
 }
 nav ul li a
 {
 line-height: 80px;
 color: #fff;
 padding: 12px 30px;
 text-decoration: none;
 text-transform: uppercase;
 font-size: 15px;
 font-weight: bold;	
 }
nav ul li a
 {background: rgba(0,0,0,0.7);
 	border-radius: 6px;
 	color: #fff;
 }
nav ul li a.active
{
	background: #e2472f;
	color: #fff;
	border-radius:6px; 
}
.container { width: 900px; margin: auto; padding-top: 1em; }

</style>
</head>
<body>

</body>
</html>