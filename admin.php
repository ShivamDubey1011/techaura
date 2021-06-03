<?php

$con=mysqli_connect('localhost','root','','techaura');

 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet"  href="css/bootstrap.min.css">
	<title></title>
	
</head>
<body>

    <div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="admin.php">Home</a></li>
    <li class="menu-item">
      <a href="#0">Teachers</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="teacher_registration.php">Add</a></li>
        <li class="menu-item"><a href="teacher_details.php">Details</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Student</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="admin_add_student.php">Add</a></li>
        <li class="menu-item"><a href="student_details.php">Details</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="feedback.php">Feedback</a></li>
    <li class="menu-item"><a href="home.php">Logout</a></li>
  </ol>
</nav>





<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>