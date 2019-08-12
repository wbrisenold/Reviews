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
	<title>Stairlift Rental</title>
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
							<a href="Oak%20Tree.php" class="nav-link">Oak Tree</a>
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
						<a class="nav-link active" href="Rental.php">Rental</a>
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

	<!-- Stairlift Rental-->
	<div class="container-fluid top_area_grants">
		<h1 class="display-1">Stairlift Rental</h1>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">
					<ul>
						<p>Renting a stairlift can offer an affordable and practical solution for individuals struggling with the stairs, particularly if the price of a stairlift is prohibitive or if it only going to be needed for a short period of time. One of the main concerns that puts people off purchasing a stairlift is the cost. With prices ranging from £2000-£6000, this upfront expense can be daunting, especially to elderly or disabled people living on a low income. With that said, over the longer term the cost of renting can usually work out more expensive than purchasing the stairlift outright.</p>
						<p>The best way to find out which option is best for you is to request a free home visit from a representative or surveyor from at least one reputable stairlift manufacturer. There are several well known companies that offer a stairlift rental service throughout the UK, including Acorn and Stannah. The representative will be be able to assess your individual circumstances and discuss your options according to your personal needs and the layout of your stairs.</p>
						<p>A rented stairlift will either be a brand new or reconditioned model that adheres to strict safety standards. If rental is a feasible option the representative will be able to explain the advantages and disadvantages of hiring a stairlift compared to buying, so that you can make an informed decision about which is the best solution for you.
						</p>
						<p>There are a few key things to take into account when choosing between renting or purchasing a stairlift.</p>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<!-- How Much Does it Cost to Rent a Stairlift? -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">How Much Does it Cost to Rent a Stairlift?</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">
					<ul>
						<p>The appeal of stairlift rentals is there is a relatively small upfront installation cost to pay, which could be anywhere from around £350 to over £1000. In addition to this, there will be regular ongoing rental rate, which is usually spread over a number of weeks or months. Instead of paying an upront sum to purchase a stairlift, you will be able to pay a small fee on an agreed weekly or monthly basis for the length of your hire contract with the supplier. Most companies will have a minimum hire period, typically 3 months and stairlift rental costs can be as little as £10 a month or up to £150 a month, depending on the type of stairlift you require.</p>
						<p>In certain circumstances it can work out more economical to hire a stairlift on a temporary basis rather than buy one, such as if you are likely to only require a stairlift for a short period of time due to a temporary health issue. However, if you expect to use your stairlift for a long time, then buying can work out cheaper than renting in the long term.</p>
						<p>If you arrange to get a free quote from a stairlift company, a surveyor will be able to visit your home to offer advice on your options and the cost, to help you decide whether you could save money by renting a stairlift or whether buying one is a good investment.
						</p>
					</ul>
				</div>

			</div>
		</div>
	</div>


	<!-- Your Requirements -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">
			Your Requirements</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">

					<p>Everyone’s circumstances are unique, which is why renting a stairlift may be the perfect solution for one person whereas someone else may save more money by buying one. If your mobility issues are likely to be temporary, perhaps due to an accident or operation that you need a set amount of time to recover from, then if you’ll only need to use a stairlift for a matter of weeks, rental may well be the most cost-effective choice.</p>
					<p>The cost of renting a stairlift for a short period of time is likely to be cheaper than the one-off expense of buying and installing your own. To weigh up whether you’re likely to save money by renting, it is advisable to discuss your needs with a representative from a reputable stairlift provider who can visit you in your home for free to survey your staircase and assess your needs.</p>

				</div>
			</div>
		</div>
	</div>


	<!-- Your Stairs -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">

			Your Stairs</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">

					<p>The type of staircase you have in your house will determine whether stairlift rental is even a possible option. A lot of companies only offer standard straight stairlifts as rentals because they can be fitted to any straight staircase. When the lift is no longer required it is easy to remove and re-install it on another customer’s stairs. In contrast, stairs that curve or bend require a bespoke made-to-measure curved rail to be installed.</p>
					<p>Curved stairlifts cost more to manufacture than straight ones. This type of customised design means a curved stairlift is very unlikely to be able to be re-installed on any other stairs. For this reason, if you require a curved stairlift for your staircase, you will be limited in your choice of suppliers and the installation cost and monthly fees are likely to be significantly higher than those for a straight lift. In this case, the costs of buying versus hiring a stairlift need to be carefully considered.<p>
							<p>The initial cost of purchasing a curved stairlift may be high, but if you intend to use it for a long time, over months or years, then it can be a worthwhile investment that allows you to keep your independence and stay in your own home. It is a good idea to arrange a free appointment to have a surveyor from one or more stairlift companies come to your home to survey and measure the configuration of your stairs to determine which type of stairlift will be most suitable.</p>

				</div>
			</div>
		</div>
	</div>

	<!-- Money Saving Tips -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">


			Money Saving Tips</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">
					<h1>Price Match Guarantees</h1>
					<p>Some stairlift companies offer a price match guarantee. This is where they promise to match the price if you’ve received a cheaper quote for a similar product from a competitor. Companion’s Price Match Promise is an example of this type of scheme. It is always worth asking stairlift companies if they can match or beat a competitor’s quote. This is another good reason to obtain more than one quote before you buy a stairlift. You will be in a better position to negotiate a lower price.</p>
					<h1>Grants</h1>
					<p>In certain situations grants are available to help with the cost of installing a stairlift and other home adaptations. If you are worried that you can’t afford a stairlift, you may be eligible for a Disabled Facilities Grant from your local authority. Other forms of financial aid are also offered by various organisations. Visit our grants page for further details.</p>

				</div>
			</div>
		</div>
	</div>


	<!-- Money Saving Tips -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">


			Peace of Mind</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">

					<p>One benefit of hiring a stairlift from a reputable supplier is that they will be responsible for maintaining it and making sure it is safe and working properly. This will give you the peace of mind of knowing you won’t have to worry about the cost and inconvenience of a breakdown, as the company will have a contractual obligation to ensure your stairlift is in working order. If you experience any issues with your stairlift you can phone the stairlift company for help and advice and they will fix any problems as soon as possible. Another advantage of renting is that usually the rental company will come and remove the stairlift for free when you no longer need it.</p>

				</div>
			</div>
		</div>
	</div>


	<!--Is Renting a Stairlift Right for You?-->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">


			Is Renting a Stairlift Right for You?</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">

					<p>To sum up, if you are considering getting a stairlift for yourself, a relative or friend, renting one may save money if your need is temporary or for a relatively short period of time. If the stairlift is likely to be required for the long term, buying may work out cheaper than rental. There are pros and cons of renting a stairlift and your individual needs as well as the layout of your stairs need to be considered. Requesting free quotes from one or more stairlift providers is recommended to find out the prices and feasibility of each option.</p>
					<p>Getting a stairlift can take the daily struggle out of climbing the stairs and can improve life for elderly and disabled people or those with mobility issues. It is advisable to get free advice from at least one stairlift supplier before deciding whether buying or renting is the best option for you.</p>

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
