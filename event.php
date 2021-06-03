<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<title>event</title>
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



	<div class="jumbotron">
		<span style="padding-left: 180px">

		<a href="concat.php">
            <img src="concat.png" height="400"></a><span style="padding-left: 250px">
            	<a href="">
            <img src="ignite.png" height="400"></a><span style="padding-left: 200px">
             <span style="padding-left: 135px">	<a href=""><font size="6" color="#FF0000" ><u> Concat</u></font></a>





	</div>
	




</div>


 



















<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

 </body>
 </html>




