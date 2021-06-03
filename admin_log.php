<?php

$con=mysqli_connect('localhost','root','','techaura');


$user_id=$_POST['user_id'];
$Password=$_POST['Password'];

if($user_id==""||$Password=="")
	{	echo '<script type="text/javascript">

          window.onload = function () { alert("Login failed please enter correct user_id and password");
          window.location="admin_login.php"; }

</script>';
	}
else
{
	$query="SELECT   * FROM `admin` WHERE `user_id`='$user_id'&&`Password`='$Password' ";
	$result= mysqli_query($con,$query);
	$count= mysqli_num_rows($result);
	
	if($count==1)
	{
		echo '<script type="text/javascript">

          window.onload = function () { alert("Login Successful");
          }

</script>'; 
		header("refresh:2;url=admin.php");

	}
	else
	{
		echo '<script type="text/javascript">

          window.onload = function () { alert("Login failed please enter correct user_id and password");
          window.location="admin_login.php"; }

</script>'; 
	}
}



?>