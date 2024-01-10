<?php 
$title='Fun Olympic';
@include 'header.php';
 ?>
	<head>
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="news.css">
	</head>
	<body>
		<header>
  

  <!-- Toggler/collapsibe Button -->
  
			<div class="breaking-news-section">
				<span id="btext">Breaking News</span>
				<marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
					<a href="https://olympics.nbcsports.com/2022/09/25/eliud-kipchoge-berlin-marathon-world-record/" class="breaking-news">Eliud Kipchoge breaks marathon world record in Berlin </a>

					<a href="https://www.skysports.com/boxing/news/12183/12704581/olympic-boxing-faces-existential-threat-ahead-of-iba-election-urgent-changes-are-needed" class="breaking-news">Olympic boxing faces existential threat ahead of IBA election | 'Urgent changes are needed'</a>

					<a href="https://www.latestly.com/socially/sports/roger-federer-has-been-a-giant-of-tennis-winning-olympic-gold-and-20-grand-slam-titles-latest-tweet-by-olympics-4245383.html" class="breaking-news">Roger Federer Has Been a Giant of Tennis, Winning Olympic Gold and 20 Grand Slam Titles</a>
				</marquee>
			</div>
		</header>
		<main>
			<article id="popular-news">
				<div id="featured">
					<h2>FEATURED</h2>
					<section class="popular-news-carousel">
						<div id="carousel" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100" src="assets/img/surf.png" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>2022 Berlin marathon: Eliud Kipchoge in “absolute shape”</h5>
									
								 </div>
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/img/basket.png" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>2022 Women’s Basketball </h5>
									
								 </div>
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="assets/img/cycle.png" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<h5>2022 UCI BMX Racing in Bogata </h5>
									
								 </div>
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</section>
					
				</div>
				<div id="latest">
					<h2>LATEST</h2>
					<section class="news">
						<div class="news-container">
							<img src="assets/img/run.jpg">
							<p class="carousel-text">2022 ISA World Surfing Games</p>				
						</div>						
					</section>
					<section class="news">
						<div class="news-container">
							<img src="assets/img/surff.png">
							<p class="carousel-text">Japan and USA win spots for 2024</p>				
						</div>						
					</section>
				</div>
				<div id="our-picks">
					<h2>OUR PICKS</h2>
					<section class="news">
						<div class="news-container">
							<img src="assets/img/ice.jpg">
							<p class="carousel-text">Beijing 2022’s snow venues </p>				
						</div>						
					</section>
					<section class="news">
						<div class="news-container">
							<img src="assets/img/stadium.jpg">
							<p class="carousel-text">Beijing 2022 ready to welcome the world</p>				
						</div>						
					</section>
				</div>
			</article>
			<section class="more-news">
				<div class="news-section">
					<article class="world">
						<h2>Qualification</h2>
						<img src="assets/img/boxx.jpg">
						<h3>Boxing Olympic Qualification – Amman | Day 1 As It Happened</h3>
						<p>Two light-heavyweight bouts to round off the day, the first between China's Daxaing Chen and Iran's Ehsan Rouzbahani.Rouzbahani, a two-time Olympian, had five pro bouts back in 2017, before putting the vest back on. He's rugged, alright, and throws a wild right hand, as if he's throwing heavy stones. Chen takes the first round 5-0, by keeping his distance and timing his rival on the way in.</p>
					</article>
					<article class="sport">
						<h2>Achievement</h2>
						<img src="assets/img/achiev.jpg">
						<h3>Triple YOG gold medal haul just the start for a focused Radamus</h3>
						<p>Having lit up Lillehammer 2016 by claiming three consecutive alpine skiing gold medals, River Radamus is determined to ensure his record-breaking feats of a year ago are merely a prelude to a long and fulfilling career. Now a member of the US Ski Team, the 18-year-old is focused on the future.One year on from his stunning, triple gold medal-winning performances at the Youth Olympic Games, USA alpine skier River Radamus reflects on his achievements with a huge amount of pride and a slight sense of fear.</p>
					</article>
				</div>
				
				<aside>
					<h4>RECENT</h4>
					<div class="recent-news">
						<img src="assets/img/recent1.jpg">
						<p>Eliud Kipchoge breaks the world record in  marathon</p>
					</div>
					<div class="recent-news">
						<img src="assets/img/recent2.jpg">
						<p> Harmeet Desai crowned singles champions</p>
					</div>
					<div class="recent-news">
						<img src="assets/img/recent3.jpg">
						<p>India open account with gold in men’s junior trap team</p>
					</div>
					<div class="recent-news">
						<img src="assets/img/recent4.jpg">
						<p>Remco Evenepoel wins men's elite race at UCI Road 2022 - results</p>
					</div>
					<div class="recent-news">
						<img src="assets/img/recent5.jpg">
						<p>TENNIS: Roger Federer: Reaction to tennis legend's retirement</p>
					</div>
				</aside>
			</section>
		</main>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		
	</body>
	<?php 
$title='Fun Olympic';
@include 'footers.php';
 ?>
