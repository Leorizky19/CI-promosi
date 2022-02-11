
		<!-- End Sidebar Modal -->
		
		<!-- Start Newsletter Modal -->
		<!-- <div class="modal-newsletter-area">
			<div class="modal fade" id="exampleModal" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal">
							<i class="bx bx-x"></i>
						</button>
					
						<div class="modal-body">
							<div class="row align-items-center">
								<div class="col-lg-5 col-sm-5 p-0">
									<div class="newsletter-img">
										<img src="assets/img/newsletter-img.jpg" alt="Image">
									</div>
								</div>

								<div class="col-lg-7 col-sm-7 pl-0">
									<div class="modal-newsletter-wrap">
										<h3>Subscribe To Our Newsletter</h3>
										<p>Sign up for our mailing list to get the latest updates & offers.</p>

										<form class="newsletter-form" data-toggle="validator">
											<input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
				
											<button class="default-btn" type="submit">
												Subscribe Now
											</button>
				
											<div id="validator-newsletter" class="form-result"></div>

											<div class="agree-label">
												<input type="checkbox" id="chb1">
												<label for="chb1">
													Do Not Show This Popup Again
												</label>
											</div>
										</form>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Newsletter Modal -->
<!-- oh oke -->
	<!-- Start Banner Area -->
<section class="hero-slider-area">
			<div class="hero-slider-wrap owl-theme owl-carousel" data-slider-id="">
			
			<?php 
			

			foreach($banner_image as $bi):?>
				<!-- <img src="<?= base_url('front-end/assets/img/banner/') . $bi['image'];?>" alt=""> -->
				<div class="hero-slider-item" style="background-image: url(<?= base_url('front-end/assets/img/banner/') . $bi['image'];?>)">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="hero-slider-text one">
									<h1><?= $bi ['text'];?></h1>
									<p><?= $bi ['texts'];?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php endforeach;?>	
			</div>
			
			
			<!-- Start Carousel Thumbs -->
			<div class="thumbs-wrap">
				<div class="owl-thumbs hero-slider-thumb" data-slider-id="1">
					<div class="owl-thumb-item">
						<span>01</span>
					</div>
	
					<div class="owl-thumb-item">
						<span>02</span>
					</div>
	
					<div class="owl-thumb-item">
						<span>03</span>
					</div>
				</div>
			</div>
			<!-- End Carousel Thumbs -->

			<!-- Start Social Wrap -->
			<div class="social-wrap">
				<ul>
					<li class="follow-us">
						Follow Us:
					</li>
					<li>
						<a href="#" target="_blank">
							<i class="bx bxl-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" target="_blank">
							<i class="bx bxl-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#" target="_blank">
							<i class="bx bxl-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#" target="_blank">
							<i class="bx bxl-youtube"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- End Social Wrap -->
		</section>
		
		<!-- End Banner Area -->
	
		<!-- Start About Area -->
		<section class="about-area bg-color ptb-100">
			<div class="container">
				<div class="about-content-wrap">
				<?php foreach($about as $ab):?>
					<div class="row">
						<div class="col-lg-8">
							<div class="about-content">
								<span>Tentang Aplikasi</span>
								<h2><?= $ab ['motto']; ?></h2>
								<p align= "justify"><?= $ab ['detail_bio']; ?></p>
							
								<a href="<?=base_url('home/about');?>" class="default-btn">
									Learn More
								</a>
							</div>
						</div> 
						<?php endforeach;?>					
					
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->

		<!-- Start Fitur-->

		<section class="about-area-two bio-data ptb-100">
			<div class="container">
				<div class="row align-items-center">
				<div class="about-content">
					<span>Fitur Aplikasi</span>
					<h2>Berikut ini fitur yang terdapat pada E-treding </h2>	
					</div>
					</div>
					</div>

					
					<div class="container">
					
					<div class="row align-items-center">
					<?php foreach ($fitur as $fi):?>
					<div class="about-content">
						
							
							<h3><?= $fi ['judul'];?></h3>
							<p align= "justify"><?= $fi ['text'];?></p>	
							<div class="fitur-img-" style="text-align: center;">
				<img src="<?= base_url('front-end/assets/img/fitur-img/') . $fi['image'];?>" class="img-thumbnail" alt="Image"
				height= "400" width="400">
			</div>
			<?php endforeach;?>
			</div>
			
				</div>
				
			</div>
			
		</section>
		
		<!-- End About Area Two -->
	
			
		<!-- Start Fortofolio -->
		
		<section class="latest-trailer-two bg-color ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Portopolio/Tutorial</span>
					<h2>Berikut beberapa website lainnya yang telah kami buat!</h2>
				</div>

				<div class="latest-trailer-wrap-two owl-theme owl-carousel">
				 <?php foreach ($portofolio as $po):?>
					<div class="latest-trailer-item">
						<img src="<?= base_url('front-end/assets/img/portofolio_baru/') . $po ['image'];?>" alt="Image">

						<div class="video-button">
							<a href="<?= $po['link']; ?>" class="video-btn popup-youtube">
								<i class="bx bx-play"></i>
							</a>
						</div>
					</div>
<?php endforeach;?>
				</div>
			</div>
		</section>
		<!-- End Latest Trailer Area Two -->
			
			<!-- Pricing -->

	 <div id="generic_price_table">   
	<section class="pricing bio-data ptb-100 ">
        <div class="container">
            <div class="section-title">
					<span>Tipe Produk</span>
					<h3>Mari Bergabung Bersama Kami!!</h3>
				</div>
        </div>
		 
        <div class="container">
           
            <!--BLOCK ROW START-->
            <div class="row">
			 <?php foreach ($pricing as $pri):?>
                <div class="col-md-4">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content clearfix" style="height: 600px; width : 400px">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                           
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span><?= $pri['hd'];?></span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
							<?php 
							$a = explode(",",$pri ['text1']);
							for($i=0; $i<count($a); $i++){
                            	echo '<li><span>'.$a[$i].'</span> </li>';
							}
							?>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                        	<a class="" href="<?= $pri ['link'];?>">Trial</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                      
                </div>  
				<?php endforeach;?> 
                </div>
            </div>	
			  
			</section>
            <!--//BLOCK ROW END-->
     

	<!-- endPricing -->


		<!-- Start Get In Touch Area -->
		 <?php foreach ($contact as $co):?>
		<section class="get-in-touch-area ptb-100">
			<div class="container">
				<div class="get-in-touch-content">
					<h2><?= $co['hd'];?></h2>
					<h3><?= $co['text1'];?></h3>

					<a href="<?=base_url('home/contact');?>" class="default-btn">
						Contact Us
					</a>
				</div>
			</div>
			<?php endforeach;?>
		</section>
		<!-- End Get In Touch Area -->

		<!-- Start Exclusive Shop Area -->
	<!--	<section class="exclusive-hop-area ptb-100">
			<div class="container">
				<div class="section-title white-title">
					<span>Exclusive shop</span>
					<h2>Collect Your Movies Now!</h2>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="exclusive-img">
							<img src="<?=base_url('front-end/');?>assets/img/exclusive-hop-img-1.jpg" alt="Image">

							<div class="exclusive-img-2">
								<img src=<?=base_url('front-end/');?>"assets/img/exclusive-hop-img-2.png" alt="Image">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="exclusive-video-list">
							<div class="row">
								<div class="col-lg-2 pr-0">
									<div class="exclusive-list-img bg-1"></div>
								</div>

								<div class="col-lg-10">
									<div class="exclusive-text">
										<h3>Deep sea</h3>
										<span><del>$89.00</del> $59.00</span>
										<ul>
											<li>Director: Peter Spider</li>
											<li>Release: 01-01-2018</li>
										</ul>

										<a href="#" class="default-btn">
											<i class="flaticon-shopping-cart"></i>
											Add To Cart
										</a>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-2 pr-0">
									<div class="exclusive-list-img bg-2"></div>
								</div>

								<div class="col-lg-10">
									<div class="exclusive-text">
										<h3>Deep sea</h3>
										<span><del>$89.00</del> $59.00</span>
										<ul>
											<li>Director: Peter Spider</li>
											<li>Release: 01-01-2018</li>
										</ul>

										<a href="#" class="default-btn">
											<i class="flaticon-shopping-cart"></i>
											Add To Cart
										</a>
									</div>
								</div>
							</div>

							<div class="row mb-0">
								<div class="col-lg-2 pr-0">
									<div class="exclusive-list-img bg-3"></div>
								</div>

								<div class="col-lg-10">
									<div class="exclusive-text">
										<h3>Deep sea</h3>
										<span><del>$89.00</del> $59.00</span>
										<ul>
											<li>Director: Peter Spider</li>
											<li>Release: 01-01-2018</li>
										</ul>

										<a href="#" class="default-btn">
											<i class="flaticon-shopping-cart"></i>
											Add To Cart
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Exclusive Shop Area -->

		<!-- Start Team Area -->
		<section class="team-area bg-color ptb-100">
			<div class="container-fluid p-0">
				<div class="section-title">
					<span>My Team</span>
					<h2>Meet The Team</h2>
				</div>

				<div class="team-wrap owl-theme owl-carousel">
				<?php foreach($karyawan as $kry):?>
					<div class="ingle-team">
						<div class="team-img">
							<img src="<?=base_url('front-end/assets/img/karyawan/'). $kry ['image'];?>" class="img-thumbnail" alt="Image" 
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
				<?php endforeach;?>	
					
					
				</div>
			</div>
		</section>
		<!-- End Team Area -->

		

		<!-- Start Blog Area -->
	<!--	<section class="blog-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span class="top-title">News Feeds</span>
					<h2>Get The Latest News</h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="blog-details.html">
								<img src="<?=base_url('front-end/');?>assets/img/blog/1.jpg" alt="Image">
							</a>
						
							<div class="blog-content">
								<ul>
									<li>
										<i class="flaticon-user"></i>
										<a href="#">Admin</a>
									</li>

									<li>
										<i class="flaticon-calendar"></i>
										17/07/2020
									</li>
								</ul>

								<a href="blog-details.html">
									<h3>Video Production Services Your Business Must Have</h3>
								</a>

								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua sit amet consectetur.</p>

								<a href="blog-details.html" class="read-more">
									Learn More
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="blog-details.html">
								<img src="<?=base_url('front-end/');?>assets/img/blog/2.jpg" alt="Image">
							</a>
							
							<div class="blog-content">
								<ul>
									<li>
										<i class="flaticon-user"></i>
										<a href="#">Admin</a>
									</li>

									<li>
										<i class="flaticon-calendar"></i>
										18/07/2020
									</li>
								</ul>

								<a href="blog-details.html">
									<h3>Why You Need To Hire top class Video Production company</h3>
								</a>

								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua sit amet consectetur.</p>

								<a href="blog-details.html" class="read-more">
									Learn More
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-blog">
							<a href="blog-details.html">
								<img src="<?=base_url('front-end/');?>assets/img/blog/3.jpg" alt="Image">
							</a>
							
							<div class="blog-content">
								<ul>
									<li>
										<i class="flaticon-user"></i>
										<a href="#">By Admin</a>
									</li>

									<li>
										<i class="flaticon-calendar"></i>
										19/07/2020
									</li>
								</ul>
							
								<a href="blog-details.html">
									<h3>Choosing A Video Location For Your Next Project</h3>
								</a>

								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua sit amet consectetur.</p>

								<a href="blog-details.html" class="read-more">
									Learn More
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->
		
		<!-- Start Partner Area -->
		
		<div class="partner-area bio-data ptb-100">
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
