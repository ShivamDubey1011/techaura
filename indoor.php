<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>





 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="stylesheet"  href="css/bootstrap.min.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 150px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#indoorgame {
  top: 140px;
  background-color: #4CAF50;
}

#outdoorgame {
  top: 200px;
  background-color: #2196F3;
}


</style>
 </head>
 <body>
 
      <div class=" border-light mb-3 p-2" style="background-color:#8EAEBD"> 
<h1 align="center" style="color: white  "><b>TechAura</b></h1>
</div>
<nav class="menu">
  <ol>
    <li class="menu-item"><a href="home.php"><img src="home_icon.png" style="height: 30px"> Home</a></li>
    <li class="menu-item">
      <a href="event.php"><img src="event_icon.png" style="height: 30px"> Event</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="concat.php" ><img src="concat.png" style="height: 30px">Concat</a></li>
        <li class="menu-item"><a href="Ignite.php">Ignite</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="gallery/gallery.php"><img src="gallery_icon.png" style="height: 30px"> Gallery</a></li>
     <li class="menu-item"><a href="contact.php"><img src="contact_icon.png" style="height: 30px"> Contact</a></li>
  <li class="menu-item"><a href="about_us.php"><img src="aboutus_icon.png" style="height: 30px"> About us</a></li>
    <li class="menu-item">
      <a href="login.php"><img src="login_icon.png" style="height: 30px"> Login</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="admin_login.php"><img src="adminlogin_icon.png" style="height: 30px"> Admin</a></li>
        <li class="menu-item"><a href="teacher_login.php"><img src="teacherlogin_icon.png" style="height: 30px"> Teacher</a></li>
         <li class="menu-item"><a href="student_login.php"><img src="studentlogin_icon.png" style="height: 30px"> Student</a></li>
      </ol>
    </li>
   
  </ol>
</nav>
<br><br>

              <div id="mySidenav" class="sidenav">
             <a href="indoor.php" id="indoorgame">Technical</a>
            <a href="outdoor.php" id="outdoorgame">Non Technical</a>
         </div>


       <span style="padding-left: 90px">
       	<a href="pubg.php">
       <img src="pubg1.png" style="height: 400px"></a> <span style="padding-left: 40px">
       	<a href="csgo.php"><img src="csgo1.png" style="height: 400px"></a><span style="padding-left: 40px">
          <a href="googler.php"><img src="googler1.png" style="height: 400px"></a>
          <br><span style="padding-left: 250px"><font size="6" color="white"> Pubg</font>
            <span style="padding-left: 380px"><font size="6" color="white"> CSGO</font>
              <span style="padding-left: 320px"><font size="6" color="white"> Googler</font>
                <br>

                <span style="padding-left: 90px">
        <a href="nfs.php">
       <img src="nfs1.png" style="height: 400px"></a> <span style="padding-left: 40px">
        <a href="fifa19.php"><img src="fifa191.png" style="height: 400px"></a><span style="padding-left: 40px">
          <a href="blur.php"><img src="blur1.png" style="height: 400px"></a>
          <br><span style="padding-left: 180px"><font size="6" color="white"> NFS MostWanted</font>
            <span style="padding-left: 270px"><font size="6" color="white"> FIFA19</font>
              <span style="padding-left: 320px"><font size="6" color="white"> BLUR</font>







               













 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 </body>
 </html>