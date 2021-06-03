<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>techers</title>
 	 <link rel="stylesheet" type="text/css" href="home_style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
 </head>
 <body>
 	 <div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="teacher_home.php"><img src="home_icon.png" style="height: 30px"> Home</a></li>
    <li class="menu-item">
      <a href=""><img src="event_icon.png" style="height: 30px">Participants</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="technical_participant.php" > Technical</a></li>
        <li class="menu-item"><a href="non_technical_participant.php" >Non Technical</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="home.php"><img src="login_icon.png" style="height: 30px"> Logout</a>
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
<div class="img" >
<img src="techaura_icon.png"></div>
<script src="home_js.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 
 </body>
 </html>