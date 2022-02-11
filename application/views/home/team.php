	<!-- Start Page Title Area -->
		<div class="page-title-area bg-21">
			<div class="container">
				<div class="page-title-content">
					<h2>Team</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>
						
						<li class="active">Team</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Team Area -->
		<section class="team-page-area bg-color ptb-100">
			<div class="container">
				<div class="section-title">
					<span>My Team</span>
					<h2>Meet The Team</h2>
				</div>

				<div class="row">
				<?php foreach($karyawan as $kry):?>
					<div class="col-lg-4 col-sm-6">
					
						<div class="ingle-team">
							<div class="team-img">
								<img src="<?=base_url('front-end/assets/img/karyawan/'). $kry ['image'];?>" alt="Image" 
							style="height: 250px; width : 300px" >
	
								<ul class="social">
								<li>
									<a href="<?= $kry ['tw'];?>" target="_blank">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>

								<li>
									<a href="<?= $kry ['ig'];?>" target="_blank">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>

								<li>
									<a href="<?= $kry ['fb'];?>" target="_blank">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
							</ul>
							</div>
							
							<div class="team-content">
								<h3><?= $kry ['nm_kry'];?></h3>
							<span><?= $kry ['jbt'];?></span>
							
							</div>
							
						</div>
						
					</div>
						
		<?php endforeach;?>
		
					<div class="col-lg-12 col-md-12">
                        <div class="pagination-area text-center">
                            <a href="#" class="prev page-numbers">
								<i class="bx bx-chevron-left"></i>
							</a>
							
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
							<a href="#" class="page-numbers">4</a>
							
                            <a href="#" class="next page-numbers">
								<i class="bx bx-chevron-right"></i>
							</a>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		
		<!-- End Team Area -->
		
