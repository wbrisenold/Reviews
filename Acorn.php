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
	<title>Acorn Stairlifts</title>
</head>

<body>



	<!-- Navigation -->


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
							<a href="Acorn.php" class="nav-link active">Acorn</a>
							<a href="AgeUK.php" class="nav-link">Age UK</a>
							<a href="Bison.php" class="nav-link">Bison</a>
							<a href="Brooks.php" class="nav-link">Brooks</a>
							<a href="Companion.php" class="nav-link">Companion</a>
							<a href="Dolphin.php" class="nav-link">Dolphin</a>
							<a href="Halton.php" class="nav-link">Halton</a>
							<a href="Handicare.php" class="nav-link">Handicare</a>
							<a href="OakTree.php" class="nav-link">Oak Tree</a>
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
							<a href="Narrow%20Stairs.php" class="nav-link">Narrow Stairs</a>
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
		<h1 class="display-1">Acorn Stairlifts</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<img src="Images/sitting%20reviewing.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-12">
					<ul>
						<li>Acorn Stairlifts is a family owned company established in 1992. They started out selling reconditioned stairlifts made by other manufacturers before beginning to design and manufacture their own brand of stairlifts and launching the Superglide Stairlift, which is still a bestseller today.</li>
						<li>Acorn was the first company to introduce DC batteries to power their stairlifts, meaning the motor will still work during a power cut. This system of powering stairlifts is now the norm for all modern stairlifts.</li>
						<li>They manufacture over 50,000 stairlifts each year. In addition to selling to customers throughout the UK, Acorn sell their stairlifts internationally in the US, Australia, Canada, France, Italy, Germany and South Africa.</li>
						<li>Acorn sell a range of straight and curved stairlifts to fit nearly all types of stairs. They offer a free no obligation survey so you can get professional advice on which model is best for your particular requirements.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<!-- second area -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-3">Acorn Stairlift Reviews</h1>
			<hr>
			<div class="row">
				<div class="col-sm-6">

					<p>In a recent Which survey that asked members of the public to rate their Acorn stairlift in a range of categories, the overall customer satisfaction score was 68 percent. Acorn stairlifts got a high score of 4/5 for:</p>
					<ul>
						<li>Reliability</li>
						<li>Useability</li>
						<li>Suitability for the user</li>
						<li>Suitability for the stairs and home</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul>
						<li>Based on these results, an Acorn stairlift is a good choice for someone who is worried they won’t be able to operate a stairlift.</li>
						<li>The average prices people paid were £2,307 for a brand new model and £1,214 for a secondhand one. In this particular survey, Acorn was the cheapest of the big brands. In fact, 31 percent of people were able to successfully haggle to get a lower price than they were first quoted. Read on for reviews of the different models.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- curved area -->
	<div class="container-fluid products_area">
		<div class="container-fluid">
			<h1 class="display-4">Acorn 130 Stairlift</h1>
			<hr>

			<div class="row">
				<div class="col-sm-6">
					<h2>The Acorn 130 stairlift is designed for use on straight staircases.</h2>
					<img src="Images/acorn-180-curved-stairlift-uk.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">

					<h2>Features:</h2>
					<ul>
						<li>Glides smoothly up and down the stairs and has a gentle stop and start mechanism</li>
						<li>Complies with European safety standard BS EN 81-40:2008 and international safety standard ISO 9836-2:2000</li>
						<li>Slimline design with foldable seat, arms and foot rest that leaves plenty of room for other stair user</li>
						<li>Seat and back rest are padded for comfort and support</li>
						<li>Easy to use up and down switch on arm</li>
						<li>Two remote controls with big buttons to call the stairlift up or down the stairs if needed</li>
						<li>Seatbelt</li>
						<li>Swivel seat to make it easier to get in and out</li>
						<li>Fits to the stairs not the wall, so doesn’t require structural alteration</li>
						<li>Key to lock and deactivate the stairlift</li>
						<li>Five safety sensors to detect anything blocking the stairs</li>
						<li>Simple to read digital display to detect any problems</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- outdoor area -->
	<div class="container-fluid products_area">
		<div class="container-fluid">
			<h1 class="display-4">Acorn 130 Outdoor Stairlift</h1>
			<hr>

			<div class="row">
				<div class="col-sm-6">
					<h2>The Acorn 130 Outdoor stairlift has the same features as Acorn’s 130 indoor straight stairlift except that it can be used outside.</h2>
					<img src="Images/acorn-outdoor-stair-lift-uk.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">

					<h2>Features:</h2>
					<ul>
						<li>Weather resistant cover to protect the stairlift from the elements</li>
						<li>Installed on the steps not the wall, so no major structural alterations needed</li>
						<li>Easy to use paddle control</li>
						<li>Two remote controls</li>
						<li>The arms, seat and foot rest can be folded up and covered for storage</li>
						<li>For security, a removable, waterproof, lockable key switch to disable the stairlift when not in use</li>
						<li>Seatbelt</li>
						<li>Five safety sensors to prevent collisions with any objects that may be on the steps</li>
						<li>Fits to the stairs not the wall, so doesn’t require structural alteration</li>
						<li>Easy to board swivel seat with seatbelt</li>
						<li>Comfortable and supportive padded seat and back rest</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!--  Perch area -->

	<div class="container-fluid products_area">
		<div class="container-fluid">
			<h1 class="display-4">Acorn Perch Stairlift</h1>
			<hr>

			<div class="row">
				<div class="col-sm-6">
					<h2>Acorn’s Perch starlift is designed for people with limited flexibility, who have difficulty bending their knees. It is also a good solution for narrow stairs. It has similar features to Acorn’s 130 straight stairlift.</h2>
					<img src="Images/acorn-perch-stairlift.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">

					<h2>Features:</h2>
					<ul>
						<li>Can be fitted to narrow stairs</li>
						<li>Enables users to perch rather than sit</li>
						<li>Grab safety rail for added security and comfort</li>
						<li>Softly padded seat and back rest</li>
						<li>On/off switch can be locked with a key</li>
						<li>Safety sensors to bring the lift to a smooth halt if a stray object is found on the stairs</li>
						<li>Two remote controls with big buttons can be used to park and call the lift</li>
						<li>Easy to read digital display</li>
						<li>Attaches to the stairs not the wall, so no need to redecorate</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!--sit/Stand area -->
	<div class="container-fluid products_area">
		<div class="container-fluid">
			<h1 class="display-4">Acorn Sit/Stand Stairlift</h1>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<h2>The Acorn Sit/Stand stairlift is a versatile model that combines features from Acorn’s other stairlifts. It is designed for homes where two people need to use the stairlift but have different physical requirements.</h2>
					<img src="Images/acorn-sit-stand-stairlift.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">

					<h2>Features:</h2>
					<ul>
						<li>Like the Perch stairlift, a grab rail for extra securit</li>
						<li>Arthritis Foundation approved controls</li>
						<li>Swivel seat and safety belt</li>
						<li>Removable key</li>
						<li>Safety sensors to detect any obstruction on the stairs and automatically halt the stairlift safely</li>
						<li>Two remote controls to send the stairlift up or down the stairs</li>
						<li>Comfortable padded seat and back rest</li>
						<li>Foldable seat, arms and foot rest</li>
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
