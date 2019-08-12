<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Acorn.css">
	<link rel="stylesheet" href="Main.css">
	<title>Companion Stairlifts</title>
</head>

<body>



	<!-- Navigation -->


	<nav class="navbar navbar-expand-md nav-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img alt="Logo" src="Images/acorn-stairlifts-logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>


			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="Index.php">home</a>
					</li>






					<div class="dropdown">
						<button class="dropbtn">Reviews
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="Acorn.php" class="nav-link">Acorn</a>
							<a href="Age%20UK.php" class="nav-link">Age UK</a>
							<a href="Bison.php" class="nav-link">Bison</a>
							<a href="Brooks.php" class="nav-link">Brooks</a>
							<a href="Companion.php" class="nav-link active">Companion</a>
							<a href="Dolphin.php" class="nav-link">Dolphin</a>
							<a href="Halton.php" class="nav-link">Halton</a>
							<a href="Handicare.php" class="nav-link">Handicare</a>
							<a href="OakTree.php" class="nav-link ">Oak Tree</a>
							<a href="Platinum.php" class="nav-link">Platinum</a>
							<a href="Stannah.php" class="nav-link">Stannah</a>
						</div>
					</div>


					<div class="dropdown">
						<button class="dropbtn">Types
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="Curved.php" class="nav-link">Curved</a>
							<a href="Heavy%20Duty.php" class="nav-link">Heavy Duty</a>
							<a href="Narrow.php" class="nav-link">Narrow Stairs</a>
							<a href="Outdoor.php" class="nav-link">Outdoor</a>
							<a href="Reconditon.php" class="nav-link">Recondition</a>
							<a href="Straight.php" class="nav-link">Straight</a>
						</div>
					</div>


					<div class="dropdown">
						<button class="dropbtn">Local Suppliers
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="#" class="nav-link">Belfast</a>
							<a href="#" class="nav-link">Birmingham</a>
							<a href="#" class="nav-link">Cardiff</a>
							<a href="#" class="nav-link">Coventry</a>
							<a href="#" class="nav-link">Exeter</a>
							<a href="#" class="nav-link">Glasgow</a>
							<a href="#" class="nav-link">Liverpool</a>
							<a href="#" class="nav-link">london</a>
							<a href="#" class="nav-link">Manchester</a>
							<a href="#" class="nav-link">Nottingham</a>
							<a href="#" class="nav-link">Stroke-on-trent</a>
						</div>
					</div>


					<li class="nav-item">
						<a class="nav-link" href="Grants.php">Grants</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Prices.php">Prices</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Rental.php">Rental</a>
					</li>
				</ul>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="color: color: #901D1D; font-weight: bold;" id="call_us">
					Register
				</button>




			</div>
		</div>
	</nav>



	<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<form role="form" method="post" action="form2.php">
					<?php
// Start the session
session_start();
?>

					<div class="container-fluid welcome_box">
						<div class="container-fluid welcome">
							<div class="row">
								<!-- right -->
								<div class="ml-auto">
									<div class="selection_box">

										<div class="container register">
											<div class="row">
												<div class="col-md-12 register-right">
													<div class="tab-content" id="myTabContent">

														<h3 class="register-heading">Please enter your details below to compare prices and view exclusive offers.</h3>
														<div class="row register-form">
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="First Name *" value="" name="name" />

																</div>
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Last Name *" value="" />

																</div>
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="House name/ Number *" value="" />
																</div>
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Postcode *" value="" />
																</div>

															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />

																</div>
																<div class="form-group">
																	<input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
																</div>
																<div class="form-group">
																	<select class="form-control">
																		<option class="hidden" selected disabled>looking for a new or reconditioned stairlift?</option>
																		<option>New</option>
																		<option>Reconditioned</option>
																		<option>Not sure</option>
																	</select>
																</div>
																<div class="form-group">
																	<select class="form-control">
																		<option class="hidden" selected disabled>What type of staircase do you have?</option>
																		<option>Straight</option>
																		<option>Curved</option>
																		<option>Not sure</option>
																	</select>
																</div>

																<input type="submit" class="btnRegister" value="Register" />
															</div>

														</div>



													</div>
												</div>
											</div>

										</div>


									</div>
								</div>
							</div>
						</div>

					</div>

				</form>

			</div>
		</div>
	</div>







	<!-- end php code -->
	<form role="form" method="post" action="form2.php">
		<?php
// Start the session
session_start();
?>

		<div class="container-fluid welcome_box">
			<div class="container-fluid welcome">
				<div class="row">
					<!-- left -->
					<div class="col-sm-6 container">
						<h1 class="display-4">Save up to 30% OFF
							The Top UK Stairlift Brands</h1>
						<ul>
							<li>Trusted Local Suppliers</li>
							<li>Prices in 30 seconds</li>
							<li>Free No-Obligation Quotes</li>
							<li>100s of Satisfied Customers</li>
						</ul>
						<a href="#" class="btn btn-info welcome_button container" role="button">
							<h1>Get Prices Now</h1>
						</a>
					</div>
					<!-- right -->
					<div class="col-sm-6">
						<div class="selection_box">

							<div class="container register">
								<div class="row">
									<div class="col-md-12 register-right">
										<div class="tab-content" id="myTabContent">

											<h3 class="register-heading">Please enter your details below to compare prices and view exclusive offers.</h3>
											<div class="row register-form">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="First Name *" value="" name="name" />

													</div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Last Name *" value="" />

													</div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="House name/ Number *" value="" />
													</div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Postcode *" value="" />
													</div>

												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="email" class="form-control" placeholder="Your Email *" value="" name="email" />

													</div>
													<div class="form-group">
														<input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
													</div>
													<div class="form-group">
														<select class="form-control">
															<option class="hidden" selected disabled>looking for a new or reconditioned stairlift?</option>
															<option>New</option>
															<option>Reconditioned</option>
															<option>Not sure</option>
														</select>
													</div>
													<div class="form-group">
														<select class="form-control">
															<option class="hidden" selected disabled>What type of staircase do you have?</option>
															<option>Straight</option>
															<option>Curved</option>
															<option>Not sure</option>
														</select>
													</div>

													<input type="submit" class="btnRegister" value="Register" />
												</div>

											</div>



										</div>
									</div>
								</div>

							</div>


						</div>
					</div>
				</div>
			</div>

		</div>

	</form>
	<!-- Insert Comment Here -->


	<div class="container-fluid top_area">
		<h1 class="display-1">Companion Stairlifts</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<img src="Images/sitting%20reviewing.jpg" alt="" class="img-fluid row container">
				</div>
				<div class="col-sm-6">
					<p>Companion Stairlifts, owned by Handicare, sell and install their stairlifts nationwide. Their dedicated team provides customer assistance every day of the year, 24 hours a day, and they offer emergency fitting throughout the UK. <br> <br>

						Companion are experts at finding solutions for fitting stairlifts in tricky surroundings. For example, their stairlifts can be tailored to fit nearly all types of stair configurations, including narrow and spiral stairs and outdoor steps. <br><br>
						Companion pride themselves the stylish look of their stairlifts, which come in a choice of different colours to suit you decor and personal taste. They also offer a re-upholstery service for the seat fabric if you would like to change the colour in the future. <br><br>To find out how much it will cost to get a stairlift suited to your exact needs, you will need to arrange a free no obligation quote. Companion will send one of their technical surveyors to visit your home to assess which stairlift will be best for the configuration of your stairs. <br><br>
					</p>
				</div>
			</div>
		</div>
	</div>



	<!-- Companion Stairlift Prices-->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Companion Stairlift Prices</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>The average price that customers paid was £2,545 for a brand new stairlift. Bear in mind that figure is based on all types of stairlifts. Curved ones will be more expensive than straight ones. The average price for a used Handicare stairlift was £1,406.</p>

				</div>


			</div>
		</div>
	</div>

	<!-- Companion Straight Stairlift -->

	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Companion Straight Stairlift</h1>
			<hr>
			<div class="row">
				<div class="col-sm-6">

					<img src="Images/companion-straight-stairlift.jpg" alt="">
				</div>
				<div class="col-sm-6">
					<h1>Features</h1>
					<ul>
						<li>Adjustable swivel seat with lumbar support</li>
						<li>Ten safety sensors to bring the stairlift to a smooth stop if there is an object on the staircase</li>
						<li>Easy to use paddle switch that can be operated with minimal pressure</li>
						<li>Controls can be fitted to either the left or right arm rest</li>
						<li>Choice of six different seats colours</li>
						<li>Seat can be re-upholstered if you change your decor</li>
						<li>Track can be extended away from the top or bottom of the stairs to suit your need</li>
						<li>Power-hinged track option to fold away the end of the track when it’s not in use, which is a useful option if it blocks a doorway at either the top or bottom of your stairs</li>
					</ul>
				</div>

			</div>
		</div>
	</div>


	<!-- Companion Curved Stairlift-->

	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Companion Curved Stairlift</h1>
			<hr>
			<div class="row">
				<div class="col-sm-6">

					<img src="Images/companion-curved-stairlift.jpg" alt="">
				</div>
				<div class="col-sm-6">
					<h1>Features</h1>
					<ul>
						<li>Designed to fit the exact curves of your stairs, even very tight curves</li>
						<li>Ergonomically designed “easy grip” control can be fitted on either the left or right arm rest to best suit the user</li>
						<li>Swivel seat to make getting on and off safer, with a powered swivel option</li>
						<li>Seat can be adjusted for comfort and ease of use and offers lower back support</li>
						<li>Choice of six upholstery colours</li>
						<li>Re-upholstery service available</li>
						<li>Remote control operation to park the stairlift or call it to the user</li>
						<li>Optional power-hinged track that can be folded away where it presents a trip hazard or blocks an door entrance</li>
						<li>Option to extend the track if there’s space, to allow dismounting in a safer place on the landing</li>
					</ul>
				</div>

			</div>
		</div>
	</div>


	<!-- Next Day Installation-->

	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Next Day Installation</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>Companion now offer a next day installation service in certain areas of the UK. That means that on straight stairlifts they can provide you a quotation in the morning and have it installed and operational on the very same day (subject to survey).</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Price Match Promise-->

	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Price Match Promise</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>Companion also offer a price match promise. So, if you receive a quotation for the same model from another company, they guarantee to match the price.</p>
				</div>

			</div>
		</div>
	</div>







	<!-- Footer -->
	<footer class="page-footer font-small blue pt-4">

		<!-- Footer Links -->
		<div class="container-fluid text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-6 mt-md-0 mt-3">

					<!-- Content -->
					<h5 class="text-uppercase">words</h5>
					<p>blah blah</p>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none pb-3">

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3">

					<!-- Links -->
					<h5 class="text-uppercase">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3">

					<!-- Links -->
					<h5 class="text-uppercase">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="#"> blah blah blah</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
