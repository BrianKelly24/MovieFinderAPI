<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MovieFinder</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpg">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
						<li class="nav-item active">
							<a class="nav-link" href="#">Discover...<span class="sr-only">(current)</span></a>
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
						<li class="nav-item">
							<a class="nav-link" href="favourites.php"><?php echo $_SESSION['uid']; ?></a>
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
				<div id="btnStyle" class="jumbotron">
					<h3 class="text-center">Search For Any Movie</h3>
					<form id="searchForm">
						<input type="text" class="form-control" id="searchText" placeholder="Movie Name...">
						<br>
						<button id="btnHover" id="btnStyle" class="btn btn-danger">Let's Get It!</button>
					</form>
				</div>
			</div>
			
			<div class="container">
				<div id="movies" class="row"></div>
			</div>
			
			<div class="jumbotron gradient">
				<div class="row">
					<div class="col-md-12">
						<div class="slider">
							<img class="resize" src="img/stranger-things.jpg"/>
							<img class="resize" src="img/rsz_halloween.jpg"/>
							<img class="resize" src="img/reasons.jpg"/>
						</div>
					</div>
				</div>
			</div>
			<div class="feather jumbotron">
				<div class="row">
					<div class="col-md-3">
						<div class="card-loc">
							<div class="card card-size">
								<h3 class="card-header">"The kids from Hawkins, Indiana, are back on Netflix!"</h3>
								<div class="card-body">
									<h5 class="card-title">What are you waiting for?</h5>
									<h6 class="card-subtitle text-muted">"Stranger Tings 2" is now available to add to your favourites! Go check out the new trailer, and learn about the series' exciting plot and cast <a href="index.php">here!</a></h6>
								</div>
							<iframe width="599" height="315" src="https://www.youtube.com/embed/vgS2L7WPIO4" alt="Card image" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							<div class="card-body">
								<p class="card-text">"I’m thrilled to say that Stranger Things: Season 2 is a rousing success, which builds upon its already incredible cast and expertly expands the world of Hawkins"</p>
								<p><cite title="Source Title">David Griffin - IGN</cite></p>
								<p>Oh boy, IGN even have an in-depth review of all 9 episodes <a href="http://ie.ign.com/articles/2017/10/27/stranger-things-season-2-review">here!</a></p>
							</div>
								<div class="card-footer text-muted">
									Today at 11:03 am
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-loc">
							<h1 class="text-gradient">MovieFinder Greatness!</h1>
						</div>
						<div class="card-loc-2">
							<div class="card card-size">
								<h3 class="card-header">"October 31st is Fast Approaching!"</h3>
								<div class="card-body">
									<h5 class="card-title">Are you prepared for a 24 hour long nightmare this Halloween?</h5>
									<h6 class="card-subtitle text-muted">Get into the Halloween spirit with some of the greatest contempory horrors such as "Jigsaw" and the brand new "IT"! Or perhaps you'd prefer to take a trip to Haddonfield, Illinois and witness the escapse of the terrifying Michael Myres, in John Carpenter's origin of the slasher genre, "Halloween" 👻🎃💀</h6>
								</div>
							<img width="599" height="315" src="img/myres-card.png" alt="Card image"></img>
							<div class="card-body">
								<p class="card-text">"I'd like to be clear about this. If you don't want to have a really terrifying experience, don't see 'Halloween.'"</p>
								<p><cite title="Source Title">Roger Elbert Reviews</cite></p>
								<p>Still not convinced? Roger Elbert's full <a href="https://www.rogerebert.com/reviews/halloween-1979">review</a> will make this decision for you.</p>
							</div>
								<div class="card-footer text-muted">
									Yesterday
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card-loc-3">
							<div class="card card-size">
								<h3 class="card-header">"13 Reasons Why: Season 2 Will Be Hitting Your Favourites Soon!"</h3>
								<div class="card-body">
									<h5 class="card-title">So what can we expect from the new series?</h5>
									<h6 class="card-subtitle text-muted">Netflix officially announced a second season to air in 2018. Everybody from the cast to the author of the original novel Jay Asher was calling for it, so ultimately the renewal was no surprise. Here's a look at the latest trailer!</h6>
								</div>
							<iframe width="599" height="315" src="https://www.youtube.com/embed/osHHaK83VfQ" alt="Card image" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							<div class="card-body">
								<p class="card-text">According to Ben Lee, "season two will keep the same cast and the same setting."</p>
								<p><cite title="Source Title">Ben Lee - Digital Spy</cite></p>
								<p>We'll be sure to keep you posted, in the meantime here's Digital Spy's <a href="http://www.digitalspy.com/tv/13-reasons-why/feature/a828387/13-reasons-why-season-2-release-date-trailer-cast-theories-spoilers/">complete article!</a></p>
							</div>
								<div class="card-footer text-muted">
									2 days ago
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		<div class="container-color conatiner">
			<a href="#">Back To Top!</a>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="js/pxgradient-1.0.3.js"></script>
		<script src="js/pxgradient-1.0.3.min.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
		<script>
			toTop();
		</script>
		</section>
	</body>
</html>