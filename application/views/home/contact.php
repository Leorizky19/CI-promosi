	<!-- Start Page Title Area -->
		<div class="page-title-area bg-2">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact Us</h2>
					<ul>
						<li>
							<a href="<?= base_url('home/index');?>">
								Home 
							</a>
						</li>

						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Map Area -->
		<div class="map-area">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5425556771224!2d107.6249733143174!3d-6.945141669918667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8612c38ffff%3A0xdc238cc7cb1d24e2!2sKhazanah%20Maeru%20Sinergis!5e0!3m2!1sid!2sid!4v1639633886474!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<!-- End Map Area -->

		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5">
					<?php foreach($address as $add):?>
						<div class="contact-info">
							<h3>Get In Touch</h3>
							
							<ul>
								<li>
									<i class="flaticon-phone-call"></i>
									Phone:
									<a href=""><?= $add ['telepon']; ?></a>
								</li>
								
								<li>
									<i class="flaticon-email-1"></i>
									Email:
									<a href=""><?= $add['email']; ?></a>
								</li>

								<li>
									<i class="flaticon-pin"></i>
									Address:
									<span><?= $add ['alamat']; ?></span>
								</li>
							</ul>
			<?php endforeach;?>
						</div>
					</div>

					<div class="col-lg-8 col-md-7">
						<div class="contact-wrap">
							<h3>Write Us</h3>
							<?= $this->session->flashdata('pesan');?>
							 <form method="POST" action="<?= base_url('home/contact');?>">
								<div class="row align-items-center">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="nama" id="nama" class="form-control" required data-error="Please enter your name" placeholder="Your Name">

											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">

											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="telpon" id="telpon" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">

											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="subjek" id="subjek" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">

											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="pesan" class="form-control" id="pesan" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>

											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12 col-md-12">
										<button type="submit" class="default-btn page-btn">
											Send Message
										</button>

										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->
		
