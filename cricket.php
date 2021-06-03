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
        	<img src="cricket.png" style="height: 300px"><br>
        	<font size="6"><u> Cricket</font></u>
        	<p>
        		<div><font size="5">
        			ricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are "out"). Means of dismissal include being bowled, when the ball hits the stumps and dislodges the bails, and by the fielding side catching the ball after it is hit by the bat, but before it hits the ground. When ten players have been dismissed, the innings ends and the teams swap roles. The game is adjudicated by two umpires, aided by a third umpire and match referee in international matches. They communicate with two off-field scorers who record the match's statistical information.  
        			</font>
        		</div>
        		
        	</p>
        	<hr>
        	<p>
                   <font size="6" color="red">Rule </font>:<br>

                   <ul>
  <li> During the tournament all participants are expected to behave professionally and should avoid abusive language/gestures/ question umpires� decisions. The participants must also remember to treat other players with respect as well as have fun
</li>
  <li>There is a severe penalty for anyone who curses an opponent. That person will be removed from the whole tournament. No EXCUSES. If three players from a single team are removed, the entire team is banned. The team and Captain must make sure this does not happen.</li>
  <li>Cursing is constituted as abusive, hateful, or malignant language or behavior.</li>
  <li>The Team Captain is responsible for informing all of the teammates about when the team will be playing and on what dates. Our responsibility is to tell the Captain when his team will be playing.</li>
  <li>The Captain must be from NJIT. Teammates do not have to be from NJIT. </li>
  <li>At no account is PSA held accountable for any injuries happening during a game.</li>
</ul>  

      </p>
      <p>
      	<hr>
      	<font color="red" size="4">
      	<span style="padding-left: 700px">
      	
      			11+1 Person<br>
      	 <span style="padding-left: 700px">each team<font color="blue"><u>250Rs</u> </font>.<br>
      	 	<span style="padding-left: 700px"><font size="3"> For Registration please login</font>
      	 		<span style="padding-left: 700px"><a class="btn btn-primary" href="student_login.php" role="button">Login</a>

      		</font><br>
          <br>

          <span style="padding-right:90px"><a href="chess.php"><img src="previous.png" height="50px"></a>

                                  <span style="padding-left: 700px"><a href="badminton.php"><img src="next.png" height="50px"></a>

          


      		
      	
      </p>




           
        </div>
        <div>
        
        	


        </div>
      </div>
      </center>





 </body>
 </html>