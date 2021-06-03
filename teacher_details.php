<?php

$con=mysqli_connect('localhost','root','','techaura');
error_reporting(0);

$query="SELECT * FROM `teacher`";
$data=mysqli_query($con,$query);

$total=mysqli_num_rows($data);
;


echo $result['First_name'];




if ($total !=0) {
     ?>
         <!DOCTYPE html>
         <html>
         <head>

          <link rel="stylesheet" type="text/css" href="style.css">
         	<title></title>
         	<link rel="stylesheet"  href="css/bootstrap.min.css">
         </head>
         <body>
          <style >
	body{
		background-color:white;
	}

</style>
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
<font size="6" color="blue"><i><center>Teacher Details</center></i></font>

        <center> <div class="col-md-9">
           <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
      <th scope="col">email</th>
      <th scope="col">Mobile_no</th>

      <th scope="col">user_id</th>
     </tr>
  </thead>
  





     <?php





	while ($result=mysqli_fetch_assoc($data)) {



		echo "<tbody>
    <tr>
      
          
          <td>".$result['First_name']."</td>
          <td>".$result['Last_name']."</td>
          <td>".$result['email']."</td>
          <td>".$result['Phone_no']."</td>
          <td>".$result['user_id']."</td>
     
     </tr>";
		
	}
}
else{
	echo "No record found";
}

?>
  </tbody>
</table>

</div>
</center>

<center>
<button type="button" class="btn btn-outline-primary" onclick="myFunction()"><h2>Print</h2></button></center>

<script>
function myFunction() {
  window.print();
}
</script>









          <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
         </body>
         </html>