<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>
 <!DOCTYPE html>
 <html>
 <head>

 	<title>Pubg</title>
<link rel="stylesheet" type="text/css" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet"  href="css/bootstrap.min.css">
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
    <li class="menu-item"><a href="student_home.php"><img src="home_icon.png" style="height: 30px"> Home</a></li>
    <li class="menu-item">
      <a href="student_event.php"><img src="event_icon.png" style="height: 30px"> Event</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="student_concat.php" ><img src="concat.png" style="height: 30px">Concat</a></li>
        <li class="menu-item"><a href="student_Ignite.php">Ignite</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="s_gallery/gallery.php"><img src="gallery_icon.png" style="height: 30px"> Gallery</a></li>
     <li class="menu-item"><a href="student_contact.php"><img src="contact_icon.png" style="height: 30px"> Contact</a></li>
  <li class="menu-item"><a href="student_aboutus.php"><img src="aboutus_icon.png" style="height: 30px"> About us</a></li>
    <li class="menu-item">
      <a href="home.php"><img src="login_icon.png" style="height: 30px"> Logout</a>
      </ol>
    </li>
   
  </ol>
</nav>
  

     <div id="mySidenav" class="sidenav">
  <a href="student_indoor.php" id="indoorgame">Technical</a>
  <a href="student_outdoor.php" id="outdoorgame">Non Technical</a>
  
</div>


     <center>
     <div class="col-md-9">
        <div class="jumbotron" >
        	<img src="pubg.png" style="height: 300px"><br>
        	<font size="6"><u> Pubg</font></u>
        	<p>
        		<div><font size="5">
        			PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under Greene's creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game's map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round. 
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
  <li>All players must be ranked Platinum or above at the time of registration.</li>
</ul>  

      </p>
      <p>
      	<hr>
      	<font color="red" size="4">
      	<span style="padding-left: 700px">
      	
      			4 Member Team<br>
      	 <span style="padding-left: 700px">per team <font color="blue"><u>200Rs</u> </font>.<br>
      	 		<span style="padding-left: 700px"><a class="btn btn-primary" href="payment\pubg\index.html" role="button">Registration</a>

      		</font>
      	
      </p>
                                  <span style="padding-left: 700px"><a href="login_csgo.php"><img src="next.png" height="50px"></a>



           
        </div>
        <div>
        
        	


        </div>
      </div>
      </center>




 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 </body>
 </html>