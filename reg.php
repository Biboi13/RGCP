<!DOCTYPE html>

<head>
<title> Registration </title>	
<link rel="stylesheet" type="text/css" href="CSS/CSS.css" media="all">
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">

	<body>
	<center>
	<div class ="logo">
	<a href ="index.html">
	<img src = "images/logo.png" width= 400 height = 200>
	</a>
	</div>
	
	<div class = "menu">
	<ul style="list-style: none;">
	<li><a class="active" href="Home.html">Home</a></li>
	<li class="dropdown"> <a href="au.html" class="dropbtn">About us</a> 
    <div class="dropdown-content">
      <a href="rg.html">RGCP</a>
      <a href="back.html">Background</a>
	  <a href="mav.html">Mission and Vision</a>
      <a href="dp.html">Developer's Page</a>
	</div>
	</li>
	<li class="dropdown"> <a href="service.php" class="dropbtn">Service </a>
	  <div class="dropdown-content">
	  <a href="repair.php"> Repair </a>
      <a href="upgrade.php"> Upgrade </a>
	</div>
	</li>
	<li class="dropdown"> <a href="store.html" class="dropbtn"> Store </a>
	  <div class="dropdown-content">
      <a href="consoles.html"> Consoles </a>
      <a href="games.html">Game Cartridge</a>
	  <a href="acces.html">Accesories </a>
	</div>
	</li>
	<li><a class="active" href="contact.html">Contacts </a></li>
	<li style="float:right"><a href="reg.php">Register</a></li>
	<li style="float:right"><a href="login.php">Login</a></li>
	</li>
	</ul>
		</div>	
	
	<div class = "bgcon">
	</div>
		<h1>REGISTER</h1>
		<form action="registeration.php" method="POST" >					
		<input type="text" name="fname" placeholder="Full Name"><br />
		<input type="text" name="age" placeholder="Age"><br />
		<input type="text" name="address" placeholder="Address"><br/>
		<input type="Date" name="bd" placeholder="Birthday"><br />
		<input type="email" name="email" placeholder="Email Address"><br />
		<input type="text" name="uname" placeholder="Username"><br />
		<input type="password" name="pword" placeholder="Password"><br />
		<select name="gender" value="Gender">
			<option ></option>
			<option name="gender">Male</option>
			<option name="gender">Female</option>
		</select><br />
		<input type="submit" name="submit" value="Register">							
		</form>
		<a href="login.php">Already a member?</a>	
	


		
		
	<div id="foot">
		<br>
		<center>
		<div class="box" id="facebook"> <img src = "images/logos/fb.png" height =70 width =70>&#62220;</div>
		<div class="box" id="twitter">  <img src = "images/logos/twitter.png" height =70 width =75>&#62217;</div>
		<div class="box" id="google">   <img src = "images/logos/gplus.png" height =70 width =75>&#62223;</div>
	</center>
	</div>
	</center>	
	</body>


	
</html>