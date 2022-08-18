<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="img/LOGO2.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Ticket Booking - MaxMovies</title>

</head>
<body class="bg-dark">
	<?php include 'header.php' ?>
		<div class="container text-light" id="booking">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="border-bottom border-secondary border-5 p-3">Book Now</h1>
				</div>
			</div>
			
			<!-- BookMovie Form -->
			<div class="row mt-5">
				<div class="col-md-8">
					<form name="bookingForm" id="bookingForm" action="booksuccess.php" method="POST" novalidate>
						<div class="control-group form-group" id="reserve">
								
											<div id="reserve1" class="container">
												<div class="py-2 m-3">
													<div class="input-group">
														<label class="input-group-text bg-warning"><i class="fas fa-user"></i></label>
														<input type="text" class="form-control bg-dark text-light" name="name" value="Fullname">
													</div>
												</div>
												<div class="py-2 m-3">
													<div class="input-group">
														<label class="input-group-text bg-warning"><i class="fas fa-at"></i></label>
														<input type="email" class="form-control bg-dark text-light" name="email" value="Email" required>
													</div>
												</div>
												<div class="py-2 m-3">
													<div class="input-group">
														<label class="input-group-text bg-warning"><i class="fas fa-address-book"></i></label>
														<input type="number" class="form-control bg-dark text-light" name="num" placeholder="Contact no.">
													</div>
												</div>
											</div>
											<div id="reserve2" class="container">
												<table>
														<th>
															<select class="form-control bg-dark text-light" id="movie" name="movie" required>
																<option disabled value selected>Choose your Movie...</option>
																<option value="0" name="movie1" required>The Father</option>
																<option value="1" name="movie2">Hamilton</option>
																<option value="2" name="movie3">Demon Slayer: Mugen Train</option>
																<option value="3" name="movie4">Dune</option>
																<option value="2" name="movie5">1917</option>
																<option value="0" name="movie6">Klaus</option>
																<option value="3" name="movie7">Joker</option>
																<option value="1" name="movie8">Ford v Ferrari</option>
															</select>
														</th>
														<th>
															<select class="form-control bg-dark text-light" id="date" name="date" required>
																<option disabled value selected>Select date</option>
																<option value="0" name="date1" required>Monday</option>
																<option value="1" name="date2">Tuesday</option>
																<option value="2" name="date3">Wednesday</option>
																<option value="3" name="date4">Thursday</option>
																<option value="3" name="date5">Friday</option>
																<option value="3" name="date6">Saturday</option>
																<option value="3" name="date7">Sunday</option>
															</select>
														</th>
														<th>
															<select class="form-control bg-dark text-light" id="timing" name="timing" required>
																<option disabled value selected>Select time</option>
																<option value="0" name="timing1" required>10:00 AM</option>
																<option value="1" name="timing2">12:30 PM</option>
																<option value="2" name="timing3">3:00 PM</option>
																<option value="3" name="timing4">6:00 PM</option>
															</select>
														</th>
														<th>
															<div class="input-group">
																<label class="input-group-text bg-dark text-light">Number of tickets:</label>
																<input placeholder="no. tickets" type="number" min="1" max="10" class="form-control" id="ticket" value="1" required>
																<p class="help-block"></p>
															</div>
														</th>
												</table>
											</div>

										

									<br>
									<br>
									<div id="reserve3">
										<table class="container control-group form-group bg- m-1 border border-secondary">
												<div class="input-group-prepend mt-3">
													<tr>
														<label class="container text-center fs-3 border-top border-secondary m-1 p-2 mb-0" name='food'>Popcorn</label>
													</tr>
														<th>
															<div class="input-group">
																<label class="input-group-text bg-dark text-light">Original Flavor</label>
																<input type="number" min="1" max="10" class="form-control" id="orig" value="0" required>
															</div>	
														</th>
														<th>
															<div class="input-group">
																<label class="input-group-text bg-dark text-light">Caramel</label>
																<input type="number" min="1" max="10" class="form-control" id="caramel" value="0" required>
															</div>
														</th>
														<th>
															<div class="input-group">
																<label class="input-group-text bg-dark text-light">Chocolate</label>
																<input type="number" min="1" max="10" class="form-control" id="choco" value="0" required>
															</div>
														</th>
													
												</div>
										</table>
									</div>
									
									
									<br>
									<br>
									
									<div id="reserve4">
										<table class="container control-group form-group m-1 border border-secondary rounded rounded-3">
												<tr>
													<label class="container text-center fs-3 border-top border-secondary m-1 p-2 mb-0" name='drink'>Drinks</label>
												</tr>
													<th>
														<div class="input-group">
															<label class="input-group-text bg-dark text-light">Water</label>
															<input type="number" min="1" max="10" class="form-control" id="water" value="0" required>
														</div>
													</th>
													<th>
														<div class="input-group">
															<label class="input-group-text bg-dark text-light">Coke</label>
															<input type="number" min="1" max="10" class="form-control" id="coke" value="0" required>
														</div>
													</th>
													<th>
														<div class="input-group">
															<label class="input-group-text bg-dark text-light">Tea</label>
															<input type="number" min="1" max="10" class="form-control" id="tea" value="0" required>
														</div>
													</th>
										</table>
									</div>


						</div>


						<br>
						<br>
						<div id="visible">
							<h3 class="text-center" style="min-height:80px;">
							<strong>Total Amount:</strong>
							<p id="amount" class="text-center">00.00</p>
							</h3><br>
							
                            <small class="help-block text-center">Note: You cannot change these options once you proceed.</small><br>
							<button type="button" id="btnTicket" class="btn btn-outline-warning" data-toggle="collapse" data-target="#invisible" aria-expanded="false">Confirm and proceed</button><br>
							
						
						</div>

						<br>
						<br>
						<div id="invisible" class="collapse">
							<p><strong>Choose seats by clicking the corresponding seat in the layout below:</strong></p>
							<div id="holder">
								<ul id="place">
								</ul>
							</div>
							<div>
								<ul id="seatDescription" style="list-style-type:none;">
									
								</ul>
							</div>
							<br>
							<div style="clear:both;width:100%;">
								<input type="button" id="btnShowNew" value="Show My Seats" class="btn btn-outline-warning btn-sm"/>
								<input type="button" id="btnShow" value="Show booked seats" class="btn btn-outline-warning btn-sm"/>
							</div>

							<br>
							<h3 class="text-center" style="min-height:80px;">
							<strong>Total Amount:</strong>
							<p id="amountTotal">00.00</p>
							</h3>
							<br><br>
							<button type="submit" id="btnBook" class="btn btn-outline-warning btn-block" >Buy now</button><br><br><br>

						</div>
					</form>
				</div>

			</div>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>
	  <?php include 'footer.php';?>

<script src="script/booknow.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>