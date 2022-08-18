<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="img/LOGO2.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Movies - MaxMovies</title>

</head>
<body class="bg-dark">
	<?php include 'header.php' ?>


	<div class="container rounded-3 bg-dark">
		
				<div class="border-top border-5 border-warning text-light p-3" id="title">
		  			<h1>Top Movies</h1>
	    	</div>


				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
				  </div>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="img/ds.png" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Demon Slayer: Mugen Train</h5>
				        <p>A boy raised by boars, who wears a boar's head, boards the Infinity Train on a new mission with the Flame Pillar along with another boy who reveals his true power when he sleeps. Their mission is to defeat a demon who has been tormenting people and killing the demon slayers who oppose it.</p>
				        <a href="index.php" style="margin-bottom: 5%;"><button class="btn btn-warning"> more info</button></a>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="img/ave.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>The Avengers</h5>
				        <p>When Thor's evil brother, Loki (Tom Hiddleston), gains access to the unlimited power of the energy cube called the Tesseract, Nick Fury (Samuel L. Jackson), director of S.H.I.E.L.D., initiates a superhero recruitment effort to defeat the unprecedented threat to Earth. Joining Fury's "dream team" are Iron Man (Robert Downey Jr.), Captain America (Chris Evans), the Hulk (Mark Ruffalo), Thor (Chris Hemsworth), the Black Widow (Scarlett Johansson) and Hawkeye (Jeremy Renner).</p>
				        <a href="index.php" style="margin-bottom: 5%;"><button class="btn btn-warning"> more info</button></a>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="img/jl.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Justice League</h5>
				        <p>Fuelled by his restored faith in humanity, and inspired by Superman's selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat. Together, Batman and Wonder Woman work quickly to recruit a team to stand against this newly-awakened enemy. Despite the formation of an unprecedented league of heroes in Batman, Wonder Woman, Aquaman, Cyborg and the Flash, it may be too late to save the planet from an assault of catastrophic proportions.</p>
				        <a href="index.php" style="margin-bottom: 5%;"><button class="btn btn-warning"> more info</button></a>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="https://i2.wp.com/kpopslostfangirl.com/wp-content/uploads/2020/12/Peninsula-movie-1-scaled.jpeg?w=1920&ssl=1" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Peninsula</h5>
				        <p>Jung Seok, a former soldier, along with his teammates, sets out on a mission to battle hordes of post-apocalyptic zombies in the Korean peninsula wastelands.</p>
				        <a href="index.php" style="margin-bottom: 5%;"><button class="btn btn-warning"> more info</button></a>
				      </div>
				    </div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
				<br>
				<br>
				<div class="border-top border-5 border-warning text-light p-3" id="title">
		  			<h1>Top latest Movies</h1>
	    	</div>

	    <div class="row row-cols-1 row-cols-md-4 g-4 bg-dark container">
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.2/10</div>
			      <img src="https://i0.wp.com/bloody-disgusting.com/wp-content/uploads/2021/08/dune-poster-2-new.png?w=1515&ssl=1" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">Dune</h5>
			        <p class="movie-desc">A mythic and emotionally charged hero's journey, "Dune" tells the story of Paul Atreides...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>

			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.3/10</div>
			      <img src="https://www.animenewsnetwork.com/hotlink/thumbnails/crop1200x630gHF/cms/news.3/158465/mugen-train.jpg" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">Demon Slayer: Mugen Train</h5>
			        <p class="movie-desc">After his family was brutally murdered and his sister turned into a demon...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.4/10</div>
			      <img src="https://i0.wp.com/butwhythopodcast.com/wp-content/uploads/2020/07/hamilton-film-disney-plus_thumb800.jpg?w=800&ssl=1" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">Hamilton</h5>
			        <p class="movie-desc">The real life of one of America's foremost founding fathers and first Secretary of the Treasury...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.3/10</div>
			      <img src="https://i2.wp.com/theroughcutpod.com/wp-content/uploads/2021/04/The-Father.jpeg?fit=1200%2C675&ssl=1" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">The Father</h5>
			        <p class="movie-desc">A man refuses all assistance from his daughter as he ages. As he tries to make sense of his...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.3/10</div>
			      <img src="https://d1nslcd7m2225b.cloudfront.net/Pictures/780xany/4/7/0/1314470_1917_313101.jpg" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">1917</h5>
			        <p class="movie-desc">April 6th, 1917. As a regiment assembles to wage war deep in enemy territory, two soldiers are...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.2/10</div>
			      <img src="https://mb.com.ph/wp-content/uploads/2020/12/klaus.jpg" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">Klaus</h5>
			        <p class="movie-desc">A simple act of kindness always sparks another, even in a frozen, faraway place. When...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.4/10</div>
			      <img src="https://www.joker.movie/images/share.jpg" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">Joker</h5>
			        <p class="movie-desc">In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>
			      </div>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card">
			    	<div class="rating text-dark"><i class="fas fa-star text-warning"></i> 8.1/10</div>
			      <img src="https://robbreport.com/wp-content/uploads/2019/11/ford_v_ferrari_onesheet_rgb.jpg?w=1000" class="card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="movie-title">Ford v Ferrari</h5>
			        <p class="movie-desc">American car designer Carroll Shelby and driver Ken Miles battle corporate interference and the...<br><a class="text-light" href="">Click to show more</a></p>
			        <a href=""><button class="btn btn-outline-light">Info</button></a>
			        <a href="booking.php"><button class="btn btn-outline-warning">Buy</button></a>
			      </div>
			    </div>
			  </div>
			<?php include 'footer.php' ?>
			</div>

	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>