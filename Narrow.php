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
	<title>Stairlifts for Narrow Stairs</title>
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
							<a href="Heavy%20Duty.php" class="nav-link active">Heavy Duty</a>
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



	<div class="container-fluid top_area">
		<h1 class="display-1">Stairlifts for Narrow Stairs</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">
					<ul>
						<p>A lot of houses in the UK, particularly older properties, have especially narrow or steep stairs. If you have a narrow staircase you may be concerned that there’s not enough room for a stairlift to fit.</p>
						<p>However, most of the best known stairlift companies in the UK offer stairlifts for narrow stairs, which have a purposefully slim design that enables users to perch or stand up rather than sit down fully on a seat. They normally feature a compact design, with arms and footrests that can be folded up neatly out of the way when the lift is not being used. This means there is enough space on the stairs for other people to use the staircase.</p>
						<p>On some narrow stairs it may be even possible to fit a standard seated stairlift on a curved track or rail. It is a good idea to arrange for a representative from a stairlift provider to visit your home to assess your stairs and discuss the best options for your particular needs.</p>

					</ul>
				</div>
			</div>
		</div>
	</div>






	<!-- Will a curved stairlift fit on my stairs? -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Will a curved stairlift fit on my stairs?</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>In order to determine the design of track and the model that best your needs, your chosen supplier will conduct a survey of your staircase and assess your needs. They will be able to advise on whether the lift should travel on the inside or outside bend.</p>
					<p>After carefully assessing the dimensions of your stairs, they will work out which model will be best suited to the layout. If you have if you have narrow or steep stairs with tight bends then a compact model or one with a perching seat may be required.</p>
					<p>All the main stairlift companies in the UK offer models for curved stairs. Outdoor curved models are also available if you are having difficulty using the external steps leading to your door or garden.</p>
				</div>


			</div>
		</div>
	</div>

	<!-- What is Considered a Narrow Staircase? -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">What is Considered a Narrow Staircase?</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>The minimum width of stair tread that most standard size stairlifts can be fitted to is 73cm (29 inches). Stairs that have treads narrower than this are considered narrow and it may pose a potential safety risk to install a seated stairlift in such a small space. Users could injure themselves by knocking into the wall or banister, and other people using the stairs may not have enough space to walk past the lift without banging into it or tripping.</p>
				</div>


			</div>
		</div>
	</div>


	<!-- Perching and Standing Stairlifts -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Perching and Standing Stairlifts</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>Perching and standing stairlifts can be the best solution for people who have difficulty bending their knees or restricted movement in their hip joints which make it painful to sit down. They also have the advantage of reducing the minimum width required for a stairlift to be safely installed on a narrow staircase.</p>
					<p>Standard stairlifts take up more space on a staircase as they feature a seat for the user to fully sit down while travelling up and down their stairs. Perching and standing stairlifts, by contrast, do not allow the user to completely sit, requiring them instead to stand up or perch while using the lift to go up and down their stairs.</p>

					<p>This type of stairlift can be a great solution for elderly, disabled or less mobile people whose houses have narrow stairs, enabling them to stay independent in their own homes and taking the challenge out of negotiating their stairs. However, it is essential that there is enough headroom for the stairlift user to stand throughout the journey up and down the stairs.</p>
					<p>Due to their design, perching and standing models generally have a lower weight capacity than seated stairlifts and require users to be physically able to safely stand or perch for the duration of the journey and get off the lift safely when they reach the top of the stairs. Perch stairlifts tend to cost more than seated straight stairlifts, but not as much as curved stairlifts.</p>
				</div>


			</div>
		</div>
	</div>


	<!--Curved Stairlifts-->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Curved Stairlifts</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>In some cases it is possible to install a conventional seated stairlift on narrow stairs. This option involves using a curved stairlift with a customised, made to measure track or rail that can be lifted up when the lift isn’t being used to allow it to be parked away from the top or bottom of the stairs. This solution leaves plenty of space for other people to safely walk up and down the stairs without the stairlift getting in their way. The downside of choosing to fit a curved stairlift on narrow stairs is the price, with a custom rail or track costing significantly more than one for a standard straight stairlift.</p>

				</div>


			</div>
		</div>
	</div>

	<!--Get Free Advice-->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Get Free Advice</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>The best way to find out for sure whether it is possible to install a stairlift on your narrow stairs is to get advice from a stairlift expert. Reputable stairlift companies such as Acorn, Companion and Stannah, among others, offer free home visits where a surveyor can come out and look at your stairs to figure out the safest option.</p>
					<p>This may involve some minor alterations such as moving or adding a banister or handrail, or fitting a new electric socket. Sometimes a hinged rail or track is the most suitable solution for narrow stairs. The surveyor will be able to use their knowledge and experience to assess which type of stairlift is right for your particular requirements. For instance, if you have trouble bending your knees to sit on a seated stairlift, a perch seat model may be the answer.</p>

					<p>By making an appointment for a home visit with a representative from one or more stairlift suppliers you will be able to get their expert advice and suggestions. After discussing your needs and assessing your stairs they will be able to provide you with a free, no obligation quote so you will know exactly how much it will cost to install a stairlift. It is worth getting quotes from at least two different stairlift manufacturers so that you can compare prices and make an informed decision.</p>

				</div>


			</div>
		</div>
	</div>



	<!--Featured Stairlifts for Narrow Stairs-->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Featured Stairlifts for Narrow Stairs</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6" style="padding-top: 5%">

					<h2 style="text-align: center">Acorn Perch Stairlift</h2>

					<img src="Images/acorn-perch-stairlift.jpg" alt="" class="img-fluid">




				</div>
				<div class="col-sm-6">


					<p style="padding-top: 20%">The Perch model from Acorn Stairlifts is specially designed to fit on narrow stairs and may be the most suitable option for people who have difficulty bending to sit on a seated stairlift. It is similar to Acorn’s standard 130 seated model but also features a grab rail for safety an ease of use, as users will need to stand up and perch rather than sit.</p>
					<p>The perch seat and backrest are padded for comfort and there is a secure seat belt for safety. This model has a maximum weight capacity of 120kg.</p>



				</div>
				<div class="col-sm-6" style="padding-top:7%">
					<h2 style=" text-align: center;">Companion Perch Seat Stairlifts</h2>
					<img src="Images/companion-perch-seat-stairlift.png" alt="" style="padding-bottom: 3%; height: 500px; width: 700px;" class="img-fluid">


				</div>
				<div class="col-sm-6">
					<p style="padding-top: 30%">Companion Stairlifts offer a perch seat as an option on their 950+and 1000 straight stairlifts, and their 2000 curved stairlift. This means that all of these models can be adapted for narrow staircases. The perch seat has a seat belt for support and comes in a choice of six different upholstery colours to coordinate with your decor.</p>


				</div>
				<div class="col-sm-6" style="padding-top: 7%">
					<h2 style="text-align: center;">Stannah Sadler Stairlift</h2>
					<img src="Images/stannah-sadler-stairlift-254x300.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<p style="padding-top: 30%">The Sadler model from Stannah Stairlifts has a slimline design that makes it suitable for narrower stairways. It features a saddle-style tilting seat that is designed to take the weight off a user’s legs. The seat moves up and down with the user to help them safely get on and dismount from the lift. For safety there is an immobiliser seat belt.</p>
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
