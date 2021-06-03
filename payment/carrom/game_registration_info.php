<?php 
$con=mysqli_connect('localhost','root','','techaura');
$fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $college=$_POST['college'];
 $contact=$_POST['contact'];
  if ($fname==""||$lname==""||$college==""||$contact=="") {
 	echo '<script type="text/javascript">

          window.onload = function () { alert("Please fill the full Form");
          window.location="game_registration.php"; }

</script>'; 
 	# code...
 }
 else
 {
$query="INSERT INTO `game_registration`(`Game`, `First_name`, `Last_name`, `college`, `Phone_no`) VALUES ('carrom','$fname','$lname','$college','$contact')";
$data= mysqli_query($con,$query);

		echo '<script type="text/javascript">

          window.onload = function () { alert("Regestration Successful");
          window.location="http://localhost/Techaura/student_concat.php"; }

          </script>';
		}
       

?>