<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/LOGO2.png" type="image/x-icon">
    <title>About us - MaxMovies</title>

</head>
<body class="bg-dark">
	<?php include 'header.php' ?>


	<div class="container rounded-3 bg-dark p-5">
		<div id="home-logo">
			
			<h1 class="border-bottom border-secondary border-5 p-3">About Us</h1>
			<br>
			

			<div id="logo-ani d-flex justify-content-start">
				<video width="220"autoplay muted loop>
					<source src="img/LOGO.mp4" type="video/mp4">
				</video>
			</div>
		</div>
		<br>
		<div class="bg-dark text-light">
			<div class="card bg-dark d-flex justify-content-center" style="width: 50%;">
		    	MaxMovies is a web app developed by the students of CLSU for First Practical Exam in ITELEC 4100 Lab B. This web app provide free access to all thousands of movie across the world. MaxMovies let's you instantly book tickets for any show within a few easy steps, and all this, anywhere anytime. Reservation of tickets is always available and all movie lovers around the globe will experience the community and service in MaxMovies.
			</div>
		</div>
		<br><br><br>
		<div class="d-flex justify-content-start">
			<a class="btn btn-outline-warning rounded-pill" data-bs-toggle="collapse" href="#team" role="button" aria-expanded="false" aria-controls="collapseExample">Our Group</a>
		</div><br><br><br>

		<div class="collapse" id="team">
		  <div class="bg-dark text-light container">
		    <ul style="list-style-type:none;">
		    	<li class="list-group-item bg-dark text-light">Ian Luis Apaga</li>
		    	<li class="list-group-item bg-dark text-light">Venedict Gonzales</li>
		    	<li class="list-group-item bg-dark text-light">Mark Anthony Maranan</li>
		    </ul>
		  </div>
		</div>

		<br>
		<br>
		<br>

<?php include 'footer.php' ?>

	</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>