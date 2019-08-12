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
	<title>Handicare Stairlifts</title>
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
							<a href="Companion.php" class="nav-link">Companion</a>
							<a href="Dolphin.php" class="nav-link">Dolphin</a>
							<a href="Halton.php" class="nav-link">Halton</a>
							<a href="Handicare.php" class="nav-link active">Handicare</a>
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
		<h1 class="display-1">Handicare Stairlifts</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 row sub_top_area">
					<img src="Images/sitting%20reviewing.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<ul>
						<p>Halton Stairlifts Ltd is a stairlift company based in Liverpool, Merseyside. They supply and install new and used stairlifts throughout the North West of England, the Midlands and Wales. Halton pride themselves on their competitive prices and friendly customer service and have a 24 hour customer helpline.</p>
						<p>The company’s origins go back to the 1800s and after various mergers and takeovers over the years, the business changed its name to Handicare in the 1990s. Handicare took over Freelift in 2007 and the Minivator Group in 2010. The company was then renamed Handicare Accessibility Ltd in the UK and Handicare Stairlifts B.V. in the Netherlands.</p>
						<p>For physically challenged and elderly people who struggle with their stairs, installing a stairlift can help them maintain their independence at home. Handicare offers a selection of straight and curved stairlift solutions for almost any type of staircase configuration. Their stairlift models come with various customisable options depending on the user’s needs and budget.</p>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Handicare Stairlift Prices -->
	<div class="container-fluid top_area">
		<h1 class="display-4">Handicare Stairlift Prices</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>Handicare stairlift prices depend on the model and any customisable options you require, whether your stairs are straight or curved and how much work will be required to fit the stairlift. We recommend getting a free, no obligation quote to find out how much it will cost to install a stairlift to meet your individual needs. If you are thinking of buying a Handicare stairlift, they are sold by independent suppliers throughout the UK. Handicare also works together with the social enterprise Age UK Trading CIC to supply Age UK stairlifts and support their charitable work.</p>

					</ul>
				</div>

			</div>
		</div>
	</div>
	<!--Warranty Cover and Maintenance -->
	<div class="container-fluid top_area">
		<h1 class="display-4">Warranty Cover and Maintenance</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>All brand new Handicare stair lifts purchased from their UK partners are covered by a comprehensive manufacturer’s warranty that’s included in the price. Most stairlift dealers also offer extended warranties to cover their stairlifts for breakdown repairs after the original guarantee has expired. Handicare recommends its stairlifts are serviced at least annually by an approved engineer to carry out maintenance checks and ensure they are in full working order. <br><br>

							If you purchase a reconditioned Handicare stairlift from a reputable supplier, it should have been fully refurbished and serviced and come with a warranty.</p>

					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- Handicare Straight Stairlifts -->
	<div class="container-fluid top_area">
		<h1 class="display-3">Handicare Straight Stairlifts</h1>
		<hr>
		<p>There are four different models in Handicare’s range of stairlifts for straight stairs. These are designed to travel on staircases with no bends, corners or intermediate landings.</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<h3>Handicare 1100</h3>
						<ul>
							<li>Ultra slim and compact design for narrow stairs</li>
							<li>Folding seat, footrest and armrests</li>
							<li>Swivel seat</li>
							<li>Safety sensors</li>
							<li>The narrowest rail on the market</li>
							<li>Continuous charge functionality</li>
							<li>Patented four wheel drive technology</li>
							<li>Grease free rail</li>
							<li>Easy to keep clean</li>
						</ul>

					</ul>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<h3>Handicare 1000</h3>
						<ul>
							<li>Slimline design</li>
							<li>Slimline aluminium track with two park points</li>
							<li>Smart seat with a choice of upholstery colours and powered options</li>
							<li>Heavy duty versions available – 1000 XL and 1000 XXL</li>
							<li>Powered hinged rail option</li>
							<li>Folding seat, footrest and armrests</li>
							<li>Perch seat option</li>
							<li>Grease free rail</li>
							<li>Outdoor version available</li>
						</ul>

					</ul>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<h3>Handicare 950+</h3>
						<ul>
							<li>Powered and automatic options</li>
							<li>Continuous charge track</li>
							<li>Wipe-clean seat in a choice of colours</li>
							<li>Ergonomic toggle control</li>
							<li>Perch seat option</li>
						</ul>

					</ul>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<h3>Handicare 950</h3>
						<ul>
							<li>Most affordable and cost-effective basic model</li>
							<li>Manual swivel seat</li>
							<li>Powered footrest option</li>
							<li>Continuous charging function</li>
							<li>Ergonomic toggle control</li>
							<li>Slide track or manual hinge options</li>
							<li>Wipe-clean seat in neutral sand colour</li>
						</ul>

					</ul>
				</div>

			</div>
		</div>
	</div>




	<!-- Handicare Straight Stairlifts -->
	<div class="container-fluid top_area">
		<h1 class="display-3">Handicare Curved Stairlifts</h1>
		<hr>
		<p>Handicare offers two different types of curved stairlifts in the UK, which are designed for use on stairs which bend, turn corners or cross landings and even on spiral staircases. They run on bespoke rails that are custom made to fit the exact requirements of your stairs</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<h3>Handicare 2000</h3>
						<ul>
							<li>Twin tube rail design</li>
							<li>Suitable for narrow stairs with very tight bends</li>
							<li>Choice of three seats (the Style, Smart and Simplicity)</li>
							<li>Perch seat option</li>
							<li>Powered footplate option</li>
							<li>Heavy duty version available</li>
							<li>Powered hinged rail option</li>
							<li>Safety sensors</li>
							<li>Folding seat, footrest and armrests</li>
						</ul>

					</ul>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul>
						<h3>Handicare Freecurve</h3>
						<ul>
							<li>Unique single rail design in a choice of colours</li>
							<li>Turn and Go option for narrow curved stairs</li>
							<li>Choice of three seats (the Classic, Elegance and Alliance</li>
							<li>Heavy duty versions available – 1000 XL and 1000 XXL</li>
							<li>Powered and automatic options</li>
							<li>Safety sensors</li>
							<li>Folding seat, footrest and armrests</li>
						</ul>

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
