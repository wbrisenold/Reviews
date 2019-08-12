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
	<title>Stairlifts Prices</title>
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
						<a class="nav-link active" href="Prices.php">Prices</a>
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

	<!-- The Definitive Guide to Stairlift Costs in the UK -->
	<div class="container-fluid top_area_grants">
		<h1>Stairlifts Prices:</h1>
		<h1 class="display-2">The Definitive Guide to Stairlift Costs in the UK</h1>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">
					<ul>
						<p>The Definitive Guide to Stairlift Costs in the UK
							It’s a question we get asked all the time.</p>
						<p>Just how much is a stairlift going to cost me?</p>
						<p>And the simple answer is, it depends on a number of factors. However, we appreciate that this can be frustrating, when all you want to know is the price.
						</p>
						<p>So in this guide, we have broken it down step-by-step to help you get a clearer understanding of the prices you can expect to pay for both new and reconditioned stairlifts here in the UK. If you’re considering renting a stairlift as an option, we’ve also included estimates of how much this will cost you. Finally, we’ve also provided you with information on running costs and even some useful money saving tips to help you with your purchase. So we’ve pretty much got it covered.</p>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<!-- The Definitive Guide to Stairlift Costs in the UK -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">New Stairlift Prices</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">
					<ul>
						<p>New stairlift prices are not fixed, as the cost will depend on several different factors, and can range anywhere from under £2,000 to £6,000 and up.</p>
						<p>This is why getting a free no obligation survey done is essential.</p>
						<p>The surveyor will be able to take measurements of your stairs and assess the layout in order to determine which model would be best, and how much work will be involved in the installation. They will also be able to determine which extra features you may find useful.
						</p>
						<p>To get an accurate price you will need to arrange an appointment for a home visit with a reputable stairlift company.</p>
					</ul>
					<h2>Is your staircase straight or curved?</h2>
					<p>The type of stairs you have will determine how much you pay for a stairlift.</p>
					<p>Straight stairlifts are generally a lot cheaper than curved ones. This is because it is much easier to fit a stairlift track to a straight staircase than to one with bends or corners. The straight track is readymade, which is cheaper to manufacture.</p>
					<p>A curved stairlift on the other hand needs a custom built track which is bespoke to fit the specific configuration of your staircase. There is a lot more work involved to manufacture a curved track and the installation time will also be longer. For this reason, curved stairlift prices are more expensive than prices for straight ones.</p>
					<p>We contacted 3 of the top stairlift companies in the UK to find out the prices for their new straight and curved models. The firms were quick to point out that these are just starting prices and the end cost may vary depending on the number of stairs you have and whether you have a bends in your staircase.</p>
					<p>With that said, these starting prices should serve as a useful comparison.</p>

					<div style="overflow-x:auto;" class="table-contain">
						<table class="in-pg-table table">
							<tbody>
								<tr>
									<td></td>
									<td><img src="images/Acorn-Stairlift.png" alt="Acorn Stairlifts" class="img-fluid"></td>
									<td><img src="images/logo11.png" alt="Companion Stairlifts" class="img-fluid"></td>
									<td><img src="images/table-Stannah.png" alt="Acorn Stairlifts" class="img-fluid"></td>
								</tr>
								<tr>
									<td>New Straight</td>
									<td>from £2000</td>
									<td>from £1950</td>
									<td>from £1900</td>
								</tr>
								<tr>
									<td>New Curved</td>
									<td>from £5000</td>
									<td>from £3950</td>
									<td>from £5200</td>
								</tr>
							</tbody>
						</table>
					</div>

					<p>As you can see, prices vary between the three different firms. This shows it is a good idea to get more than one quote so that you can compare prices.</p>
					<h2>What about optional extras?</h2>
					<p>Other factors that affect the cost of a stairlift include optional extras. When you arrange an appointment with a surveyor they will be able to discuss your exact needs. Based on your individual circumstances and requirements they will then be able to advise you on which additional features you may benefit from.</p>

					<ul>
						<h3>Optional extras that may be worth paying more for include:</h3>
						<ul>
							<li>A powered swivel seat – this can make it easier for someone with limited mobility to get on and off safely.</li>
							<li>A power-hinged track – this makes it easy to fold away the track when the stairlift is not in use. This is particularly useful if the track runs in front of a doorway or may be a trip hazard.</li>
							<li>A perch seat – this is an alternative to a chair seat for people who have difficulty sitting down or bending their knees. A perch seat can also be used to make a stairlift slimmer so that it can be fitted to a narrow staircase where there’s not enough space for a standard model.</li>


						</ul>

					</ul>

					<h2>Are stairlifts VAT exempt?</h2>
					<p>If you are classed as disabled or chronically sick you shouldn’t have to pay any VAT on your stairlift or the installation. This is because stairlifts and other products for disabled people are zero-rated. As VAT is currently 20%, this is a huge saving.</p>
					<p>Another type of VAT exemption is 5% VAT relief for people over 60. If you are over 60 but don’t qualify for 0 VAT, then you should pay a reduced rate of 5% VAT.</p>
					<p>If you think either of these exemptions apply to you, tell the stairlift company when you place your order. You will need to complete a declaration form.</p>
					<p>Full details about VAT reliefs for disabled and older people can be found on the HMRC website.</p>

					<h2>What is the cost of a warranty and servicing?</h2>
					<p>A brand new or reconditioned stairlift should come with one year’s warranty included in the purchase price.</p>
					<p>While a low price is an important consideration when purchasing a stairlift, you should also take into account the after sales service and support offered by the supplier, and ongoing maintenance and service costs once the first year’s guarantee expires.</p>
					<p>In the 2014 Which survey 31% of people paid extra for an extended warranty or servicing contract. The average price for an extended warranty was £89, which usually covers call out fees and repairs after the one year manufacturer’s warranty expires. The average cost for a servicing contract was £99.</p>
					<h2>What about running costs?</h2>
					<p>Stairlifts don’t cost much to run, only about £5 a year in electricity. This figure is an estimate based on you travelling up and down the stairs seven times every day. So if you only use your stairlift twice a day, the running cost will be even less.</p>
				</div>
			</div>
		</div>
	</div>


	<!-- The Definitive Guide to Stairlift Costs in the UK -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">
			Reconditioned Stairlift Prices</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">

					<p>In this section we will be covering your options if you are seeking to purchase a reconditioned or second-hand stairlift.</p>
					<p>What’s the difference you may ask?</p>
					<p>Good question.
					</p>
					<p>The main difference between a reconditioned and a second-hand stairlift is that a reconditioned model will have been taken back to the factory, tested for safety and had any faulty parts replaced. It will then be installed by a qualified engineer.</p>


					<p>A second-hand or used stairlift, however, may be purchased through a private seller.</p>
					<p>So are these considerably cheaper?</p>
					<p>Well, yes they can be.</p>
					<p>And on the face of it these prices seem very tempting. After all is not uncommon to see secondhand stairlifts for sale on Ebay, Facebook and other websites for as little as a few hundred pounds. However, it is important to bear in mind the old adage “You get what you pay for”.</p>
					<p>The price of a new or reconditioned stairlift will include the cost of installation. If you buy from Ebay you will have to fit it yourself or pay extra to get someone to do it for you</p>
					<p>Although you are likely to save money if you buy a stairlift off Ebay, there is a chance that you will end up spending more money in the long run on repairs and maintenance. If you buy from a private seller you will have no comeback if the stairlift develops a fault. You won’t know if it has been looked after and serviced regularly, or whether it needs new parts. If your stairlift breaks down you may be left stranded.</p>
					<p>By buying a brand new or reconditioned model one from a trusted firm, you will have the peace of mind of being able to call a helpline for assistance. The supplier will also arrange for an engineer to install the stairlift for you so you can be assured it has been fitted correctly.</p>
					<p>It is really important to be aware that a secondhand curved stairlift will not fit your stairs and you will be wasting your money. This is because stairlifts for stairs that have curves or turns need a bespoke rail in order to operate. If you have straight stairs it is possible to save money by purchasing a reconditioned stairlift from a reputable company. A reconditioned stairlift should have been refurbished and serviced to ensure it is in working order. Before parting with any cash, ask to see a full service history and evidence that it has been tested. The company should also provide a full guarantee (usually for a year) so that you are covered in case the stairlift breaks down.</p>
					<p>The 2014 Which survey found the average price of a secondhand or reconditioned stairlift was £1,490.</p>
				</div>
			</div>
		</div>
	</div>


	<!-- Stairlift Rental Prices -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">

			Stairlift Rental Prices</h1>

		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 row sub_top_area">

				</div>
				<div class="col-sm-12">

					<p>If you are likely to only need a stairlift for a short period of time, renting could be the most economical option.</p>
					<h2>How much does it cost to rent a stairlift?</h2>
					<p>How much it costs to rent a stairlift really varies. It depends on which model you require and whether your staircase is straight or curved. It could cost anywhere from £40 per month to as much as £160 per month.</p>
					<p>If you’re considering renting, ask about additional costs. For example, some firms charge a one-off installation fee or a removal fee at the end of the contract. Also ask what the minimum contract length is, as you will usually have to commit to at least three months.
					</p>
					<p>A bonus of renting is that servicing and breakdown cover will be included, so you won’t have to pay maintenance costs</p>


					<p>Before deciding whether it is better to buy or rent a stairlift make sure you compare prices and take into account how long you’ll need the stairlift. If your limited mobility is only temporary, perhaps due to recovery from an operation, then renting may be the best solution. If your need is likely to be long term then it will probably work out more cost-effective to buy your own stairlift</p>
					<p>We contacted both Acorn and Stannah to get an idea of their current rental prices. Acorn offer rentals of their new straight and curved range. Stannah on the other hand offer rentals for both new and reconditioned models.</p>
					<p>The prices quoted in the table are starting prices only and would be subject to a survey. They do not include any optional extras that may increase initial setup cost slightly. The curved rental prices assume a curved staircase with one standard bend.</p>
					<h2>Rental Price Comparison Table</h2>
					<table class=" table container-fluid table-contain table-striped table-responsive">
						<tbody>
							<tr>
								<td></td>
								<td colspan="2"><img src="images/Acorn-Stairlift.png" alt="Acorn Stairlifts"></td>
								<td colspan="2"><img src="images/table-Stannah.png" alt="Companion Stairlifts"></td>
								<td colspan="2"><img src="images/table-Stannah.png" alt="Stannah Stairlifts"></td>
							</tr>
							<tr>
								<td></td>
								<td>New Straight</td>
								<td>New Curved</td>
								<td>New Straight</td>
								<td>New Curved</td>
								<td>Reconditioned Straight</td>
								<td>Reconditioned Curved</td>
							</tr>
							<tr>
								<td>Setup Cost</td>
								<td>£1100</td>
								<td>£2500</td>
								<td>£1200</td>
								<td>£2000</td>
								<td>£850</td>
								<td>£1645</td>
							</tr>
							<tr>
								<td>Monthly Fee</td>
								<td>£40*</td>
								<td>£100*</td>
								<td>£77</td>
								<td>£160</td>
								<td>£57</td>
								<td>£148</td>
							</tr>
							<tr>
								<td>Contract Length</td>
								<td>None</td>
								<td>None</td>
								<td>1 Month</td>
								<td>1 Month</td>
								<td>1 Month</td>
								<td>1 Month</td>
							</tr>
							<tr>
								<td>Notice Period</td>
								<td>None</td>
								<td>None</td>
								<td>1 Month</td>
								<td>1 Month</td>
								<td>1 Month</td>
								<td>1 Month</td>
							</tr>
							<tr>
								<td>Removal Cost</td>
								<td>Included</td>
								<td>Included</td>
								<td>Included</td>
								<td>Included</td>
								<td>Included</td>
								<td>Included</td>
							</tr>
						</tbody>
					</table>

					<p>* The first 6 months are included in the initial setup cost</p>

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
