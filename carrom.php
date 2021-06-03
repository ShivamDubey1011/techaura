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
        	<img src="carrom.png" style="height: 300px"><br>
        	<font size="6"><u> Carrom</font></u>
        	<p>
        		<div><font size="5">
        			Carrom (also spelled carom) is a cue sport-based tabletop game of Indian origin. The game is very popular in India, Bangladesh, Afghanistan, Nepal, Pakistan, Sri Lanka, Arabian countries and surrounding areas, and is known by various names in different languages. In South Asia, many clubs and cafés hold regular tournaments. Carrom is very commonly played by families, including children, and at social functions. Different standards and rules exist in different areas.    
        			</font>
        		</div>
        		
        	</p>
        	<hr>
        	<p>
                   <font size="6" color="red">Rule </font>:<br>

                   <ul>
  <li>For the very first turn, the player is allowed three attempts to "break" i.e. disturb the central group of counters.
</li>
  <li>It doesn't matter which piece the striker hits first and it doesn't matter if the striker hits no pieces.</li>
  <li>When the serving side loses a rally, the serve passes to their opponent(s)</li>
  <li>If a the striker pockets the Queen and/or one or more pieces of her own colour, the player retrieves the striker and takes another strike.</li>
  <li>If the player pockets no pieces or commits a foul, the turn finishes.</li>
</ul>  

      </p>
      <p>
      	<hr>
      	<font color="red" size="4">
      	<span style="padding-left: 700px">4person game
      	
      		<br>
      	 <span style="padding-left: 700px">1 person participation<font color="blue"><u>180Rs</u> </font>.<br>
      	 	<span style="padding-left: 700px"><font size="3"> For Registration please login</font>
      	 		<span style="padding-left: 700px"><a class="btn btn-primary" href="student_login.php" role="button">Login</a>

      		</font><br>
          <br>
       <span style="padding-right:90px"><a href="badminton.php"><img src="previous.png" height="50px"></a>
           <span style="padding-left: 700px"><a href="blur.php"><img src="" height="50px"></a>
      		
          


      		
      	
      </p>




           
        </div>
        <div>
        
        	


        </div>
      </div>
      </center>





 </body>
 </html>