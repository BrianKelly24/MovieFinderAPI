<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.jpg">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="../index.php">MovieFinder</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="navbarColor02">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="../index.php">Discover...</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="php/login.php">Login<span class="sr-only">(current)</span></a>
					</li>
					<?php if(!isset($_SESSION['uid'])) { ?>
					<li class="nav-item">
						<a class="nav-link" href="signup.php">Sign Up</a>
					</li>
					<?php } ?>
					<?php if(isset($_SESSION['uid'])) { ?>
					<li action="php/methods.php" method="POST" class="nav-item">
						<a class="nav-link" href="signup.php">Sign Up</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</nav>
	<br>
	
	<div class="container">
		<div id="btnStyle" class="jumbotron">
			<?php if(!isset($_SESSION['loginError'])) { ?>
			<form action="methods.php" method="POST">
				<input type="text" name="uid" placeholder="Username..." class="form-control"><br>
				<input type="password" name="pwd" placeholder="Password..." class="form-control"><br>
				<button id="btnHover" id="btnStyle" type="submit" class="btn btn-danger" name="login">Login!</button><br>
				<br>
				<h3>
				  Hey!
				  <small>Still yet to make an <a href="signup.php">account?</small>
				</h3>
			</form>
			<?php } ?>
			<?php if(isset($_SESSION['loginError'])) { ?>
			<form action="methods.php" method="POST">
				<div class="form-group has-danger">
					<label class="form-control-label" for="inputDanger1">Invalid input!</label>
					<input type="text" class="form-control is-invalid" id="inputInvalid" name="uid" placeholder="Username..."><br>
					<input type="password" class="form-control is-invalid" id="inputInvalid" name="pwd" placeholder="Password...">
					<div class="invalid-feedback">Something went wrong with those details, try again?</div>
					<br>
					<button id="btnHover" id="btnStyle" type="submit" class="btn btn-danger" name="login">Login!</button><br>
					<br>
					<h3>
					  Hey!
					  <small>Still yet to make an <a href="signup.php">account?</small>
					</h3>
				</div>
			</form>
			<?php } ?>
		</div>
	</div>
		
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	</body>
</html>