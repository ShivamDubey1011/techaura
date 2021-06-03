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
 </head>
 <body>
 	<form action="" method="GET">
 	<style >
	body{
		background-color:#0F1626;
	}

</style>

	<div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
	




<br>
<br>




<center>
<div class="col-md-6">
	<span class="d-block p-2 bg-primary text-white">Update</span>
	<div class="jumbotron">
		<img src="registration.png" height="100">
	<input type="text" name="fname"  class="form-control" value="<?php echo $_GET['fn']; ?>" ><br>
	<input type="text" name="lname" class="form-control" value="<?php echo $_GET['ln']; ?>" >
	<br>
	<input type="email" name="email" class="form-control" value="<?php echo $_GET['em']; ?>" ><br>
	<input type="text" name="college" class="form-control" value="<?php echo $_GET['co']; ?>" ><br>
	<input type="text" name="contact" class="form-control" value="<?php echo $_GET['ph']; ?>" ><br>
	<input type="text" name="class" class="form-control" value="<?php echo $_GET['cl']; ?>" ><br>
	
	<div>
                            <button class="btn btn--radius-2 btn--red" style="background-color:#00008B" class="btn btn-success type="submit" name="submit" value="Update"><font color="white">Register</font></button>
                        </div>
	</div>

</div>
</center>
<?php
if ($_GET['submit']) {

	$id=$_GET['Id'];
	$fname=$_GET['Frist_name'];
	$lname=$_GET['Last_name'];
	$email=$_GET['email'];
	$col=$_GET['college'];
	$pno=$_GET['Phone_no'];
	$cl=$_GET['Class'];
	$query="UPDATE `registration` SET `First_name`='$fname',`Last_name`='lname',`email`='$email',`college`='col',`Phone_no`='pno',`Class`='$cl', WHERE `Id`='$id'";
	$data=mysql_query($con,$query);

	if ($data) {
		echo "record updated";
		# code...
	}
	else
	{
		echo "record not updated";
	}
}




?>





 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</form>
 </body>
 </html>


