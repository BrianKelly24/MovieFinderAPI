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
							<a class="nav-link" href="#"><?php echo $_SESSION['uid']; ?><span class="sr-only">(current)</span></a>
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
					<a href="settings.php">Settings   <img width="25" height="25" src="img/Settings-icon.png"/></a>
					<div class="row">
						<div class="col-md-4">
							<br>
							<img width="150" height="125" src="<?php echo $_SESSION['src']; ?>"/>
							<br>
							<h3><?php echo $_SESSION['uid']; ?></h3>
							<ul class="list-group">
								<li class="list-group-item"><strong>From: </strong>Ireland, Meath <img width="30px" height"15px" src="img/ireland-flag.gif"/></li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="list-group">
								<li class="list-group-item"><strong>Member Since: </strong>2016 26th March</li>
								<li class="list-group-item"><strong>Favourite Genres: </strong>Horror, Adventure, Comedy</li>
								<li class="list-group-item"><strong>Currently Watching: </strong>Stranger Things 2, The Friday The 13th Series</li>
							</ul>
						</div>
						<div class="col-md-4">
							<div class="card text-white bg-success">
								<div class="card-body">
									<blockquote class="card-blockquote">
										<h2>Welcome back <mark class="color"><?php echo $_SESSION['uid']; ?></mark>! You have<mark class="color">32 favourites</mark>and counting...</h2>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div id="favourites" class="row"></div>
			</div>
	
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
		<script>
			getFavourite();
		</script>
		</section>
	</body>
</html>