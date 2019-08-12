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
	<title>Age UK Stairlifts</title>
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
							<a href="AgeUK.php" class="nav-link active">Age UK</a>
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
		<h1 class="display-1">Age UK Stairlifts</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 sub_top_area row">
					<img src="Images/sitting%20reviewing.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-12">
					<p>Age UK Trading CIC is a social enterprise that sells a range of Handicare stairlifts. They have teamed up with Handicare, one of the largest manufacturers of stairlifts, so that each purchase of a stairlift from Age UK Mobility helps fund the charitable work of Age UK. Profits from the sale of their stairlifts are donated to Age UK the Charity.</p>
				</div>
			</div>
		</div>
	</div>



	<!-- second area -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-3">Stairlifts for Every Need and Budget</h1>

			<div class="row">
				<div class="col-sm-12">

					<p>Age UK offers a range of selected Handicare stairlifts to meet the different needs of their customers. They supply brand new and reconditioned stairlifts for straight, curved and outdoor stairs. Their stairlifts can be fitted on nearly all type of staircases, including very narrow ones. In addition to a standard chair seat, a perch seat is an option for users who have difficulty bending their knees or hips.</p>

				</div>

			</div>
		</div>
	</div>

	<!-- straight -->

	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Straight Stairlifts</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>Age UK straight stairlift models include the Simplicity, the Simplicity Plus and the Age UK 1000 Series. The Simplicity is the most affordable, basic option and can be installed on narrow staircases. The Simplicity Plus can be adapted and personalised to meet the needs of the user. The 1000 Series comes with a choice of additional features.</p>

				</div>

			</div>
		</div>
	</div>


	<!-- Curved -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Curved Stairlifts</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>The Age UK 2000 curved stairlift is designed for stairs that have bends or corners. Like all curved stairlifts, it needs to be made to measure to fit the exact measurements of your stairs. Because it will be custom made it will cost considerably more to buy a curved stairlift than one for straight stairs. The Freecurve is Handicare’s curved model for very narrow stairs or tight bends.</p>

				</div>

			</div>
		</div>
	</div>

	<!-- outdoor -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Outdoor Stairlifts</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>The Age UK 1000 Outdoor stairlift is similar to their straight indoor model, but is designed to withstand the weather. It can be fitted on straight steps outside, such as those leading to a door or providing access to a garden.</p>

				</div>

			</div>
		</div>
	</div>


	<!-- Reconditioned  -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Reconditioned Stairlifts</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>Age UK offers a range of reconditioned Handicare stairlifts, which can be a more affordable option for those on a tight budget.</p>

				</div>

			</div>
		</div>
	</div>

	<!-- Price Match Promise  -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Price Match Promise</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>Handicare has a Price Match Promise. This means that if you get a quote for an Age UK stairlift and you obtain a cheaper quote for a similar stairlift from another supplier, Handicare will match the lower price.</p>

				</div>

			</div>
		</div>
	</div>
	<!--Customer Experience  -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Customer Experience</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<p>Handicare working with Age UK has a customer experience rating on 4.6/5 based on independent reviews on the Feefo website.</p>

				</div>

			</div>
		</div>
	</div>
	<!--Features of Age UK Stairlifts -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-3">Features of Age UK Stairlifts</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<ul>
						<li>Choice of colours</li>
						<li>Manual swivel seat</li>
						<li>Safety sensors</li>
						<li>Battery powered</li>
						<li>Two remote controls</li>
						<li>Powered options: swivel seat, folding seat and footrest, hinged rail</li>
						<li>Perch seat option</li>
					</ul>

				</div>

			</div>
		</div>
	</div>
	<!--Editor’s Rating -->
	<div class="container-fluid second_area">
		<div class="container-fluid">
			<h1 class="display-4">Editor’s Rating</h1>
			<hr>
			<div class="row">
				<div class="col-sm-12">

					<ul>
						<p>Handicare stairlifts meet British and European safety standards and are a reliable, well-known brand. By teaming up with Handicare, Age UK is able to offer its customers a range of quality products from a reputable manufacturer. The Price Match Promise offered by Handicare is a good incentive for customers and reassures them they are paying a fair price. The 24 hour customer support is a good feature of the aftercare service.</p>
						<p>There have been reports in the media highlighting the fact that in return for recommending certain companies the Age UK charity is paid a minimum amount or a cut of the profits. In the case of Handicare, it is clearly stated on the Age UK Mobility website that:</p>
						<p>"Handicare will raise a minimum of £1,200,000 during 2016/2017 for Age UK".</p>
						<p>There is concern about a charity encouraging elderly people to choose a particular company, as the advice they give should be impartial. However, the terms of endorsement are clearly displayed on Age UK Mobility’s website, so customers can make up their own minds whether to buy a stairliftfrom the</p>
						<p>We would give Age UK Stairlifts a 3.9 star rating out of 5.</p>
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
