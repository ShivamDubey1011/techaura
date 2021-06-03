<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>home</title>
  <link rel="stylesheet" type="text/css" href="home_style.css">
   <link rel="stylesheet" type="text/css" href="style.css">
<script src="ism/js/ism-2.2.min.js"></script>

	<meta name="viewport" content="width=device-device, initial-scale=1.0">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
</head>
<body>



	 
    <div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="student_home.php"><img src="home_icon.png" style="height: 30px"> Home</a></li>
    <li class="menu-item">
      <a href="student_event.php"><img src="event_icon.png" style="height: 30px"> Event</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="student_concat.php" ><img src="concat.png" style="height: 30px">Concat</a></li>
        <li class="menu-item"><a href="student_Ignite.php">Ignite</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="s_gallery/gallery.php"><img src="gallery_icon.png" style="height: 30px"> Gallery</a></li>
     <li class="menu-item"><a href="student_contact.php"><img src="contact_icon.png" style="height: 30px"> Contact</a></li>
  <li class="menu-item"><a href="student_aboutus.php"><img src="aboutus_icon.png" style="height: 30px"> About us</a></li>
    <li class="menu-item">
      <a href="home.php"><img src="logout_icon.png" style="height: 30px"> Logout</a>
      </ol>
    </li>
   
  </ol>
</nav>



<canvas id="canvas"></canvas>

<div id="interface">
  <h1>Text particle</h1>
<p>feel free to change the value of the variable "message" </p>

Message:
<input id="message" type="text" value="TechAura" onchange="change()">
Gravity:
<input onchange="changeV()" type="range" id="2" value="0" max="1" min="-1" step="0.1">

Duration:
<input onchange="changeV()" type="range" id="3" value=".4" max="0.99" min="0.1" step="0.01">
  
  Speed:
<input onchange="changeV()" type="range" id="5" value=".1" max="5" min="0" step="0.01">
    Radius:
<input onchange="changeV()" type="range" id="6" value="2" max="20" min="1.8" step="0.1">
Resolution:
<input type="range" id="4" value="5" max="20" min="3" step="1" onchange="change()">
  
</div>











<script src="home_js.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>