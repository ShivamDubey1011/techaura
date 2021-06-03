<?php 
$con=mysqli_connect('localhost','root','','techaura');

$fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $user_id=$_POST['user_id'];
 $pass=$_POST['pass'];
 $pass2=$_POST['pass1'];
$query="INSERT INTO `teacher`(`First_name`, `Last_name`, `email`, `Phone_no`, `user_id`, `Password`) VALUES ('$fname','$lname','$email','$contact','$user_id','$pass')";

		$data= mysqli_query($con,$query);
		if ($data) {
			echo '<script type="text/javascript">

          window.onload = function () { alert("Successfully Registered");
          }

</script>'; 
		header("refresh:2;url=teacher_registration.php");
			
			# code...
		}
       

?>