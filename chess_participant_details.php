<?php

$con=mysqli_connect('localhost','root','','techaura');
error_reporting(0);

$query="SELECT * FROM `game_registration`  WHERE Game='chess'";
$data=mysqli_query($con,$query);

$total=mysqli_num_rows($data);
;


echo $result['First_name'];




if ($total !=0) {
     ?>
         <!DOCTYPE html>
         <html>
         <head>
         	<title></title>
          <link rel="stylesheet" type="text/css" href="style.css">

         	<link rel="stylesheet"  href="css/bootstrap.min.css">
         </head>
         <body> 
             <div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="teacher_home.php"><img src="home_icon.png" style="height: 30px"> Home</a></li>
    <li class="menu-item">
      <a href=""><img src="event_icon.png" style="height: 30px">Participants</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="technical_participant.php" > Technical</a></li>
        <li class="menu-item"><a href="non_technical_participant.php" >Non Technical</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="home.php"><img src="login_icon.png" style="height: 30px"> Logout</a>
    </li>
   
  </ol>
</nav>
        <center> <div class="col-md-9">
           <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Game</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
       <th scope="col">college</th>
      <th scope="col">Mobile_no</th>
     



    </tr>
  </thead>
  





     <?php





	while ($result=mysqli_fetch_assoc($data)) {



		echo "<tbody>
    <tr>
      
          <td>".$result['Game']."</td>
          <td>".$result['First_name']."</td>
          <td>".$result['Last_name']."</td>
          <td>".$result['college']."</td>
          <td>".$result['Phone_no']."</td>
          <td><a href='update_studentgame_registration.php?gn=$result[Game]&fn=$result[First_name]&ln=$result[Last_name]&co=$result[college]&ph=$result[Phone_no]'></a></td>
     
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