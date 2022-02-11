
		<!-- Start What We Do Area -->
		<section class="our-production-area bg-color pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Tentang Aplikasi</span>
					<h2>Services We Provide</h2>
				</div>

				<div class="row">
				<?php foreach ($about_detail as $abd):?>
					<div class="col-lg-4 col-sm-6">
					
						<div class="what-we-do-item">
							<i class="about-detail-img"></i>
							<img src="<?= base_url('front-end/assets/img/about-detail/') . $abd['image'];?>" alt="Image"
						style="height: 250px; width : 300px">
							<h3><?= $abd ['judul'];?></h3>
							<p><?= $abd ['text'];?></p>
							
						</div>
						
					</div>
				<?php endforeach;?>
				</div>
				
			</div>
		</section>
		<!-- End What We Do Area -->

		
		<!-- Start Partner Area -->
		<div class="partner-area-two bio-data ptb-100">
			<div class="container">
				<div class="partner-wrap owl-theme owl-carousel">
				<?php foreach($partner as $pn):?>
					<div class="partner-item">
						<a href="#">
							<img src="<?= base_url('front-end/assets/img/partner_logo/') . $pn['image'];?>" alt="Image" width="300">
						</a>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
		<!-- End Partner Area -->
		