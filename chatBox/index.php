<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>CHAT BOX</title>
		<link rel="stylesheet" href="css/index-style.css" type="text/css"/>
	</head>
	<body>
		<a href="logout.php" id="logout-link">Logout</a>
		
		<a href="#overlay" id="open-overlay">Settings</a><!-- link to settings in the index page -->
		<div id="overlay">
			<a href="#" class="close">&times;</a>
				<header>
					<h2>Settings</h2>
				</header>
				<div id="input">
					<form method="post" action="process-index.php">
						<p>Number of days after which your messages will be deleted: 
						<input type="number" name="quantity" min="0" max="365"></p> 
						<input class="done-btn" type="submit" value="Done!">
					</form>
				</div>
		</div>
		
		
			<div id="mask" onclick="document.location='#';"></div> <!-- a little bit - and the only - javascript -->
		
		<div id="container">
			<header>
				<h1><span style="font-family: papyrus;">In ChatBox: Sam</span></h1>
			</header>
			<div id="shouts"> <!--Yes, I am aware inline-styling is not good practice. I am still experimenting/learning... !-->
				<ul>
					<li class="shout"> <div class="date">4/25/2016</div> </li>
					<li class="shout"><span style="display: block; text-align: left;color: #800000;"><span style="color:#A9A9A9">3.30AM </span>Hey, what are you guys doing?</span></li>
					<li class="shout">Nothing much, you?<span style="color:#009999"> - Lab</span><span style="color:#A9A9A9"> 3.30AM</span></li>
					<li class="shout">Thinking about eating a potato<span style="color:#3333FF"> - Nathan </span><span style="color:#A9A9A9">3:30AM  </span></li>
					<li class="shout">lol<span style="color:#009999"> - Lab </span><span style="color:#A9A9A9">3:30AM  </span></li>
					<li class="shout"> <div class="date">4/26/2016</div> </li>
					<li class="shout">Need some homework help<span style="color:#009999"> - Lab </span><span style="color:#A9A9A9">3:30AM  </span></li>
					<li class="shout"><span style="display: block; text-align: left; color: #800000;"><span style="color:#A9A9A9">3.30AM </span>what's up</span></li>
				</ul>
			</div>
			<div id="input">
				<form method="post" action="process-index.php">
					<input type="text" name="user" placeholder="Enter Your Message"/>
					<br/> <!--line break!-->
					<input class="shout-btn" type="submit" name="submit" value="Shout It Out!" style="display: block; margin: 0 auto;"> <!--style for centering the button!-->
				</form>
			</div>
		</div>
	</body>
</html>