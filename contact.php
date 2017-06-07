
<? include_once ('head.php'); ?>


	<!-- GOOGLE MAP -->
	<section id="map-section" class="module-hero module-parallax module-fade">
		<div id="map"></div>
	</section>
	<!-- /GOOGLE MAP -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- CONTACT -->
		<section class="module">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<h2 class="module-title align-center font-alt">Contact us</h2>

						<div class="module-subtitle align-center font-inc">
							A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
						</div>

					</div>

				</div>
				<!-- /MODULE TITLE -->

				<!-- CONTACT FORM -->
				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<form id="contact-form" role="form" novalidate="">

							<div class="form-group">
								<label class="sr-only" for="cname">Name</label>
								<input type="text" id="cname" class="form-control" name="cname" placeholder="Name" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<label class="sr-only" for="cemail">Your Email</label>
								<input type="email" id="cemail" name="cemail" class="form-control" placeholder="Your E-mail" required="" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message" required="" data-validation-required-message="Please enter your message."></textarea>
								<p class="help-block text-danger"></p>
							</div>

							<button type="submit" class="btn btn-round btn-g">Submit</button>

						</form>

						<!-- Ajax response -->
						<div id="contact-response" class="ajax-response font-alt"></div>

					</div>

				</div>
				<!-- /CONTACT FORM -->

			</div>

		</section>
		<!-- /CONTACT -->

		<!-- DIVIDER -->
		<hr class="divider-w">
		<!-- /DIVIDER -->



		<!-- CONTACT -->
		<section class="module-small">
		
			<div class="container">
		
				<div class="row">
		
					<div class="col-sm-3">
						<div class="content-box">
							<div class="content-box-icon">
								<span class="icon-laptop"></span>
							</div>
							<div class="content-box-title font-inc">
								www.mdoglobe.com
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="content-box">
							<div class="content-box-icon">
								<span class="icon-map-pin"></span>
							</div>
							<div class="content-box-title font-inc">
								19 Jandara st, Seoul, KOREA
							</div>
						</div>
					</div>
						
					<div class="col-sm-3">
						<div class="content-box">
							<div class="content-box-icon">
								<span class="icon-phone"></span>
							</div>
							<div class="content-box-title font-inc">
								+1 234 567 89 00
							</div>
						</div>
					</div>
		
					<div class="col-sm-3">
						<div class="content-box">
							<div class="content-box-icon">
								<span class="icon-envelope"></span>
							</div>
							<div class="content-box-title font-inc">
								info@mdoglobe.com
							</div>
						</div>
					</div>
		
				</div>
		
			</div>
		
		</section>
		<!-- /CONTACT -->



<? include_once ('tail.php'); ?>

