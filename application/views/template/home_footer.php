<!-- Start Footer Area -->
		<footer class="footer-top-area pt-100 pb-70">
			<div class="container">
				<div class="row">
				<?php foreach($footer as $ft):?>
					<div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<img src="<?=base_url('front-end/assets/img/footer-logo/') . $ft ['image'];?>
							" alt="Image" style="heigth : 100px; width : 150px">
							
							<div class="newsletter-wrap">
								<h3><?= $ft ['judul'];?></h3>
								
							</div>

							<ul class="social-wrap">
								<li>
									<a href="<?= $ft ['tw'];?>" target="_blank">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>

								<li>
									<a href="<?= $ft ['ig'];?>" target="_blank">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>

								<li>
									<a href="<?= $ft ['fb'];?>" target="_blank">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>

								<li>
									<a href="<?= $ft ['yt'];?>" target="_blank">
										<i class="bx bxl-youtube"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
		<?php endforeach;?>
		
		
					<div class="col-lg-3 col-md-6">
					<?php foreach($address as $add):?>
						<div class="single-widget" align="center">
							<h3>Contact Us</h3>

							<ul class="address">
								<li>
									<i class="flaticon-pin"></i>
									<?= $add ['alamat']; ?>
								</li>

								<li>
									<i class="flaticon-email-1"></i>
									<a href="">
										<?= $add['email']; ?>
									</a>

									
								</li>

								<li>
									<i class="flaticon-phone-call"></i>
									<a href="">
										<?= $add ['telepon']; ?>
									</a>
									
									
								</li>
							</ul>
								<?php endforeach;?>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="single-widget" align="center">
							<h3>Additional Links</h3>

							<ul class="additional-link">
								<li>
									<a href="<?= base_url('home/about');?>">About</a>
								</li>
								
								<li>
									<a href="<?= base_url('home/team');?>">Team</a>
								</li>
								<li>
									<a href="#">Help (FAQ)</a>
								</li>
								<li>
									<a href="<?= base_url('home/contact');?>">Contacts</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Footer Bottom Area -->
		<footer class="footer-bottom-area">
			<div class="container">
				<div class="copyright-wrap">
					<p>Copyright @2020 Khazanah Maeru</p>
				</div>
			</div>
		</footer>
		<!-- End Footer Bottom Area -->
				
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up'></i>
			<i class='bx bx-chevrons-up'></i>
		</div>
		<!-- End Go Top Area -->
		

        <!-- Jquery-3.5.1.Slim.Min.JS -->
        <script src="<?=base_url('front-end/');?>assets/js/jquery-3.5.1.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="<?=base_url('front-end/');?>assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?=base_url('front-end/');?>assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="<?=base_url('front-end/');?>assets/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="<?=base_url('front-end/');?>assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="<?=base_url('front-end/');?>assets/js/owl.carousel.js"></script>
		<!-- Carousel Thumbs JS -->
		<script src="<?=base_url('front-end/');?>assets/js/carousel-thumbs.js"></script>
        <!-- Owl Magnific JS -->
		<script src="<?=base_url('front-end/');?>assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="<?=base_url('front-end/');?>assets/js/jquery.nice-select.min.js"></script>
		<!-- Parallax JS --> 
		<script src="<?=base_url('front-end/');?>assets/js/parallax.min.js"></script>
		<!-- Mixitup JS --> 
		<script src="<?=base_url('front-end/');?>assets/js/jquery.mixitup.min.js"></script>
		<!-- Appear JS --> 
        <script src="<?=base_url('front-end/');?>assets/js/jquery.appear.js"></script>
		<!-- Odometer JS --> 
		<script src="<?=base_url('front-end/');?>assets/js/odometer.min.js"></script>
		<!-- Form Validator JS -->
		<script src="<?=base_url('front-end/');?>assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="<?=base_url('front-end/');?>assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="<?=base_url('front-end/');?>assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="<?=base_url('front-end/');?>assets/js/custom.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/vidnext/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 14:59:55 GMT -->
</html>