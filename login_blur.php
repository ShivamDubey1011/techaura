<?php 
$con=mysqli_connect('localhost','root','','techaura');

 ?>
 <!DOCTYPE html>
 <html>
 <head>

 	
 	<title>Blur</title>
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
        	<img src="blur.png" style="height: 300px"><br>
        	<font size="6"><u> Blur</font></u>
        	<p>
        		 <div><font size="5">
              Blur (stylized as blur) is an arcade racing video game released on May 2010 for Microsoft Windows, PlayStation 3 and Xbox 360. It was developed by Bizarre Creations and published by Activision in North America and Europe. The game features a racing style that incorporates real world cars and locales with arcade style handling and vehicular combat. Blur was the penultimate game developed by Bizarre Creations before they were shut down by Activision on February 18, 2011. 
              </font>
            </div>
        		
        	</p>
        	<hr>
        	<p>
                   <font size="6" color="red">Rule </font>:<br>

                   <ul>
  <li> The tournament structure will be having double elimination.
Game Type
search & destroy
</li>
  <li>Teams must have at least 5 players on their roster to play in the Tournament.</li>
  <li>The maximum amount of players per team is 6 Players.no</li>
  <li>First 3 rounds we will be having BO1 map, mr6. </li>
  <li>From semis and Finals BO3 maps, mr12.</li>
  <li> In looser Brackets again we will be having BO1 Map, mr6.</li>
  <li>The game admin and tournament team leader decisions are always final.</li>
</ul>
      </p>
      <p>
      	<hr>
      	<font color="red" size="4">
      	<span style="padding-left: 700px">
      	
      			4 Member Team<br>
      	 <span style="padding-left: 700px">per team <font color="blue"><u>200Rs</u> </font>.<br>
      	 		<span style="padding-left: 700px"><a class="btn btn-primary" href="payment\blur\index.html" role="button">Registration</a>

      		</font>
      	
      </p>
                                <span style="padding-right:90px"><a href="login_fifa19.php"><img src="previous.png" height="50px"></a>
           <span style="padding-left: 700px"><a href="blur.php"><img src="" height="50px"></a>


           
        </div>
        <div>
        
        	


        </div>
      </div>
      </center>




 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 </body>
 </html>