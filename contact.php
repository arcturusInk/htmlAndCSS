<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>CONTACT</title>
		<link rel="stylesheet" href="css/contact-style.css" type="text/css"/>
	</head>
	<body>
		<nav>
			<ul>
				<li><p>Swati Barua ... </p>
				<li><a id="border" href="about.php" >ABOUT ME</a></li>
				<li><a href="project.php">PROJECTS</a></li>
				<li><a href="contact.php" class="currentPage">CONTACT</a></li>
			</ul>
		</nav>

		<div id="container">
			<form method="post">
				<div id="wrap">
					<input type="text" name="email" placeholder="Email"> 
					<input type="text" name="name" placeholder="Name">
				</div>
				<input type="text" name="subject" placeholder="Subject">
				<input type="text" id="message" placeholder="Message">
				<input class="submit-btn" type="submit" name="submit" value="SEND">
			</form>
		</div>
		
		<footer>
			Website &copy; Swati Barua &trade; <?php echo date("Y"); ?> | <i> sb4393_at_nyu_dot_edu <i>
		</footer>
	</body>
</html>