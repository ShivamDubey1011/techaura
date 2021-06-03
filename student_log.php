<?php

$con=mysqli_connect('localhost','root','','techaura');


$email=$_POST['email'];
$Password=$_POST['Password'];

if($email==""||$Password=="")
	{	echo '<script type="text/javascript">

          window.onload = function () { alert("Login failed please enter correct user_id and password");
          window.location="student_login.php"; }

</script>'; 
	}
else
{
	$query="SELECT   * FROM `registration` WHERE `email`='$email'&&`Password`='$Password' ";
	$result= mysqli_query($con,$query);
	$count= mysqli_num_rows($result);
	
	if($count==1)
	{
		echo '<script type="text/javascript">

          window.onload = function () { alert("Login Successful");
          }

</script>'; 
		header("refresh:2;url=student_home.php");

	}
	else
	{
		echo '<script type="text/javascript">

          window.onload = function () { alert("Login failed please enter correct user_id and password");
          window.location="student_login.php"; }

</script>'; 
	}
}



?>
