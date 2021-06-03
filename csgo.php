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

            
     <div id="mySidenav" class="sidenav">
  <a href="indoor.php" id="indoorgame">Technical</a>
  <a href="outdoor.php" id="outdoorgame">Non Technical</a>
     </div>


     <center>
     <div class="col-md-9">
        <div class="jumbotron" >
          <img src="csgo.png" style="height: 300px"><br>
          <font size="6"><u> CSGO</font></u>
          <p>
            <div><font size="5">
            Counter-Strike: Global Offensive (CS:GO) is a multiplayer first-person shooter video game developed by Hidden Path Entertainment and Valve Corporation. It is the fourth game in the Counter-Strike series and was released for Microsoft Windows, OS X, Xbox 360, and PlayStation 3 on August 21, 2012, while the Linux version was released in 2014.

The game pits two teams against each other: the Terrorists and the Counter-Terrorists. Both sides are tasked with eliminating the other while also completing separate objectives. The Terrorists, depending on the game mode, must either plant the bomb or defend the hostages, while the Counter-Terrorists must either prevent the bomb from being planted, defuse the bomb, or rescue the hostages. 
              </font>
            </div>
            
          </p>
          <hr>
          <p>
                   <font size="6" color="red">Rule </font>:<br>

                   <ul>
                     <li> A total of 64 teams will take part in this tournament, all slots will be open for registration. It will be based on a first come first serve basis
</li>
  <li>All Players must be living in the MENA region only and must be registered on the TechAura website</li>
  <li>You must have an active CS:GO account in good standing and add it to your profile.</li>
                    <li>Team captains are required to update the admin beforehand and provide full details on players and Stand-ins. This includes full name, in game nickname, and steam account.</li>
 <li>Each team must have 5 players and 1 stand-in player but cannot be an existing player in the tournament. (even if that player was eliminated in an earlier stage)</li>
</ul>  

      </p>
      <p>
        <hr>
        <font color="red" size="4">
        <span style="padding-left: 700px">
        
            4 Member Team(+1)<br>
         <span style="padding-left: 700px">per team <font color="blue"><u>200Rs</u> </font>.<br>
            <span style="padding-left: 700px"><a class="btn btn-primary" href="student_login.php" role="button">Login</a>

          </font>
        
      </p><span style="padding-right:90px"><a href="pubg.php"><img src="previous.png" height="50px"></a>

                                  <span style="padding-left: 700px"><a href="googler.php"><img src="next.png" height="50px"></a>



           
        </div>
        <div>
        
          


        </div>
      </div>
      </center>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

 </body>
 </html>