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
	<title>Oak Tree Stairlifts</title>
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
							<a href="AgeUK.php" class="nav-link">Age UK</a>
							<a href="Bison.php" class="nav-link">Bison</a>
							<a href="Brooks.php" class="nav-link">Brooks</a>
							<a href="Companion.php" class="nav-link">Companion</a>
							<a href="Dolphin.php" class="nav-link">Dolphin</a>
							<a href="Halton.php" class="nav-link">Halton</a>
							<a href="Handicare.php" class="nav-link">Handicare</a>
							<a href="OakTree.php" class="nav-link active">Oak Tree</a>
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
		<h1 class="display-1">Oak Tree Stairlifts</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 row sub_top_area">
					<img src="Images/sitting%20reviewing.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<ul>
						<p style="padding-top: 15%">Oak Tree stairlifts are available only from Oak Tree Mobility, a British mobility company founded in 2008. The company’s motto is “Your comfort is our strength” and Oak Tree certainly pride themselves on their top quality craftsmanship, first class customer service and affordable prices. The company focuses on always putting the customer first, which is reflected in very high levels of customer satisfaction in independent reviews.</p>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Handicare Stairlift Prices -->
	<div class="container-fluid top_area">
		<h1 class="display-2">Stairlifts for Any Type of Stairs</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>Oak Tree’s stairlifts can be fitted to 99% of staircases, even those that are very narrow or have tight bends. Both straight and curved models are available to accommodate every need.</p>
						<p>The Washington stairlift is designed for straight staircases. It is an affordable option that can ease the burden of struggling to use the stairs</p>
						<p>The Stockton stairlift is designed to operate on a bespoke track that is tailor made to fit the exact curves and turns of any staircase that isn’t straight. A great feature of the Stockton is that it can be fitted to even very narrow or steep stairs. This is because it is able to travel backwards and will automatically swivel to keep your legs and arms away from the walls and banisters.</p>

					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- High Customer Satisfaction -->
	<div class="container-fluid top_area">
		<h1 class="display-4">High Customer Satisfaction</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>Based on over 2,000 reviews on the independent eKomi website, Oak Tree scores a very high customer satisfaction rating of 98.4% at the time of writing. Customers would recommend Oak Tree for both the quality of their stairlifts and the efficiency of their customer support.</p>
						<p>Oak Tree is recognised as a Which? Trusted Trader. This award means the company is a Which? endorsed installer and has been assessed as a reputable and trusted company. At the time of writing Oak Tree has a Which? Trusted Trader overall rating of 4.8/5.</p>


					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- Advanced Technology and High Safety Standards -->
	<div class="container-fluid top_area">
		<h1 class="display-4">Advanced Technology and High Safety Standards</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>Oak Tree stairlifts use the latest technology and design to provide reliability and comfort. They are precision engineered to the highest European standards so they are known for being extremely dependable, safe and comfortable to use. They are occupational-therapist approved by UK Therapy Services.</p>
						<p>Each individual stairlift passes through a stringent quality control process before leaving the factory to ensure it meets the highest standards of safety and reliability. The controls are ergonomically designed to be easy to use. The motors are created to ensure smooth and quiet operation. Each stairlift comes with a power pack that means it will continue to work even if there is a power cut.</p>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<!-- Nationwide Installation and Support -->
	<div class="container-fluid top_area">
		<h1 class="display-4">Nationwide Installation and Support</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>Oak Tree Mobility provide a nationwide stairlift installation service. Their experienced technicians are available to fit stairlifts throughout the UK. The technicians will complete the work with the minimum of disruption. Before they leave your home they will demonstrate how the stairlift works and make sure you are comfortable using it.</p>
						<p>If you have any queries Oak Tree’s friendly UK-based staff can be contacted on a freephone number any time – day or night – every day of the year. In the unlikely event of a problem, customers know that help is only a phone call away.</p>
					</ul>
				</div>

			</div>
		</div>
	</div>



	<!-- Nationwide Installation and Support -->
	<div class="container-fluid top_area">
		<h1 class="display-4">Match Your Stairlift to Your Home</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>Oak Tree give their customers the option to choose from a range of rail colours and seat fabrics. Being able to customise your stairlift allows you to coordinate it with your home’s decor and colour scheme.</p>

					</ul>
				</div>

			</div>
		</div>
	</div>




	<!--Oak Tree Stairlift Prices -->
	<div class="container-fluid top_area">
		<h1 class="display-4">Nationwide Installation and Support</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>The price of an Oak Tree stairlift will depend on a number of factors, including whether your staircase is straight or has corners or tight bends, how wide and steep it is. Oak Tree will need to arrange a free home visit from one of their occupational-therapist-trained advisors to evaluate your stairs and discuss your needs. You will be under no obligation whatsoever.</p>
						<p>The advisor will listen to your needs and talk through the options, offering their expert advice. They will assess your requirements and take careful measurements of your stairs.</p>
						<p>A home visit is necessary so that Oak Tree can give you a personalised quote for a stairlift that will fit your stairs perfectly. The price will be unique to you and based on your exact needs. You will be given an accurate written quotation, which you can think about in your own time.</p>
					</ul>
				</div>

			</div>
		</div>
	</div>


	<!-- 0 % Finance Available -->
	<div class="container-fluid top_area">
		<h1 class="display-4">0 % Finance Available</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<ul>
						<p>An Oak Tree stairlift can be purchased on a 0 % finance deal to help spread the cost, which can make a stairlift a more affordable option for those on a budget.</p>

					</ul>
				</div>

			</div>
		</div>
	</div>

	<!-- Aftercare-->
	<div class="container-fluid top_area">
		<h1 class="display-4">Aftercare</h1>
		<hr>
		<p>All of Oak Tree’s stairlifts come with a 14-day satisfaction guarantee and up to a 3-year warranty. Their dedicated support team is available on a freephone number 24 hours a day, 365 days a year. If you experience difficulties with your stairlift Oak Tree will endeavour to resolve the issue as soon as possible.</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">
					<h1>Features of Oak Tree Stairlifts</h1>
					<ul>
						<li>Powered swivel seat as standard. This enables the seat to automatically swivel 70 degrees at the top of the stairs to help you easily and safely dismount.</li>
						<li>Adjustable seat height means the seat can be adapted to fit you exactly, no matter what height you are or whether you have difficulty bending your knees</li>
						<li>Unique single rail design that can be fitted on very narrow or steep stairs.</li>
						<li>Optional powered folding hinge that enables the rail to be folded out of the way of a doorway, hall or landing so that it doesn’t cause an obstruction.</li>
						<li>Choice of three controls on the armrest to best suit your needs; a joystick, a rocker switch, or an ergonomic ball control.Key switch to secure your stairlift. The toggle switch that operates the stairlift can be removed from the armrest to act like a key.</li>
						<li>Two remote controls as standard, which you can use to direct your stairlift to the top or bottom of your stairs. This is especially handy if more than one person in the house uses the stairlift.</li>
						<li>Two parking points at each end of the stairs, which ensure the stairlift is left on charge. An alarm will alert you if the stairlift isn’t parked properly, so you can ensure it is always charged.</li>
						<li>Choice of upholstery colours and fabrics.</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<!-- Aftercare-->
	<div class="container-fluid top_area">
		<h1 class="display-4">Editor’s Rating</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

					<ul>
						<li>Oak Tree Mobility is generally rated very highly in customer satisfaction surveys for both the quality of its products and its excellent customer service. It has a reputation for delivering a professional service.</li>
						<li>Oak Tree’s stairlifts are known for being well-designed and very reliable. The fact that Oak Tree is a Which? Trusted Trader means customers have the peace of mind of knowing they are dealing with a reputable stairlift supplier. Their advisors put their customers first and don’t use high pressure sales tactics. Their technician’s work efficiently to install their stairlifts quickly and with minimal inconvenience. Their after sales support is available over the phone 24/7.</li>
						<li>Given the high quality and dependability of Oak Tree’s stairlifts and the company’s overall great reviews on independent websites, I would give Oak Tree stairlifts a 4.8 star rating out of 5.</li>
						<li>Reviewed on 27th June 2017</li>
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
