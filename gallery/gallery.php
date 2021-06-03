<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet"  href="css/bootstrap.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
</head>
<body>
   <div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="http://localhost/Techaura/home.php"><img src="home_icon.png" style="height: 30px">Home</a></li>
    <li class="menu-item">
      <a href="http://localhost/Techaura/event.php"><img src="event_icon.png" style="height: 30px">Event</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="http://localhost/Techaura/concat.php"><img src="concat.png" style="height: 30px">Concat</a></li>
        <li class="menu-item"><a href="Ignite.php">Ignite</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="http://localhost/Techaura/gallery/gallery.php"><img src="gallery_icon.png" style="height: 30px">Gallery</a></li>
     <li class="menu-item"><a href="http://localhost/Techaura/contact.php"><img src="contact_icon.png" style="height: 30px">Contact</a></li>
    <li class="menu-item"><a href="http://localhost/Techaura/about_us.php"><img src="aboutus_icon.png" style="height: 30px"> About us</a></li>
    <li class="menu-item">
      <a href="http://localhost/Techaura/login.php"><img src="login_icon.png" style="height: 30px">Login</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="http://localhost/Techaura/admin_login.php"><img src="adminlogin_icon.png" style="height: 30px">Admin</a></li>
        <li class="menu-item"><a href="http://localhost/Techaura/teacher_login.php"><img src="teacherlogin_icon.png" style="height: 30px">Teacher</a></li>
         <li class="menu-item"><a href="http://localhost/Techaura/student_login.php"><img src="studentlogin_icon.png" style="height: 30px">Student</a></li>
      </ol>
    </li>
   
  </ol>
</nav>
</div>


<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="image1.png" style="width:100%">
    <img src="image2.png" style="width:100%">
    <img src="image3.png" style="width:100%">
    <img src="image4.png" style="width:100%">
    <img src="image5.png" style="width:100%">
    <img src="image6.png" style="width:100%">
    <img src="image7.png" style="width:100%">
     <img src="image29.png" style="width:100%">
   <img src="image30.png" style="width:100%">
   <img src="image31.png" style="width:100%">
   <img src="image32.png" style="width:100%">
   <img src="image33.png" style="width:100%">
   <img src="image34.png" style="width:100%">
   <img src="image35.png" style="width:100%">
   <img src="image34.png" style="width:100%">
   <img src="image35.png" style="width:100%">
   <img src="image66.png" style="width:100%">
   <img src="image71.png" style="width:100%">
<img src="image72.png" style="width:100%">
  </div>

  <div class="column">
   <img src="image8.png" style="width:100%">
   <img src="image9.png" style="width:100%">
   <img src="image10.png" style="width:100%">
   <img src="image11.png" style="width:100%">
   <img src="image12.png" style="width:100%">
   <img src="image13.png" style="width:100%">
   <img src="image14.png" style="width:100%">
   <img src="image36.png" style="width:100%">
   <img src="image37.png" style="width:100%">
   <img src="image38.png" style="width:100%">
   <img src="image39.png" style="width:100%">
   <img src="image40.png" style="width:100%">
   <img src="image41.png" style="width:100%">
   <img src="image42.png" style="width:100%">
   <img src="image67.png" style="width:100%">
<img src="image68.png" style="width:100%">
<img src="image69.png" style="width:100%">
<img src="image70.png" style="width:100%">



  </div>  


  <div class="column">
      <img src="image15.png" style="width:100%">
   <img src="image16.png" style="width:100%">
   <img src="image17.png" style="width:100%">
   <img src="image18.png" style="width:100%">
   <img src="image19.png" style="width:100%">
   <img src="image20.png" style="width:100%">
   <img src="image21.png" style="width:100%">
    <img src="image43.png" style="width:100%">
   <img src="image44.png" style="width:100%">
   <img src="image45.png" style="width:100%">
   <img src="image46.png" style="width:100%">
   <img src="image47.png" style="width:100%">
   <img src="image48.png" style="width:100%">
   <img src="image49.png" style="width:100%">
   <img src="image29.png" style="width:100%">
   <img src="image30.png" style="width:100%">
   <img src="image31.png" style="width:100%">
   <img src="image32.png" style="width:100%">
   <img src="image33.png" style="width:100%">
   <img src="image34.png" style="width:100%">
   <img src="image35.png" style="width:100%">
   <img src="image66.png" style="width:100%">

  </div>
  <div class="column">
   <img src="image22.png" style="width:100%">
   <img src="image23.png" style="width:100%">
   <img src="image24.png" style="width:100%">
   <img src="image25.png" style="width:100%">
   <img src="image26.png" style="width:100%">
   <img src="image27.png" style="width:100%">
   <img src="image28.png" style="width:100%">
   <img src="image50.png" style="width:100%">
  <img src="image60.png" style="width:100%">
  <img src="image61.png" style="width:100%">
  <img src="image62.png" style="width:100%">
  <img src="image63.png" style="width:100%">
  <img src="image64.png" style="width:100%">
  <img src="image65.png" style="width:100%">
  <img src="image29.png" style="width:100%">
   <img src="image30.png" style="width:100%">
   <img src="image31.png" style="width:100%">
   <img src="image32.png" style="width:100%">
   <img src="image33.png" style="width:100%">
   
  </div>

 

  
  
 
</div>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
