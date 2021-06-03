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
        	<img src="nfs.png" style="height: 300px"><br>
        	<font size="6"><u> NFS MostWanted</font></u>
        	<p>
        		<div><font size="5">
        			PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under Greene's creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game's map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round. 
        			</font>
        		</div>
        		
        	</p>
        	<hr>
        	<p>
                   <font size="6" color="red">Rule </font>:<br>
                     <span style="padding-right:800px"><font size="5"> Basic Round: </font></span>
                   <ul>
  <li>  In this round sprint & circuit races will be played.
</li>
  <li>Four participants will be competing in this round</li>
  <li>At the end of one race the participant standing last position will be knocked out and remaining 3 will race again.</li>
  <li>With this process 1 participant will be the winner after 3 races and will be advanced to next round.</li><br>
  <span style="padding-right:760px"><font size="5"> Advance Rounds: </font></span>
  <li>In these rounds there will be 3 races between the participants</li>
  <li> Four participants will be competing in this round</li>
  <li>First will be Sprint, second will be 2 lap circuit and the third will be 3 lap circuit.</li>
  <li>The participant winning 2 of the 3 races will be in the semi final.</li>
  <li> If a participant wins 2 races continuously, then the third race will not be run.</li>
  <li>Thisprocess will be continued until we get top 9 participants.</li>
</ul>  

      </p>
      <p>
      	<hr>
      	<font color="red" size="4">
      	<span style="padding-left: 700px">
      	
      			4 Member Team<br>
      	 <span style="padding-left: 700px">per team <font color="blue"><u>200Rs</u> </font>.<br>
      	 		<span style="padding-left: 700px"><a class="btn btn-primary" href="payment\nfs\index.html" role="button">Registration</a>

      		</font>
      	
      </p>
        </p><span style="padding-right:90px"><a href="login_googler.php"><img src="previous.png" height="50px"></a>

                                  <span style="padding-left: 700px"><a href="login_fifa19.php"><img src="next.png" height="50px"></a>


           
        </div>
        <div>
        
        	


        </div>
      </div>
      </center>




 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 </body>
 </html>