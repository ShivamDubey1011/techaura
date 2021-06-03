<?php 
$con=mysqli_connect('localhost','root','','techaura');

include ("css.php");
include ("style.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head><link rel="stylesheet" href="ism/css/my-slider.css"/>
 	<meta name="viewport" content="width=device-device, initial-scale=1.0">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
<script src="ism/js/ism-2.2.min.js"></script>

 	<title></title>
 	<script type="text/javascript" src="validation.js"></script>
 </head>
 <body>
 	<form action="game_registration_info.php" method="POST"  name="GameRegistration" onsubmit="return(validate());">
 	<style >
	body{
		background-color:;
	}

</style>

 
<h1>
<div class="alert alert-info">
  <strong>Please Enter Same Data as written in your college/school identity-card</strong>
</div></h1>


 <center>
<div class="col-md-6">
	
	<div class="jumbotron">
		
	<input type="text" name="fname"  class="form-control"  placeholder="First Name"><br>
	<input type="text" name="lname" class="form-control" placeholder="Last Name"><br>
	<input type="text" name="college" class="form-control" placeholder="College Name"><br>
	<input type="text" name="contact" class="form-control" placeholder="Mobile Number"><br>
	
	
	<div>
                            <button class="btn btn--radius-2 btn--red" style="background-color:#00008B" class="btn btn-success type="submit"><font color="white">Register</font></button>
                        </div>
	</div>

</div>
</center>

 







<center>
<h1>
<div class="alert alert-info">
  <strong>Participant Not Allowed to Play Games Without Identity card</strong>
</div></h1>
</center>




















 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</form>
 </body>
 </html>