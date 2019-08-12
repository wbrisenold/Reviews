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
	<title>Stairlifts Grants</title>
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
		<h1>Stairlifts Grants</h1>
		<h1 class="display-2">How to Get Financial Help with the Cost of a Stairlift</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 row sub_top_area">
					<img src="Images/grants_top_img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<ul>
						<p style="padding-top: 5%;">If you think you or a loved one could benefit from having a stairlift installed, you may be worried about how to pay for it. A stairlift is a big investment that could greatly improve your life, but the relatively high initial cost may seem prohibitive.</p>
						<p>However, if money is a concern, don’t entirely dismiss the idea of getting a stairlift before you have explored all the options, as you may be eligible for financial assistance.</p>
						<p>Financial aid to help pay for stairlifts and other home adaptations is available from a number of sources, including government grants and funding from charitable organisations.</p>
						<p>Read on to learn about the different types of financial aid that you might qualify for, which could make installing a stairlift a realistic and affordable solution for you.</p>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Halton Stairlifts Review -->
	<div class="container-fluid top_area_grants">
		<h1 class="display-3">Government Grants in England,
			Wales and Northern Ireland</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<h1>The Disabled Facilities Grant</h1>
						<p>The Disabled Facilities Grant is a government funded grant awarded to eligible disabled individuals with mobility difficulties who need to make adaptations to their homes. It will not affect any benefits that you may already get. The grant is not just for stairlifts but a range of eligible home improvements such as ramps, walk in baths, door widening and easier to use heating and lighting controls.</p>
						<p>Up to £30,000 is available in England, £36,000 in Wales and £25,000 in Northern Ireland, but bear in mind that not everyone qualifies for a grant. Disabled Facilities Grants are not available in Scotland. The amount awarded, if any, is means tested and depends on household income and savings over £6,000. You may have to pay towards the cost of installing the stairlift yourself.</p>
						<p>You will need to contact your local council for an application form and get at least two written estimates for the cost of the work. If you are a disabled tenant living in rented accommodation your landlord can apply on your behalf.</p>
						<p>In order to assess your eligibility, the council will need to agree that the work to install the stairlift is “necessary and appropriate” and is “reasonable and can be done”, taking into account the condition and age of your home. Usually an Occupational Therapist will visit to assess your circumstances. You must also intend to live in the property during the grant period, currently 5 years, otherwise you may have to repay the grant.</p>
						<p>It is important not to begin having your stairlift installed until the council has approved your application. It can take up to 6 months to receive a decision. It is possible to appeal the decision if you don’t agree with it. If you are eligible for a grant, your council will let you know when and how they will pay for the work. They may pay in instalments or at the end when the work is complete.</p>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Other Sources of Financial Aid -->

	<div class="container-fluid top_area_grants">
		<h1 class="display-3">

			Other Sources of Financial Aid</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<img src="Images/the_act_foundation.png" alt="the ACT Foundation">
						<p>If a Disabled Facilities Grant has already been awarded but further financial assistance is needed, the ACT Foundation can provide small grants of up to £2,500 towards home modifications to meet the shortfall. The ACT Foundation’s aim is to improve the quality of life for people in poverty with a physical and/or mental disability, or who are aged.</p>
						<p>The ACT Foundation also offers financial help towards the cost of independent living equipment such as adjustable beds, wheelchairs and riser chairs, as well as help with the cost of short-term respite care.</p>
						<p>To apply for help with the cost of a stairlift, you must first ensure that you have been awarded a Disabled Facilities Grant. Then you need to download an application form from the website, complete it and return it by post (email applications are not accepted). You should receive a decision within 3 months and the ACT Foundation tries to process 95 percent of applications within 2 months.</p>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<img src="Images/independence_at_home.jpg" alt="Independence at Home">
						<p>Independence at Home is a charity that offers funding of up to £2,000 towards the cost of equipment and home adaptations, such as stairlifts, in the final stage of fundraising if there is a shortfall in funds from other sources. Its aim is to help improve the quality of life and independence of disabled people and those with a long-term illness that live at home and are in financial need.</p>
						<p>To be considered for help with the cost of a stairlift, you will need to be referred to Independence at Home by an occupational therapist, specialist nurse, physiotherapist, social worker or other professional health or social care worker.</p>
						<p>They will need to write a letter on headed paper detailing why you need a stairlift and what the money will be used for and complete the application form (which can be downloaded from the website). Your referrer will need to provide an occupational therapy report including your needs assessment, medical diagnosis and statement of requirements, as well as a copy of the quote from your stairlift supplier for the work.</p>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<img src="Images/margarets.png" alt="Margaret’s Fund">
						<p>Margaret’s Fund is a registered charity and not-for-profit organisation that helps only poor and unwell women (not men). Small disability grants are provided to help finance the cost of a stairlift and other equipment. You will not to be able to apply as an individual but will need to ask a “caring professional” to apply on your behalf, such as a doctor or social worker.</p>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<img src="Images/SSAFA.png" alt="SSAFA">
						<p>The SSAFA offers support to individuals of any age who have served in the armed forces. If this applies to you, they can help you get financial assistance to buy a stairlift.</p>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<img src="Images/RABI.png" alt="RABI">
						<p>The RABI is a welfare charity that offers grants to farming families with a financial need. They can purchase mobility equipment for those with disabilities such as stairlifts, wheelchairs and mobility scooters. The first step in the application process is to call their helpline on 0808 2819490. You will then need to complete an application form and provide financial information. The grants committee meets every 6-8 weeks, so you should receive a decision within that timeframe.</p>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<img src="Images/Turn2us.png" alt="Turn2us">
						<p>If you are still seeking financial assistance for a stairlift, it is worth visiting the Turn2us website, which aims to help people in financial hardship find any grants or benefits they are eligible for. The website has a Grants Search Tool where you can enter your details to be matched with any help that may be available to you. There is also a Benefits Calulator.</p>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<!-- VAT Relief -->

	<div class="container-fluid top_area_grants">
		<h1 class="display-3">

			VAT Relief</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul style="text-align: center;">

						<p>If you, or the person who the stairlift is for, meet certain criteria you will not have to pay any Value Added Tax (VAT) on the cost of purchasing and installing a stairlift. To be eligible for zero percent VAT the stairlift must be for personal use and the person it is for must meet the HMRC’s definition of “chronically sick or disabled”.</p>
						<p>It is important to ask the stairlift company about this before you buy the stairlift. They will ask you to fill out a “User VAT declaration” form to prove that you meet the eligibility criteria. That way they will not add any VAT to the price. It is much easier to get a zero rating before you make the purchase than to try to claim a VAT refund after you’ve paid the invoice.</p>
						<p>If you, or the stairlift user, don’t qualify for zero percent VAT, but are over 60, you are still eligible to pay a reduced rate of only 5 percent VAT on the cost of installing a stairlift and certain other mobility aids, including built in shower seats, grab rails and ramps. VAT on other products and services is currently 20 percent, so you can save quite a lot of money if you qualify for the zero rated or reduced rate VAT.</p>
					</ul>
				</div>

			</div>
		</div>
	</div>


	<!--Financial Aid in Scotland -->

	<div class="container-fluid top_area_grants">
		<h1 class="display-3">


			Financial Aid in Scotland</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<h1>Grants in Scotland</h1>
						<p>In Scotland local authorities are responsible for providing grants to home owners for structural adaptations that are essential to a disabled person’s needs. The Scheme of Assistance in Scotland was created by the Housing (Scotland) Act 2006 and places primary responsibility for maintaining homes in good condition on individual property owners.</p>
						<p>The Scottish system for applying for grants for home adaptations, such as installing a stairlift, works in a similar way to the DFG system in England and Wales. If you are looking for funding for home alterations for yourself or a relative, you will need to apply to the local council. Tenants should ask their landlord about the help available. The local council will make arrangements to carry out an assessment of your needs.</p>
						<p>The amount awarded depends on the local authority. If the council awards a “mandatory grant” (most structural adaptations qualify for this) it must cover 80 percent of the cost of the work. If you receive certain benefits, the grant will cover 100 percent of the cost.</p>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<h1>Help to Adapt Scheme</h1>
						<p>The Help to Adapt scheme was recently introduced by the Scottish Government with the aim of helping older people maintain their independence in their own homes by encouraging them to make alterations to their homes now in anticipation of their needs in the future.</p>
						<p>The Help to Adapt initiative is designed for homeowners aged 60 or over who have enough equity in their homes, regardless of their income. To qualify, any outstanding mortgage must be less than 20 percent of the value of the property. The Scottish Government offers loans secured against this equity for the purpose of funding alterations and adaptations that can enable elderly homeowners to stay safe and independent in their own homes as they age.</p>
						<p>The amount awarded depends on the local authority. If the council awards a “mandatory grant” (most structural adaptations qualify for this) it must cover 80 percent of the cost of the work. If you receive certain benefits, the grant will cover 100 percent of the cost.</p>
						<ul>
							<h3>At the time of writing the initiative is being piloted in the following local authority areas:</h3>
							<li>Argyll and Bute</li>
							<li>City of Edinburgh</li>
							<li>East Dunbartonshire</li>
							<li>East Lothian</li>
							<li>East Renfrewshire</li>
							<li>Falkirk</li>
							<li>Glasgow City</li>
							<li>North Lanarkshire</li>
							<li>Renfrewshire</li>
							<li>Scottish Borders</li>
							<li>Stirling</li>
							<li>West Lothian</li>
						</ul>
						<p>The maximum loan amount that is available to borrow is £30,000 and the amount homeowners will have to repay is based on the value of the property. There are no monthly interest charges and the loan will only be repaid when the property is sold or the owner dies.</p>
						<p>The Help to Adapt team will organise any work that is necessary to make the alterations required and you will be advised by an occupational therapist as to the most suitable ways to adapt your home.</p>
						<p>Alterations that qualify for funding are those that help residents carry on performing everyday household tasks, including using the stairs and getting in and out of the bath. Adaptations such as a stairlift, handrails and ramps are included as they can improve the quality of life for older people and give them peace of mind that they can stay living safely in their home.</p>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<!--Financial Aid in Ireland-->

	<div class="container-fluid top_area_grants">
		<h1 class="display-3">


			Financial Aid in Ireland</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<h1>Local Authority Grants</h1>
						<p>In Ireland there are two types of grants administered by local authorities that may be used towards the cost of a stairlift, the Housing Adaptation Grant for People with a Disability and the Mobility Aids Grant Scheme.</p>
						<h3>Housing Adaptation Grant for People with a Disability</h3>
						<p>The Housing Apaptation Grant for People with a Disability is for adaptations that need to be made to make a home suitable for someone with a disability to live in, including installing a stairlift or making it wheelchair accessible. It is available to both private homeowners and tenants that have written permission from their landlord.</p>
						<p>In order to apply you may need an occupational therapy assessment, which can be arranged by your local authority or by yourself. The grant is means tested, which means whether you qualify for a grant and the amount you will receive depends on your household income. In addition to providing details of your income, you will also be asked to provide your tax information.</p>
						<p>Usually you will be required to provide two quotes from different contractors to show the cost of the work needed so that the local authority can assess whether the price for the work is reasonable. You will not receive the grant if the home adaptation work begins before your application has been approved.</p>
						<p>The maximum grant amount for homes over 12 months old is €30,000 and if you qualify for a grant you may be awarded an amount to cover from 30 to 95 percent of the total cost of the work. The exact amount depends on your income and is decided at the discretion of the local authority.</p>
						<h3>Mobility Aids Grant Scheme</h3>
						<p>The Mobility Aids Grant Scheme offers grants for more minor adaptations required due to mobility issues, such as fitting a stairlift and installing ramps. It is designed to help older people but is also awarded to younger people with a disability.</p>
						<p>To be eligible for the Mobility Aids Grant Scheme you need to have an annual household income of less than €30,000. You will be asked to provide your financial and tax details when you apply.</p>
						<p>The maximum grant amount awarded under this scheme is €6,000 and can in some cases cover 100 percent of the cost of the work. Each local authority has the power to decide whether to award a grant to cover the full cost or a percentage.</p>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<h1>VAT Refunds in Ireland</h1>
						<p>In Ireland people with a physical or mental disability can claim a VAT refund on the purchase of certain mobility aids and appliances, as well as some home adaptation work, if the purchase was necessary for to carry out daily functions. Most daily living aids such as stairlifts are eligible for a VAT refund providing you meet certain criteria.</p>
						<p>To be eligible to get the VAT back you must live in Ireland, have a disability and need the stairlift to perform daily activities (ie. climb the stairs), own the stairlift and be the only person who uses it.</p>
						<p>To apply for a refund you will need to fill out the relevant form and include evidence to support your claim such as the invoice for your stairlift, clearing showing the amount of VAT you paid, and possibly evidence of your disability.</p>
					</ul>
				</div>

			</div>
		</div>
	</div>


	<!--Grants and Funding for Children’s Mobility Equipment-->

	<div class="container-fluid top_area_grants">
		<h1 class="display-3">



			Grants and Funding for Children’s Mobility Equipment</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<h1>
							Grants and Funding for Children’s Mobility Equipment</h1>
						<p>The sources of financial aid mentioned above apply to adults with disabilities. However, there are similar funding opportunities for children with disabilities. As for adults, Disabled Facilities Grants from local councils are available for home adaptations for disabled children that meet the criteria.</p>
						<p>For families who are unable to get help from statutory services, a number of the organisations already discussed also offer funding to families of disabled children. These include The ACT Foundation, Independence at Home and Turn2us.</p>
						<p>However, the following nationwide charities provide funding or equipment specifically for children and young people with disabilities. They each have their own eligibility criteria. We recommend you visit their websites to find full details about the type of equipment they can help with.</p>

						<img src="Images/actionforkids-logo-1.jpg" alt="Action For Kids">

						<p>Action For Kids can provide mobility equipment for disabled children and young people aged from 0-26 years to help them be more independent. They can supply powered wheelchairs and other mobility equipment that is not usually available on the NHS. The person the equipment is for will need to be assessed by an occupational therapist or physiotherapist. There is waiting list of around 9 months or more.</p>

						<img src="Images/caudwellchildren-logo.png" alt="Caudwell Children">


						<p>Caudwell Children is a registered charity that works to transform the lives of disabled children under 18 years of age. They can provide mobility equipment such as powered wheelchairs and specialised mobility buggies to families in need</p>

						<img src="Images/cerebra-logo.jpg" alt="Cerebra ">

						<p>Cerebra provide support for children with brain conditions. They have an online Freecycle service where families can rehome unneeded mobility equipment for free.</p>

						<img src="Images/childrentoday-logo-1.jpg" alt="Children Today ">

						<p>Children Today relies entirely on donations to provide funding for mobility equipment for disabled children and young people up to 25 years of age. Applicants are asked to include a supporting reference from a health or medical professional along with a written quote for the equipment required.</p>

						<img src="Images/elifar-foundation-logo.jpg" alt="The Elifar Foundation ">

						<p>The Elifar Foundation is a small charity that provides grants for equipment for children and young people. The grants are intended to fund the purchase of items for which statutory funding is not available. Applications are assessed on an individual basis and awarded at the discretion of the trustees.</p>

						<img src="Images/family-fund-logo-1.png" alt="Family Fund ">
						<p>Family Fund provides grants to families raising disabled or seriously ill children aged 17 or less. The grants are discretionary and a family’s financial situation will be taken into account. Applications can take 3-4 months to be processed.</p>


						<img src="Images/lifeline4kids-logo.jpg" alt="Lifeline 4 Kids">
						<p>Lifeline 4 Kids can supply specialised equipment to improve the quality of life for children with disabilities or special needs aged up to 18. Applications are discussed at monthly meetings. Applicants need to supply a supporting letter from a health professional and evidence of their finances. If an application is successful the charity will purchase and deliver the required equipment. They do not award cash grants.</p>

						<img src="Images/newlife-logo.png" alt="Newlife">
						<p>LNewlife provides funding for essential equipment for disabled children under 19 years of age. The application form is in two parts. The first part should be completed by a parent or carer, the second part by a relevant professional such as an occupational therapist. The Newlife Care Services Team assesses each grant application individually, taking into account the child’s need and the urgency.</p>

						<img src="Images/nihalarmstrongtrust-logo.jpg" alt="The Nihal Armstrong Trust">
						<p>The Nihal Armstrong Trust is a small charity that provides funding for equipment for children with cerebral palsy up to and including the age of 18. The equipment must cost less that £1,000 and applicants must be on means tested benefits to qualify. A supporting reference from a professional is also required.</p>

						<img src="Images/strongbones-logo.jpg" alt="Strongbones">
						<p>Strongbones offers means tested grants of up to 70% of the cost of equipment for children under 21 with bone conditions. The grants can be used for medical equipment, wheelchairs, disability aids and home adaptations. The funding can be used in addition to a Disabled Facilities Grant. The application process can take up to 3 months.</p>

						<img src="Images/variety-logo.jpg" alt="Variety">
						<p>Variety provides equipment grants for disabled and sick children under the age of 19. The amount awarded can be anywhere from £100 to £6,000. Each application is individually assessed. Applicants need to provide a supporting letter from a medical professional. Variety also provides wheelchairs for disabled children and young people up to including 18 years of age.</p>

						<img src="Images/whizz-kidz-logo.jpg" alt="Whizz-Kidz">
						<p>Whizz-Kidz provides mobility equipment for children with a physical disability. They can often help in situations where equipment is not available on the NHS. Equipment provided includes manual and powered wheelchairs, trikes and buggies. To be eligible a child must be under 18 at the time the application is submitted and meet certain criteria.</p>

					</ul>
				</div>

			</div>
		</div>
	</div>




	<!--Other Options-->

	<div class="container-fluid top_area_grants">
		<h1 class="display-3">



			Other Options</h1>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<ul style="text-align: center;">
						<h1>
							Purchase a Reconditioned Stairlift</h1>
						<p>If you are unable to get any financial assistance, you could still save money by buying a reconditioned stairlift instead of a brand new one. Reconditioned stairlifts are much cheaper because they have been pre-owned. Although the stairlift will be secondhand, it will have been refurbished to meet quality and safety standards and will have a brand new track, so this is a more affordable option if you’re on a budget.</p>

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
