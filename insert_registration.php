<?php 
$con=mysqli_connect('localhost','root','','techaura');

$fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $college=$_POST['college'];
 $contact=$_POST['contact'];
 $class=$_POST['class'];
 $pass=$_POST['pass'];
 $pass2=$_POST['pass1'];
$query="INSERT INTO `registration`(`First_name`, `Last_name`, `email`, `college`, `Phone_no`, `Class`, `Password`) VALUES ('$fname','$lname','$email','$college','$contact','$class','$pass')";

		$data= mysqli_query($con,$query);
		if ($data) {
			header("refresh:1;url=student_login.php");
			# code...
		}
       

?>