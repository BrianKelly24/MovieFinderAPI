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
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">MovieFinder</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="navbarColor02">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="movie.php">More Info...<span class="sr-only">(current)</span></a>
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
					<a href="php/logout.php" class="nav-link">Logout</a>
					<?php } ?>
				</ul>
			</div>
		</nav>
	<br>

	<div class="container">
		<div id="movie" class="more"></div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script>
		getMovie();
	</script>
	</body>
</html>