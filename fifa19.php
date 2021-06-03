<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>
 <!DOCTYPE html>
 <html>
 <head>
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet"  href="css/bootstrap.min.css">
  <title></title>

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
  top: 220px;
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
      
     <div id="mySidenav" class="sidenav">
  <a href="indoor.php" id="indoorgame">Indoor Games</a>
  <a href="outdoor.php" id="outdoorgame">Non Technical</a>
     </div>


     <center>
     <div class="col-md-9">
        <div class="jumbotron" >
          <img src="fifa19.png" style="height: 300px"><br>
          <font size="6"><u> FIFA19</font></u>
          <p>
            <div><font size="5">
              FIFA 19 is a football simulation video game developed by EA Vancouver as part of Electronic Arts' FIFA series. It is the 26th installment in the FIFA series, and was released on 28 September 2018 for PlayStation 3, PlayStation 4, Xbox 360, Xbox One, Nintendo Switch, and Microsoft Windows.[2]

As with FIFA 18, Cristiano Ronaldo featured as the cover athlete of the regular edition: however, following his unanticipated transfer from Spanish club Real Madrid to Italian side Juventus, new cover art was released. He also appeared with Neymar in the cover of the Champions edition.[3] From February 2019, an updated version featured Neymar, Kevin De Bruyne and Paulo Dybala on the cover of the regular edition. 
              </font>
            </div>
            
          </p>
          <hr>
          <p>
                   <font size="6" color="red">Rule </font>:<br>

                   <ul>
  <li> A player under the legal age of majority  older than 16 years of age (i.e. having lived for at least 16 calendar years after date of birth) as of the Tournament start date may participate with consent from parents or legal guardians.
</li>
  <li>No Roster Changes after registration has been submitted.</li>
  <li>Results for the Qualification Round will be based on your results in the game. So please make sure you create a Crew with the same name after successfully completing registration.</li>
  <li>Substitute players may be swapped out in between matches.</li>
  <li>All games will be in TPP Squad Mode.</li>
  <li>All players must be ranked Platinum or above at the time of registration.
Advertisement</li>
</ul>  

      </p>
      <p>
        <hr>
        <font color="red" size="4">
        <span style="padding-left: 700px">
        
            4 Member Team<br>
         <span style="padding-left: 700px">per team <font color="blue"><u>200Rs</u> </font>.<br>
          <span style="padding-left: 700px"><font size="3"> For Registration please login</font>
            <span style="padding-left: 700px"><a class="btn btn-primary" href="student_login.php" role="button">Login</a>

          </font><br>
          <br>
          <span style="padding-right:90px"><a href="nfs.php"><img src="previous.png" height="50px"></a>
           <span style="padding-left: 700px"><a href="blur.php"><img src="next.png" height="50px"></a>

          
          


          
        
      </p>




           
        </div>
        <div>
        
          


        </div>
      </div>
      </center>





 </body>
 </html>