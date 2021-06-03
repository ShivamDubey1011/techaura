<?php
$con=mysqli_connect('localhost','root','','techaura');







?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
</head>
<body>
  <form action="admin_log.php" method="POST">
		
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
		<div class="col-md-6">
		<div class="jumbotron">

			
<form>
	<img src="login1.png" height="300">
  <div class="form-group">
    <label for="exampleInputEmail1">User Id</label>
    <input type="text" name="user_id" class="form-control"  placeholder="User Id">
    <small id="emailHelp" class="form-text text-muted">Please enter the user id which is provide by admin.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 
</form>
</div>
</div>
</center>
</div>






















<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</form>
</body>
</html>