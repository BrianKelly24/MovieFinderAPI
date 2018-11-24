<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>MovieFinder</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpg">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="sss/sss.min.js"></script>
		<link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
		<script>jQuery(function($) {$('.slider').sss();});</script>
	</head>
	<body>
		<section class="background">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php">MovieFinder</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
					<span class="navbar-toggler-icon"></span>
				</button>
			
				<div class="collapse navbar-collapse" id="navbarColor02">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Discover...</a>
						</li>
						<?php if(!isset($_SESSION['uid'])) { ?>
						<li class="nav-item">
							<a class="nav-link" href="php/login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="php/signup.php">Sign Up</a>
						</li>
						<?php } ?>
						<?php if(isset($_SESSION['uid'])) { ?>
						<li class="nav-item active">
							<a href="favourites.php" class="nav-link"><?php echo $_SESSION['uid']; ?>/Settings<span class="sr-only">(current)</span></a>
						</li>
						<li>
							<a href="php/logout.php" class="nav-link">Logout</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</nav>
		<br>
		<div class="container">
			<div class="special jumbotron">
				<div class="row">
					<div class="col-md-4">
						<h3>Change Your Password!</h3>
						<form action="php/methods.php" method="POST">
							<input type="text" name="uid" placeholder="Username..." class="form-control"><br>
							<input type="password" name="pwd" placeholder="Current Password..." class="form-control"><br>
							<input type="password" name="enc" placeholder="New Password..." class="form-control"><br>
							<button id="btnStyle" type="submit" class="btn btn-danger" name="update">Update!</button><br>
						</form>
					</div>
					<div class="col-md-4">
						<h3>Update Your Avatar!</h3>
						<form action="php/methods.php" method="POST">
							<input type="text" name="uid" placeholder="Username..." class="form-control"><br>
							<input type="password" name="pwd" placeholder="Password..." class="form-control"><br>
							<input type="text" name="srcUpdate" placeholder="New Image URL..." class="form-control"><br>
							<button id="btnHover" id="btnStyle" type="submit" class="btn btn-danger" name="avatar">Change Avatar!</button><br>
						</form>
					</div>
					<div class="col-md-4">
						<h3>Delete Your Account!</h3>
						<form action="php/methods.php" method="POST">
							<input type="text" name="uid" placeholder="Username..." class="form-control"><br>
							<input type="password" name="pwd" placeholder="Password..." class="form-control"><br>
							<button id="btnHover" id="btnStyle" type="submit" class="btn btn-danger" name="delete">Delete!</button><br>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
		<script>
			getFavourite();
			displayFave();
		</script>
		</section>
	</body>
</html>