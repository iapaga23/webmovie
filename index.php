<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/LOGO2.png" type="image/x-icon">
    <title>Home - MaxMovies</title>

</head>
<body class="bg-dark">
	<?php include 'header.php' ?>


	<div class="container rounded-3 bg-dark p-5">
		<div id="home-logo">
			<div id="logo-ani">
				<video width="220"autoplay muted loop>
					<source src="img/LOGO.mp4" type="video/mp4">
				</video>
			</div>
			<p><br><br>Choose your movie online and Buy tickets now <br></p>
		</div>


		<div class="container" id="browse-btn">
			<a class="btn btn-outline-warning" href="movies.php" role="button">Browse Movies</a>
		</div>

<?php include 'footer.php' ?>

	</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>