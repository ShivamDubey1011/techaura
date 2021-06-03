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
        	<img src="badminton.png" style="height: 300px"><br>
        	<font size="6"><u> Badminton</font></u>
        	<p>
        		<div><font size="5">
        			Badminton is a racquet sport played using racquets to hit a shuttlecock across a net. Although it may be played with larger teams, the most common forms of the game are "singles" (with one player per side) and "doubles" (with two players per side). Badminton is often played as a casual outdoor activity in a yard or on a beach; formal games are played on a rectangular indoor court. Points are scored by striking the shuttlecock with the racquet and landing it within the opposing side's half of the court.   
        			</font>
        		</div>
        		
        	</p>
        	<hr>
        	<p>
                   <font size="6" color="red">Rule </font>:<br>

                   <ul>
  <li>Each game is played for 21 points, with players scoring a point whenever they win a rally. 
</li>
  <li>At the start of the rally, the server and receiver stand in diagonally opposite service courts. This is similar to tennis, except that a badminton serve must be hit below waist height and with the racquet shaft pointing downwards, the shuttlecock is not allowed to bounce and in badminton, the players stand inside their service courts unlike tennis</li>
  <li>When the serving side loses a rally, the serve passes to their opponent(s)</li>
  <li>In singles, the server stands in her/his right service court when her/his score is even, and in her/his left service court when her/his score is odd.  </li>
  <li>The Captain must be from NJIT. Teammates do not have to be from NJIT. </li>
  <li>At the start of a match, a coin is tossed. The winners of the coin toss may choose whether to serveor receive first, or they may choose which end of the court they wish to occupy.</li>
</ul>  

      </p>
      <p>
      	<hr>
      	<font color="red" size="4">
      	<span style="padding-left: 700px">
      	
      		<br>
      	 <span style="padding-left: 700px">registration fee<font color="blue"><u>150Rs</u> </font>.<br>
      	 	<span style="padding-left: 700px"><font size="3"> For Registration please login</font>
      	 		<span style="padding-left: 700px"><a class="btn btn-primary" href="student_login.php" role="button">Login</a>

      		</font><br>
          <br>
           <span style="padding-right:90px"><a href="cricket.php"><img src="previous.png" height="50px"></a>

                                  <span style="padding-left: 700px"><a href="carrom.php"><img src="next.png" height="50px"></a>
          


      		
      	
      </p>




           
        </div>
        <div>
        
        	


        </div>
      </div>
      </center>





 </body>
 </html>