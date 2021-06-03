<?php 
$con=mysqli_connect('localhost','root','','techaura');


include ("css.php");
include ("style.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>registration</title>
 	<meta name="viewport" content="width=device-device, initial-scale=1.0">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script type="text/javascript" src="validate.js"></script>
 </head>
 <body>
 	<form action="insert_registration.php" method="POST" name="StudentRegistration" onsubmit="return(validate());">
 	<style >
	body{
		background-color:white;
	}

</style>

	<div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
	




<br>
<br>




<center>
<div class="col-md-6">
	<span class="d-block p-2 bg-primary text-white">Create Account</span>
	<div class="jumbotron">
		<img src="registration.png" height="100">
	<input type="text" name="fname"  class="form-control"  placeholder="First Name"><br>
	<input type="text" name="lname" class="form-control" placeholder="Last Name"><br>
	<input type="email" name="email" class="form-control" placeholder="Email Id"><br>
	<input type="text" name="college" class="form-control" placeholder="College Name"><br>
	<input type="text" name="contact" class="form-control" placeholder="Mobile Number"><br>
	<input type="text" name="class" class="form-control" placeholder="Standard"><br>
	<input type="password" name="pass" class="form-control"  value="" placeholder="new password"> <br>
	<input type="password" name="pass1" class="form-control"  value="" placeholder="confirm your password"> <br>
	<div>
                            <button class="btn btn--radius-2 btn--red" style="background-color:#00008B" class="btn btn-success type="submit"><font color="white">Register</font></button>
                        </div>
	</div>

</div>
</center>





 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</form>
 </body>
 </html>


