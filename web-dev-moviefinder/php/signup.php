<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up!</title>
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
					<?php if(!isset($_SESSION['uid'])) { ?>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<?php } ?>
					<?php if(isset($_SESSION['uid'])) { ?>
					<li action="php/methods.php" method="POST" class="nav-item">
						<a class="nav-link" href="php/logout.php">Logout</a>
					</li>
					<?php } ?>
					<li class="nav-item active">
						<a class="nav-link" href="signup.php">Sign Up<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
	<br>
	
	<div class="container">
		<div id="btnStyle" class="jumbotron">
			<?php if(!isset($_SESSION['signupErrorEmpty'])) { ?>
			<form action="methods.php" method="POST">
				<input type="text" name="first" placeholder="Firstname..." class="form-control"><br>
				<input type="text" name="last" placeholder="Lastname..." class="form-control"><br>
				<input type="text" name="email" placeholder="Email Address..." class="form-control"><br>
				<input type="text" name="uid" placeholder="Username..." class="form-control"><br>
				<input type="password" name="pwd" placeholder="Password..." class="form-control"><br>
				<button id="btnStyle btnHover" type="submit" class="btn btn-danger" name="signup">Sign Up Now!</button>
			</form>
			<?php } ?>
			<?php if(isset($_SESSION['signupErrorEmpty'])) { ?>
			<form action="methods.php" method="POST">
				<div class="form-group has-danger">
					<label class="form-control-label" for="inputDanger1">Please insert details, for each input!</label>
					<input type="text" name="first" placeholder="Firstname..." class="form-control"><br>
					<input type="text" name="last" placeholder="Lastname..." class="form-control"><br>
					<input type="text" name="email" placeholder="Email Address..." class="form-control"><br>
					<input type="text" name="uid" placeholder="Username..." class="form-control"><br>
					<input type="password" name="pwd" placeholder="Password..." class="form-control"><br>
					<button id="btnStyle" type="submit" class="btn btn-danger" name="signup">Sign Up Now!</button>
				</div>
			</form>
			<?php } ?>
		</div>
	</div>
	
	<div class="container">
		<div class="feather jumbotron">
			<div class="row">
				<div class="col-md-6">
					<img src="../img/favicon.jpg"/>
				</div>
				<div class="col-md-6">
					<h2>Why MovieFinder?</h2>
					<br>
					<div class="card border-success">
						<div class="card-body">
							<blockquote class="card-blockquote">
								<p>Personal organiser for film fanatics!  <img width="25" height="25" src="../img/green.png"/></p>
							</blockquote>
						</div>
					</div>
					<br>
					<div class="card border-success">
						<div class="card-body">
							<blockquote class="card-blockquote">
								<p>Instant access to all information on the latest and greatest films!  <img width="25" height="25" src="../img/green.png"/></p>
							</blockquote>
						</div>
					</div>
					<br>
					<div class="card border-success">
						<div class="card-body">
							<blockquote class="card-blockquote">
								<p>Fresh news from our loyal community in the thread section, who all share a passion for one thing!  <img width="25" height="25" src="../img/green.png"/></p>
							</blockquote>
						</div>
					</div>
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
	</body>
</html>