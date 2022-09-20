<?php include 'thankyouheader.php'; ?>

<iframe src="https://adgebra.co.in/Tracker/Conversion?p1=5394&p2=[order_Id]&p3=[product_Id]&p4=[cartvalue]&p5=[flag~custom_values]" width="0" height="0" frameborder="0"></iframe>



<section class="thankuDetails">

	<div class="container">

		<div class="row">

			<div class="col-md-12 col-lg-12 col-12">

				<div class="card cardThankuDet">

					<div class="card-body">

						<h1 class="text-center">Thank you for your Enquiry</h1>

						<p class="text-center">Our customer relationship manager will get in touch with you shortly</p>

					</div>

				</div>

			</div>

</section>



<?php include 'thankyoufooter.php'; ?>

<?php if ((isset($download)) and ((bool)$download) == true) {
	redirect("downloadBrochure", 'refresh');
} ?>