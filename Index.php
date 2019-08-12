<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title>Stairlifts Reviews</title>
</head>

<body>





	<!-- Navigation -->


	<nav class="navbar navbar-expand-md nav-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img alt="Logo" src="Images/acorn-stairlifts-logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>


			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="Index.php">home</a>
					</li>


					<div class="dropdown">
						<button class="dropbtn">Reviews
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="Acorn.php" class="nav-link">Acorn</a>
							<a href="Age%20UK%20Stairlifts.php" class="nav-link">Age UK</a>
							<a href="Bison.php" class="nav-link">Bison</a>
							<a href="Brooks.php" class="nav-link">Brooks</a>
							<a href="Companion.php" class="nav-link">Companion</a>
							<a href="Dolphin.php" class="nav-link">Dolphin</a>
							<a href="Halton.php" class="nav-link">Halton</a>
							<a href="Handicare.php" class="nav-link">Handicare</a>
							<a href="Oak%20Tree.php" class="nav-link active">Oak Tree</a>
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



	<!-- logos -->
	<div class="container">
		<img src="Images/StairliftsReviews_Landing-Page_Best-Stairlift-Prices_03.png" class="img-fluid" alt="">
	</div>


	<!--About section -->



	<div class="container-fluid about">

		<h1 style="text-align: center">Stairlifts Reviews</h1>
		<div class="row">
			<div class="col-sm-6">
				<img src="Images/43130.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-sm-6">
				<h1 class="display-4">Taking the Stress
					Out of Buying a Stairlift</h1>
				<ul>
					<li>At Stairlifts Reviews we understand how upsetting it can be when using the stairs becomes a daunting daily challenge. We realise that keeping their independence is very important to the quality of life for those with limited mobility and that many disabled, unwell and elderly people fear having to move out of their homes because they can no longer cope with the stairs.</li>
					<li>We believe that installing a stairlift can transform the daily life of someone with mobility issues and we want to help more people find the best stairlift for their needs at an affordable price.</li>
					<li>We know that buying a stairlift is a big step, so our aim is to help you make an informed decision to make sure you get the right stairlift for your requirements.</li>
				</ul>

			</div>
		</div>

	</div>

	<!-- Why area -->

	<div class="container-fluid why">
		<div class="row">
			<div class="col-sm row why_box container">

				<h1>Independent Reviews</h1>
				<p>Our team of experts review the top UK stairlift companies</p>
				<img src="Images/favorite.svg" alt="" class="img-fluid">
			</div>
			<div class="col-sm row why_box container">
				<h1>Trusted
					Suppliers</h1>
				<p>We only work with reputable UK companies who provide high quality stairlifts and excellent customer service.</p>
				<img src="Images/trusted.svg" alt="" class="img-fluid">
			</div>
			<div class="col-sm row why_box container">
				<h1>Save
					Time</h1>
				<p>Don’t waste time contacting multiple stairlift companies. Do it once and leave the rest to us!</p>
				<img src="Images/hourglass.svg" alt="" class="img-fluid">
			</div>
			<div class="col-sm row why_box container">
				<h1>Save
					Money</h1>
				<p>Due to the volume of business we provide, we can often get you a much lower quote than if you went direct.</p>
				<img src="Images/coins.svg" alt="" class="img-fluid">
			</div>
		</div>
	</div>

	<!-- The best area -->

	<div class="container-fluid best_area">
		<div class="row">
			<div class="col-sm-6">
				<img src="Images/couple%20with%20son.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-sm-6">
				<h1 class="display-4">The Best UK Stairlifts</h1>
				<ul>
					<li>Whether you're worried about the cost or how to use a stairlift safely, we hope that the information we provide will put your mind at ease and take the hassle out of shopping for a stairlift.</li>
					<li>We put the customer first, and as such we only recommend reputable stairlift companies that we know offer reliable, safe stairlifts backed up with excellent customer service.</li>
				</ul>
			</div>
		</div>
	</div>



	<!-- Comparisons Area-->

	<div class="container-fluid comparisons row table-responsive ">
		<table class="table ">
			<thead>
				<tr>
					<th class="table_titles container"></th>
					<th class="em_table"><img src="Images/table-age-uk.png" alt="" class="img-fluid"></th>
					<th><img src="Images/table-Stannah.png" alt="" class="img-fluid"></th>
					<th><img src="Images/Acorn-Stairlift.png" alt="" class="img-fluid"></th>
					<th><img src="Images/logo11.png" alt="" class="img-fluid">
					</th>

					<th><img src="Images/table-brooks.png" alt="" class="img-fluid"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="table_titles">PRODUCT RANGE</td>
					<td><img src="Images/5%20stars.png" alt="" class="img-fluid"></td>
					<td><img src="Images/5%20stars.png" alt="" class="img-fluid"></td>
					<td><img src="Images/5%20stars.png" alt="" class="img-fluid"></td>
					<td><img src="Images/4.5.png" alt="" class="img-fluid"></td>
					<td><img src="Images/2.png" alt="" class="img-fluid"></td>
				</tr>
				<tr>
					<td class="table_titles">RELIABILITY</td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/4.png" alt=""></td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/3.png" alt=""></td>
					<td><img src="Images/3.png" alt=""></td>
				</tr>
				<tr>
					<td class="table_titles">EASE OF USE</td>
					<td><img src="Images/4.5.png" alt=""></td>
					<td><img src="Images/4.png" alt=""></td>
					<td><img src="Images/4.5.png" alt=""></td>
					<td><img src="Images/3.png" alt=""></td>
					<td><img src="Images/3.5.png" alt=""></td>
				</tr>
				<tr>
					<td class="table_titles">COMFORT</td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/4.png" alt=""></td>
					<td><img src="Images/4.png" alt=""></td>
				</tr>
				<tr>
					<td class="table_titles">VALUE FOR MONEY</td>
					<td><img src="Images/3.5.png" alt=""></td>
					<td><img src="Images/3.png" alt=""></td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/3.png" alt=""></td>
					<td><img src="Images/4.png" alt=""></td>
				</tr>
				<tr>
					<td class="table_titles">CUSTOMER SERVICE</td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/3.5.png" alt=""></td>
					<td><img src="Images/5%20stars.png" alt=""></td>
					<td><img src="Images/3.5.png" alt=""></td>
					<td><img src="Images/2.5.png" alt=""></td>
				</tr>
				<tr>
					<td class="table_titles">OVERALL SCORE</td>
					<td class="scores">4.4/5.0</td>
					<td class="scores">4.0/5.0</td>
					<td class="scores">4.7/5.0</td>
					<td class="scores" style="box-shadow: 1px 1px 1">3.4/5.0</td>
					<td class="scores">3.2/5.0</td>
				</tr>

			</tbody>
		</table>
	</div>



	<!-- final area -->


	<div class="container-fluid final_area">
		<div class="row">
			<div class="col-sm-6 ">
				<h1 class="display-4"> We share our knowledge and address any concerns you may have.</h1>
				<ul>
					<li>We provide reviews of the different models from some of the most well known stairlift manufacturers, but there are other manufacturers that you may wish to consider.

					</li>
					<li>We hope your experience of choosing a stairlift goes smoothly and that the information provided here by stairlifts reviews helps you make an informed decision.

					</li>
				</ul>
			</div>
			<div class="col-sm-6 ">
				<img src="Images/19267.jpg" alt="" class="img-fluid">
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
