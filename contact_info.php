<?php 
$con=mysqli_connect('localhost','root','','techaura');
$name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
 if ($name==""||$email==""||$subject==""||$message=="") {
 	echo '<script type="text/javascript">

          window.onload = function () { alert("Please fill the full Form");
          window.location="game_registration.php"; }

</script>'; 
 	# code...
 }
 else
 {
 	$query="INSERT INTO `feedback`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
	$data= mysqli_query($con,$query);

		echo '<script type="text/javascript">

          window.onload = function () { alert("Regestration Successful");
          window.location="http://localhost/Techaura/student_concat.php"; }

          </script>';
		}
       

?>