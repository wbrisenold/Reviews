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
	<title>Stannah Stairlifts</title>
</head>

<body>



	<!-- Navigation -->


	<nav class="navbar navbar-expand-md nav-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img alt="Logo" src="Images/acorn-stairlifts-logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>


			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link " href="Index.php">home</a>
					</li>





					<div class="dropdown">
						<button class="dropbtn">Local Suppliers
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="Belfast.php" class="nav-link">Belfast</a>
							<a href="Birmingham.php" class="nav-link">Birmingham</a>
							<a href="Cardiff.php" class="nav-link">Cardiff</a>
							<a href="Coventry.php" class="nav-link">Coventry</a>
							<a href="Exeter.php" class="nav-link">Exeter</a>
							<a href="Glasgow.php" class="nav-link">Glasgow</a>
							<a href="Liverpool.php" class="nav-link">Liverpool</a>
							<a href="London.php" class="nav-link">london</a>
							<a href="Manchester.php" class="nav-link">Manchester</a>
							<a href="Nottingham.php" class="nav-link">Nottingham</a>
							<a href="Stoke-On-Trent.php" class="nav-link">Stroke-on-trent</a>
						</div>
					</div>



					<div class="dropdown">
						<button class="dropbtn">Types
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="Curved.php" class="nav-link">Curved</a>
							<a href="Heavy%20Duty.php">Heavy Duty</a>
							<a href="Narrow.php">Narrow Stairs</a>
							<a href="Outdoor.php">Outdoor</a>
							<a href="Reconditon.php">Recondition</a>
							<a href="Straight.php">Straight</a>
						</div>
					</div>

					<div class="dropdown">
						<button class="dropbtn">Local Suppliers
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="Belfast.php" class="nav-link active">Belfast</a>
							<a href="Birmingham.php" class="nav-link">Birmingham</a>
							<a href="Cardiff.php" class="nav-link">Cardiff</a>
							<a href="Coventry.php" class="nav-link">Coventry</a>
							<a href="Exeter.php" class="nav-link">Exeter</a>
							<a href="Glasgow.php" class="nav-link">Glasgow</a>
							<a href="Liverpool.php" class="nav-link">Liverpool</a>
							<a href="London.php" class="nav-link">london</a>
							<a href="Manchester.php" class="nav-link">Manchester</a>
							<a href="Nottingham.php" class="nav-link">Nottingham</a>
							<a href="Stoke-On-Trent.php" class="nav-link">Stroke-on-trent</a>
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
		<h1 class="display-1">Stannah Stairlifts</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<img src="Images/sitting%20reviewing.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-12">
					<ul style="padding-top: 10%;">
						<p>Stannah is a family run company that has been designing and manufacturing stairlifts since 1975. In 40 years over 600,000 Stannah stairlifts have been made and they are sold in over 46 countries as well as throughout the UK.</p>
						<p>Stannah offers a range of stairlifts to suit a user’s physical needs and to fit different types of staircases. Their models come in a variety of colours and with a choice of custom features, including vinyl or fabric seats, and different wood trims. The Starla and Siena can be tailor made for both straight and curved stairs. The Sadler is similar to a perch-style stairlift and is designed for those with limited mobility. It is also a good option for narrow stairs.</p>
						<p>Stannah will need to make an appointment for one of their trained consultants to visit your home to assess which model would be best suited to your stairs and to your needs. This way they will be able to give you an exact price to supply and install the stairlift, but the quotation will be free and you are under no obligation to buy. We recommend you obtain written quotes from at least two different stairlift manufacturers so that you can make an informed decision about which stairlift offers the best solution for you. </p>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- The Horizon -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-2">Stannah Stairlift Reviews</h1>
		<hr>
		<p>Stannah stairlifts received an overall customer satisfaction score of 74 percent in a survey conducted by Which in November 2014. They were rated 4/5 on all of the following categories:</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">

					<ul>
						<li>Reliability</li>
						<li>Useability</li>
						<li>Comfort</li>
						<li>Personal Suitability</li>
						<li>Suitability for the stairs and home</li>
						<li>Quality</li>
					</ul>
					<p>Average prices paid were £2,424 for a brand new Stannah stairlift and £1,804 for a used one. The survey didn’t look at the specific type of stairlift bought, but curved models cost significantly more than straight ones.</p>
				</div>
				<div class="col-sm-12">
					<h1 class="display-3">Starla Stairlift</h1>
					<p>Stannah’s Starla stairlift can be used on both straight and curved stairs and can be customised to your needs and taste.</p>
					<ul>
						<h1>Features:</h1>
						<li>Choice of all-vinyl or all-fabric chair in a range of different colour</li>
						<li>Choice of wood trim</li>
						<li>Choice of rail colours</li>
						<li>Angled seat for safety and security</li>
						<li>Easy to use fingertip controls</li>
						<li>Two wall-mounted remote controls to call or park the lift</li>
						<li>Seat-load sensor to prevent the stairlift moving until the user is safely seated</li>
						<li>Optional powered-swivel seat</li>
						<li>Folds away when not in use</li>
						<li>Made to measure slimline rails that attach to the stairs not the wall</li>
						<li>Retractable and hinged rails available</li>
					</ul>
				</div>

			</div>
		</div>
	</div>



	<!--Siena Stairlift -->
	<div class="container-fluid top_area">
		<h1 class="display-3">Siena Stairlift</h1>
		<hr>
		<p>The Siena stairlift by Stannah can be fitted to either straight or curved staircases.</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<h1>Features:</h1>
					<ul style="padding-bottom: 1%;">
						<li>Choice of five vinyl colours</li>
						<li>Choice of six rail colours</li>
						<li>Contemporary style</li>
						<li>Custom made rails with a slimline design that are fitted to the stair treads not the wall</li>
						<li>Can be installed with minimal disruption and mess</li>
						<li>Arms, seat and foot rest can be folded up neatly when not in use to leave space for other stair users</li>
						<li>Can be locked with a removable key to prevent children playing on it</li>
						<li>Easy to use controls, including one on the wall at each end of the stairs to the lift can be called to you or sent to another user</li>
						<li>Swivel seat to make getting on and off safer, with a powered swivel option</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<!--Sadler Stairlift-->
	<div class="container-fluid top_area">
		<h1 class="display-3">Sadler Stairlift</h1>
		<hr>
		<p>Stannah’s Sadler stairlift has a perch-style elevated seat and is designed for people who have trouble bending to sit down or limited flexibility. It is also suitable for narrow stairs where a traditional seated stairlift may be too wide.</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<h1>Features:</h1>
					<ul style="padding-bottom: 1%;">
						<li>Raised, tilting saddle-style seat that moves up and down with the user to make mounting and dismounting easier and safer</li>
						<li>Seatbelt that can be fastened with one hand and has an immobiliser so the lift will not move until the seatbelt is secure</li>
						<li>Foldable arms are connected to the foot rest, so there’s no need to bend down to fold the foot rest away</li>
						<li>Safety sensors to a automatically stop the stairlift safely if there is an obstruction in the way</li>
						<li>Can be fitted to straight and curved stairs</li>
						<li>Optional hinged rail if needed</li>
					</ul>
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
