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
        	<img src="chess.png" style="height: 300px"><br>
        	<font size="6"><u> Chess</font></u>
        	<p>
        		<div><font size="5">
        			Chess is a two-player strategy board game played on a checkered board with 64 squares arranged in an 8×8 grid.[1] The game is played by millions of people worldwide. Chess is believed to be derived from the Indian game chaturanga sometime before the 7th century. Chaturanga is also the likely ancestor of the Eastern strategy games xiangqi (Chinese chess), janggi (Korean chess), and shogi (Japanese chess). Chess reached Europe by the 9th century, due to the Umayyad conquest of Hispania. The pieces assumed their current powers in Spain in the late 15th century; the modern rules were standardized in the 19th century. 
        			</font>
        		</div>
        		
        	</p>
        	<hr>
        	<p>
                   <font size="6" color="red">Rule </font>:<br>

                   <ul>
  <li> Single elimination tournament with a max of 32 participants.
</li>
  <li>Participants decide who is to play white, and black. (flip a coin. Reach an agreement.)</li>
  <li>Draws will be replayed. (The player playing black will play with white for the rematch.)</li>
  <li>Each player will have a 30 minute time limit (1 hour total).</li>
  <li>A move is not completed until the opponent’s clock has been started.</li>
  <li>Player should not touch the clock except for pushing the button after making a move or to straighten it.</li>
</ul>  

      </p>
      <p>
      	<hr>
      	<font color="red" size="4">
      	<span style="padding-left: 700px">
      	
      			1 Person<br>
      	 <span style="padding-left: 700px"><font color="blue"><u>100Rs</u> </font>.<br>
      	 	<span style="padding-left: 700px"><font size="3"> For Registration please login</font>
      	 		<span style="padding-left: 700px"><a class="btn btn-primary" href="student_login.php" role="button">Login</a>

      		</font><br>
          <br>
           <span style="padding-left: 700px"><a href="cricket.php"><img src="next.png" height="50px"></a>

      		
          


      		
      	
      </p>




           
        </div>
        <div>
        
        	


        </div>
      </div>
      </center>





 </body>
 </html>