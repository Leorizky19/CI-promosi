	<!-- Start Page Title Area -->
		<div class="page-title-area bg-22">
			<div class="container">
				<div class="page-title-content">
					<h2>Testimonials</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Testimonials</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Testimonial Two Area -->
		<section class="testimonial-page-area ptb-100">
			<div class="container">
				<div class="row">
				<?php foreach ($testimonial as $tl):?>
					<div class="col-lg-6">
						<div class="testimonial-text">
						
							<img src="<?= base_url('front-end/assets/img/testimonial-img/') . $tl ['image']?>" 
							alt="Image" style="height: 100px; width : 50px>
							
							<i class="flaticon-quotation"></i>
							
							<p>“<?= $tl ['text'];?></p>
							
							<h3><?= $tl ['nama'];?></h3>
							<span><?= $tl ['jbt'];?></span>
						</div>
					</div>

					<?php endforeach;?>
				</div>
			</div>
		</section>
		<!-- End Testimonial Two Area -->
		