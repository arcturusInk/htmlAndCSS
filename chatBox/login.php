<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>CHAT BOX-Log In/Sign Up</title>
		<link rel="stylesheet" href="css/login-style.css" type="text/css"/>
	</head>
	<body>		
		<div id="logInCon">
			<header>
				<h3 id="logInHeader">Log In<h3>
			</header>
			<div class="input">
					<form method="post" action="process-login.php">
						<span class="asti_input"></span>
						<input type="text" name="email" placeholder="Email Address"></p>
						<span class="asti_input"></span>  
						<input type="text" name="passwd" placeholder="Password"></p>
						<input class="submit-btn" type="submit" value="Submit!">
					</form>
			</div>
			<p class="asti"><span>*</span> = Required Field</p>
		</div>		
		
		<div id="signUpCon">
			<header>
				<h3 id="signUpHeader">Sign Up<h3>
			</header>
			<div class="input">
					<form method="post" action="process-login.php">
						<span class="asti_input"></span>
						<input type="text" name="fname" placeholder="First Name"></p> 
						<span class="asti_input"></span>
						<input type="text" name="email" placeholder="Email Address"></p> 
						<span class="asti_input"></span>
						<input type="text" name="passwd" placeholder="Password"></p>
						<span class="asti_input"></span>
						<input type="text" name="chk-passwd" placeholder="Re-Enter Password"></p>
						<input class="submit-btn" type="submit" value="Submit!">
					</form>
			</div>
			<p class="asti"><span>*</span> = Required Field</p>
		</div>
	</body>
</html>