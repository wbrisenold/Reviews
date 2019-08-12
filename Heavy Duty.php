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
	<title>Heavy Duty Stairlifts</title>
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
				<a class="btn navbar-btn" href="tel:0800 016 9712" id="call_us" role="button"><span class="container-fluid" style="color: color: #901D1D; font-weight: bold;">CALL US</span></a>
			</div>
		</div>
	</nav>

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
		<h1 class="display-1">Heavy Duty Stairlifts</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">
					<ul>
						<p>The number of obese people in the UK is growing, due to multiple factors including sedentary lifestyles, health issues and illness. As a result stairlift manufacturers are realising there is a growing need for heavy duty stairlifts that can carry bigger people.</p>
						<p>Standard stairlifts have a maximum weight capacity, usually between 18 and 22 stone. This means they cannot be safely used by heavier people who weigh over the maximum limi</p>
						<p>An overweight person with mobility problems may have real difficulty negotiating the stairs in their home. Using the stairs can be a physical struggle, putting added stress on their muscles, joints and hear</p>
						<p>People with clinical obesity may fear having to leave the home they love and having to move to a bungalow because of the daily challenge of their stairs. Or they may feel they have to live only on the downstairs floor as their size and limited mobility restricts their movement so much.</p>
						<p>A heavy duty, or bariatric, stairlift can take away this worry, as heavy duty models are especially built to carry larger users with physical disabilities. They can enable heavier people to stay in the home they love by giving them the means to travel up and down their stairs.</p>
						<p>Because of their increased capacity, bariatric stairlifts tend to be bigger and wider than standard models. This means they can’t be fitted to all staircases. For example, if your stairs are particularly narrow or have tight bends, you may find it hard to find a heavy duty model to fit.</p>
						<p>It is always worth asking the question and seeking expert advice from a reputable stairlift supplier. They will be able to visit your home and conduct a survey to determine whether a stairlift for an obese person can be accommodated by the layout of your stairs.</p>
						<p>The table below shows the maximum capacity of the models from the main stairlift companies in the UK:</p>
					</ul>
				</div>
			</div>
		</div>
	</div>




	<div style="overflow-x:auto; text-align: center">
		<h1 style="font-family: 'Open Sans', sans-serif; ">Maximum User Weight</h1>
		<table class="table-striped  row container-fluid table">
			<tbody>
				<tr>
					<th class="table_titles">Model</th>
					<th class="table_titles">Standard</th>
					<th class="table_titles">Heavy Duty Section</th>
				</tr>
				<tr>
					<td>Acorn 130 Straight</td>
					<td>20 Stone </td>
					<td>25 Stone</td>
				</tr>
				<tr>
					<td>Acorn 180 Curved</td>
					<td>18.9 Stone</td>
					<td>N/A</td>
				</tr>
				<tr>
					<td>Companion 950 Compact </td>
					<td>22 Stone</td>
					<td> N/A</td>
				</tr>
				<tr>
					<td>Companion 950+ </td>
					<td>22 Stone</td>
					<td> N/A</td>
				</tr>
				<tr>
					<td>Companion 1000 Straight </td>
					<td>21.5 Stone</td>
					<td>25 Stone</td>
				</tr>
				<tr>
					<td>Companion 2000 Curved </td>
					<td>18 Stone</td>
					<td>21.5 Stone</td>
				</tr>
				<tr>
					<td>Companion Freecurve </td>
					<td>19.5 Stone</td>
					<td>N/A</td>
				</tr>
				<tr>
					<td>Oaktree Stockton </td>
					<td>19 Stone</td>
					<td>N/A</td>
				</tr>
				<tr>
					<td>Oaktree Washington </td>
					<td>19 Stone </td>
					<td>21 Stone</td>
				</tr>
				<tr>
					<td>Brooks Lincoln Straight </td>
					<td>20 Stone</td>
					<td>N/A</td>
				</tr>
				<tr>
					<td>Stannah Starla Straight </td>
					<td>25 Stone</td>
					<td>N/A</td>
				</tr>
				<tr>
					<td>Stannah Siena Straight </td>
					<td>25 Stone</td>
					<td> N/A</td>
				</tr>
				<tr>
					<td>Stannah Starla Curved </td>
					<td>21 Stone</td>
					<td> N/A</td>
				</tr>
				<tr>
					<td>Stannah Siena Curved</td>
					<td>21 Stone</td>
					<td> N/A</td>
				</tr>
				<tr>
					<td>Stannah Sadler Curved</td>
					<td>21 Stone</td>
					<td>N/A</td>
				</tr>
			</tbody>
		</table>
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

	<!-- Where can I get a curved stairlift? -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Where can I get a curved stairlift?</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>Manufacturers specially design their stairlifts so that they are easy and safe for users to use. They have a range of features that are helpful for the elderly with limited mobility and disabled people of all ages. For example, a swivel chair seat can make it easier for a user to transfer to or from a wheelchair.</p>
					<p>All stairlifts have a maximum weight limit, which varies according to each model, but is usually between 18 and 22 stone. Very large or obese people may need a heavy duty stairlift with extra capacity.</p>
					<p>In the UK not all manufacturers offer heavy duty curved models, but they are available from the following companies:</p>
					<ul>
						<li>Companion Stairlifts</li>
						<li>OakTree Mobility</li>
						<li>Stannah Stairlifts</li>
						<li>Bruno Elite</li>
					</ul>
				</div>


			</div>
		</div>
	</div>


	<!-- How much will it cost? -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">How much will it cost?</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>Prices for curved stairlifts are higher than for straight models. This is because it costs more to make a custom built track to fit a staircase with turns or corners. It also takes longer to fit a curved rail to the contours of the stairs.</p>
					<p>It’s hard to give an average price for a curved model as every situation is different. The cost will depend on the number of stairs, the amount of work involved in manufacturing and fitting, as well as which features you choose.</p>

					<p>As a rough comparison prices for brand new curved stairlifts start from £3950 with Companion, £5000 with Acorn and £5200 with Stannah. These are just guide prices to give you an approximate idea. You will need to get a personalised quote to find out exactly what you can expect to pay.</p>
				</div>


			</div>
		</div>
	</div>


	<!-- Could I save money by getting a reconditioned or used model? -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Could I save money by getting a reconditioned or used model?</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>Some companies sell reconditioned curved stairlifts, which can be cheaper than new models. It is important to know the difference between the terms reconditioned and used.</p>
					<p>Reconditioned means a second-hand model that has been fully checked and had any faulty parts replaced to ensure it is safe and in working order. Reputable suppliers will offer a guarantee, a customer helpline and a professional installation service.</p>

					<p>If you are considering purchasing a reconditioned model be sure to read reviews and choose a reputable company before parting with your cash.</p>
					<p>Used stairlifts are sometimes offered for sale by private sellers on Ebay and other websites. It can be tempting to buy a used model, as these are generally the cheapest option. However, we don’t recommend this as you will have no guarantee that the stairlift is safe or reliable. If it breaks down you may have to spend a lot on repairs and new parts.</p>
					<p>More importantly, as curved stairlifts need a custom built track, you will need to purchase a new track in order to fit the stairlift to your staircase. Even if you know someone who is good at DIY, for your peace of mind and the user’s safety, it is advisable to use a professional to install your stairlift. They will have the right kit and the experience to carry out a safe installation with minimal disruption.</p>
					<p>If you are looking to save money then we advise you avoid buying a second-hand stairlift from a private seller. However, the option of a reconditioned model is worth exploring if you choose a trusted supplier with a good reputation. It is a good idea to get quotes for a brand new stairlift at the same time so that you can compare prices. Remember to look at what features, optional extras and aftersales support are included in the price before making a decision.</p>
				</div>


			</div>
		</div>
	</div>

	<!--Is rental an option? -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">Is rental an option?</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>If you think you will only require a stairlift in the short term, perhaps while you recover from an accident or surgery, then renting one may be better than buying.</p>
					<p>A few companies do offer curved models for hire. Bear in mind that you will still need to have a track custom built to fit your stairs. The work involved in making and installing the track will push the price up in comparison with renting a straight stairlift.</p>

					<p>As a rough guide, there is likely to be a one-off set up cost of approximately between £1500 and £2500, followed by monthly payments of £100 or more. It is therefore very important that you carefully consider whether rental is going to be cheaper than buying. Although the cost of buying a curved stairlift may be several thousand pounds, over the longer term this will be a more economical option than renting. It really depends on how long you are likely to need the stairlift.</p>

				</div>


			</div>
		</div>
	</div>



	<!--How do I find out more? -->
	<div class="container-fluid top_area" style="padding-bottom: 1%;">
		<h1 class="display-3">How do I find out more??</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">


					<p>Although a more expensive option than a straight model, a curved stairlift can greatly enhance your quality of life and take the struggle out of using the stairs, helping you to maintain your independence. So if you’re got unusually shaped stairs, the first step is to arrange a free no obligation survey with a reputable stairlift company to find out your options and to get a personalised quote.</p>




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
