<?php
$con=mysqli_connect('localhost','root','','techaura');



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.2.min.js"></script>

	<title>about us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-device, initial-scale=1.0">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
</head>
<body>
	    <div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="home.php"><img src="home_icon.png" style="height: 30px"> Home</a></li>
    <li class="menu-item">
      <a href="event.php"><img src="event_icon.png" style="height: 30px"> Event</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="concat.php" ><img src="concat.png" style="height: 30px">Concat</a></li>
        <li class="menu-item"><a href="Ignite.php">Ignite</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="gallery/gallery.php"><img src="gallery_icon.png" style="height: 30px"> Gallery</a></li>
     <li class="menu-item"><a href="contact.php"><img src="contact_icon.png" style="height: 30px"> Contact</a></li>
     <li class="menu-item"><a href="about_us.php"><img src="aboutus_icon.png" style="height: 30px"> About us</a></li>

         <li class="menu-item">
      <a href="login.php"><img src="login_icon.png" style="height: 30px"> Login</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="admin_login.php"><img src="adminlogin_icon.png" style="height: 30px"> Admin</a></li>
        <li class="menu-item"><a href="teacher_login.php"><img src="teacherlogin_icon.png" style="height: 30px"> Teacher</a></li>
         <li class="menu-item"><a href="student_login.php"><img src="studentlogin_icon.png" style="height: 30px"> Student</a></li>
      </ol>
    </li>
   
  </ol>
</nav>

                 <center>
                  <img src="location_icon.png" style="height: 40px">
                    <p><font size="5">Patkar-Varde College,Goregaon, Mumbai, India</font></p>
              

                
                  <img src="call_icon.png" style="height: 40px">
                    <p><font size="5">022 2872 3731</font></p>

          
                  <img src="email_icon.png" style="height: 40px">
                    <p><font size="5">info@patkarcollege.edu.in</font></p>
                    <img src="twitter.png" style="height: 60px">
                    <img src="facebook.png" style="height: 60px">
                    <a href="https://instagram.com/concat_2k19?igshid=1tn042bx9x782"><img src="instagram.png" style="height: 60px"></a></center>
        



<br>
<div class="mapouter" style="padding-left: 300px"><div class="gmap_canvas"><iframe width="800" height="600"  id="gmap_canvas" src="https://maps.google.com/maps?q=patkar%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:400px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>







<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>