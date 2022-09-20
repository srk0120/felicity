<?php include 'header.php'; ?>
<section class="rrSlideDetails">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card cardFormRegisterDett">
					<div class="card-body">

						<h1 class="card-title">FELICITY</h1>
						<h2 class="card-title"> At Kada Agrahara Rd, Sarjapur Hobli, Bangalore</h1>
							<h3 class="card-title">By Bricks and Milestones</h3>


							<h4 class="card-title">Total Land Area : 75 Acres* Township</h4>
							<h4 class="card-title">Dedicated Club House</h4>
							<h4 class="card-title">Plot Size 1200 - 3000 Sqft.</h4>
							<!-- <h4 class="card-title">Towers : 2 Towers & 4 Blocks</h4>
							<h4 class="card-title">Structure : B+S+18 Floors</h4>
							<h4 class="card-title">Possession : July 2027</h4> -->


							<!-- <button type="submit" class="btn btnBtwRegg">Limited Peroid Prices</button> -->

							<!-- <h3 class="card-title">Total Area</h3> -->
							<h1 class="card-title">₹ 4500/Sq.ft Onwards</h1>

							</form>


							<button type="submit" data-toggle="modal" data-target="#bookvisit" class="btn btnBtwReg">Enquire Now</button>
							</form>
							<h6 class="rerNo">RERA : PRM/KA/RERA/1251/308/PR/150622/004989</h6>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="card cardFormRegisterDet1">
					<div class="card-body">
						<h1 class="card-title">BOOK A SITE VISIT</h1>
						<form method="post" action="<?= base_url('sendMail') ?>">
							<div class="form-group">
								<input type="text" name="name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="text" id="mobile" class="phone-field mobile" name="mobile" placeholder="10 Digits Mobile Number" required="" pattern="[1-9]{1}[0-9]{9}">
							</div>
							<div class="radioLeft1">
								<b>Whatsapp Number</b><br>
								<input name="whatsapp_option" id="whatsapp_option" class="whatsapp_option" value="same_as_above" type="radio" required="" checked=""><label>&nbsp;Same as Above&nbsp;&nbsp;&nbsp;</label>
								<input name="whatsapp_option" id="whatsapp_option" class="whatsapp_option" value="different_number" type="radio"><label>&nbsp;Different Number</label> <br>
							</div>
							<div class="form-group" id="whatsapp_mobile_div" class="whatsapp_mobile_div" style="display: none">
								<input type="text" id="whatsapp_mobile" class="phone-field whatsapp_mobile" name="whatsapp_mobile" placeholder="10 Digits Whatsapp Number">
							</div>

							<div class="form-group">
								<input type="text" name="current_city" placeholder="Enter Your City" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email" required="">
							</div>
							<div style="display:none;">
								<input type="text" value="" class="utm_source" name="utm_source" />
								<input type="text" value="" class="utm_medium" name="utm_medium" />
								<input type="text" value="" class="utm_term" name="utm_term" />
								<input type="text" value="" class="utm_campaign" name="utm_campaign" />
								<input type="text" value="" class="utm_content" name="utm_content" />

								<input type="text" value="" class="utm_site" name="utm_site" />
								<input type="text" value="" class="utm_url" name="utm_url" />
								<input type="text" value="" class="utm_title" name="utm_title" />
								<input type="text" value="" class="utm_timestamp" name="utm_timestamp" />
								<input type="text" value="" class="utm_itemID" name="utm_itemID" />
							</div>
							<button type="submit" class="btn btnBtwReg1">Enquire Now</button>
						</form>
						<h3 class=""><a class="phone_a_tag" href="tel:+917669098314">Call Us 24/7 @ +91 6360690190</a></h3>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="royaloverview anchor mt-3" id="royaloverview">
	<div class="container">
		<h1>OVERVIEW</h1>
		<div class="row">
			<div class="col-lg-6">
				<h1 class="rajGreenDescript">FELICITY - At Kada Agrahara Rd, Sarjapur Hobli, Bangalore</h1>
				<h6 class="text-center rajGreenDescript">RERA : PRM/KA/RERA/1251/308/PR/150622/004989<h6>
						<p class="royal">Felicity is a 75 Acres township by Bricks and milestones located at Sarjapura Bangalore. Bricks and milestones has more than 15 years experience in the real estate industry.
							Felicity is one the biggest largest plotted development project. Felicity is located one of the fasted growing locality of Bangalore. The project is located 1 km from sompur metro station.
							Stay close to numerous IT hubs in Bangalore and balance your work & personal life. Felicity offers RERA & BMRDA approved 30 X 50, 30 X 40, 30 X 55, 30 X 58, 40 X 60, 40 X 75 Plots.Felicity offers 30+ world class amenities to make your life extra comfortable</p>
						<!-- 			<p class="royal">
							TVS EMERALD JARDIN, A way of life that advances the experience of living and gives you a balanced future merits all of it. A Apartment of ground where plants are developed and a piece of ground on which blossoms, vegetables and so forth are developed and a little nursery at front of house or a little nursery at condo overhang or deck which is characterizes as TVS EMERALD JARDIN. This task is encircled by significant IT parks, schools, medical clinics, shopping centers and entertainment centers. This venture home/level/condo will be stand high over the rest</p>
						</p> -->
						<div class="text-center">
							<button type="subit" class="btn btnRequest" data-toggle="modal" data-target="#bookvisit">Download Brochure</button>
						</div>
			</div>
			<div class="col-lg-6">

				<img src="<?= base_url('images/overview_img.jpg') ?>">
			</div>
		</div>
	</div>
</section>









<section class="Amenities  anchor mt-3" id="Amenities">
	<div class="container">
		<h1 class="text-center pt-3 mb-4">Amenities</h1>
		<div class="row justify-content-center pl-md-4">
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/basketball-player.png') ?>">
				<h4>BasketBall Court</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/grass.png') ?>">
				<h4>Lawn Terraces</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/weightlifter.png') ?>">
				<h4>weightlifter</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/playground.png') ?>">
				<h4 class="gymDet">Kids Play Area</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/swimming.png') ?>">
				<h4>Swimming Pool</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/run.png') ?>">
				<h4>Jogging Track</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/ice-skates.png') ?>">
				<h4>Skating Rink</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/signage.png') ?>">
				<h4>Surface Car Park</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/director-chair.png') ?>">
				<h4>Multipurpose Lawn</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/amphitheatre.png') ?>">
				<h4>amphitheatre</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/tennis-equipment.png') ?>">
				<h4>Tennis Court</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/snooker.png') ?>">
				<h4>Party Lawn</h4>
			</div>
		</div>
	</div>
	</div>
</section>


<section class="anchor" id="price">
	<div class="container">
		<h1 class="text-center pricehe pt-3 mb-4">Pricing</h1>
		<div class="row">




			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>30 x 40 PLOTS</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 1200 sq.ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> 54 Lacs* Onward</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#bookvisit">Price</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1> 30 x 50 PLOTS</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 1500 sq.ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> 67.50 Lacs* Onward</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#bookvisit">Price</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 m-auto">

				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>30 x 55 PLOTS</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 1650 Sq.Ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> 74.25 Lacs* Onwards</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#bookvisit">Price</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>30 x 58 PLOTS</h1>
					</div>
				</div>
				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 1750 Sq.Ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> 78.75 Lacs* Onwards</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#bookvisit">Price</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>40 x 60 PLOTS</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 2400 sq.ft</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> 1.08 Cr Onwards*</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>



			<div class="col-md-4">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>40 x 75 PLOTS</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 3000 sq.ft</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> 1.35 Cr Onwards*</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div> -

			<!-- <div class="col-md-4">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>15 x 24 M PLOT</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 3875 sq.ft</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i>  2.13 Cr Onwards*</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>ODD SIZES PLOT</h1>
					</div>
				</div> -->
			<!-- 
				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> 235 PLOTS</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i>Enquire Now</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>

 -->

		</div>
</section>


<section class="specificationDet mt-4 anchor" id="highlights">
	<h1 class="text-center mb-4 text-white">Project Highlights</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="card project_lines">
					<div class="card-body">
						<ul class="text-black">
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>30+ Amenities</li>
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>One of the Largest plotted Development @ ₹4500/Sqft</li>


						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<ul>
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>1Km From Sompura Metro Station</li>
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Very Close To All IT Hubs </li>

						</ul>
					</div>
				</div>
			</div>
			<!-- 		<div class="col-md-4">
				<ul>
					<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Indoor Games Room</li>
					<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Dance & Zumba Studio</li>
				</ul>
			</div> -->
		</div>
		<div class="requestCallBack mt-4">
			<button type="subit" class="btn btnRequest" data-toggle="modal" data-target="#bookvisit">Download Brochure</button>
		</div>
	</div>
</section>


<h1 class="text-center pricehe pt-3 mb-4" id="walkthrough_video">Walkthrough Video</h1>
<div class="container">
	<div class="row">
		<div class="col-md-12 m-auto">
			<!-- <div class="card"> -->
			<?php if ((isset($video_play)) and ((bool)$video_play) == true) { ?>
				<iframe width="100%" height="550px" class="youtubevideo_1" src="https://www.youtube.com/embed/bfLdUPPBhL4?autoplay=1&cc_load_policy=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<?php } else { ?>
				<img class="" width="100%" height="100%" data-toggle="modal" data-target="#bookvisit" src="<?= base_url('images/virtual_tour.jpg') ?>">

			<?php } ?>

			<!-- 	<div class="card-body">
				</div> -->
		</div>
	</div>
</div>
</div>
</section>

<section class="masterPlan_section">
	<div class="container">
		<div class="row">
			<div class="master_plan">
				<img src="<?= base_url('images/masterplan/masterplan.jpg') ?>" alt="Master Plan">
			</div>
		</div>
	</div>
</section>
<section class="mt-4 map_section">

	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.6983619276803!2d77.7542175!3d12.8627487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae73943abc4e3b%3A0x3f9bb3001a938e74!2sFelictiy%20by%20Bricks%20and%20Milestones!5e0!3m2!1sen!2sin!4v1656482994827!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62229.012982864224!2d77.65868458010243!3d12.887563943740947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae73943abc4e3b%3A0x3f9bb3001a938e74!2sFelictiy%20by%20Bricks%20and%20Milestones!5e0!3m2!1sen!2sin!4v1656510340035!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>








<?php include 'footer.php'; ?>