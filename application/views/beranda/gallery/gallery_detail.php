		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></h1>
				<span>Showcase of Our Awesome Works in 5 Columns</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?= ucwords(str_replace('-', ' ', $this->uri->segment(1))); ?></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row">

						<!-- Portfolio Single Image
						============================================= -->
						<div class="col-lg-8 portfolio-single-image">
							<a href="#"><img src="<?= base_url(); ?>assets//portfolio/single/10.jpg" alt="Image"></a>
						</div><!-- .portfolio-single-image end -->

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col-lg-4 portfolio-single-content">

							<!-- Portfolio Single - Description
							============================================= -->
							<div class="fancy-title title-bottom-border">
								<h2>Project Info:</h2>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, dolores, facere, corrupti delectus ex quidem adipisci tempore.</p>
							<p>Illum molestias cupiditate eveniet dolore obcaecati voluptatibus est quos eos id recusandae officia. Cupiditate, voluptates quibusdam ipsum vel corporis laboriosam id est doloremque?</p>
							<!-- Portfolio Single - Description End -->

							<div class="line"></div>

							<!-- Portfolio Single - Meta
							============================================= -->
							<ul class="portfolio-meta bottommargin">
								<li><span><i class="icon-user"></i>Created by:</span> John Doe</li>
								<li><span><i class="icon-calendar3"></i>Completed on:</span> 17th March 2021</li>
								<li><span><i class="icon-lightbulb"></i>Skills:</span> HTML5 / PHP / CSS3</li>
								<li><span><i class="icon-link"></i>Client:</span> <a href="#">Google</a></li>
							</ul>
							<!-- Portfolio Single - Meta End -->

							<!-- Portfolio Single - Share
							============================================= -->
							<div class="si-share d-flex justify-content-between align-items-center mt-4">
								<span>Share:</span>
								<div>
									<a href="#" class="social-icon si-borderless si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-rss">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-email3">
										<i class="icon-email3"></i>
										<i class="icon-email3"></i>
									</a>
								</div>
							</div>
							<!-- Portfolio Single - Share End -->

						</div><!-- .portfolio-single-content end -->

					</div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Related Projects:</h4>

					<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/1.jpg" alt="Open Imagination">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
											<a href="<?= base_url(); ?>assets//portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Open Imagination</a></h3>
									<span><a href="#">Media</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/2.jpg" alt="Locked Steel Gate">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
											<a href="<?= base_url(); ?>assets//portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
									<span><a href="#">Illustrations</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?= base_url(); ?>assets//portfolio/4/3.jpg" alt="Mac Sunglasses">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
											<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="#">
										<img src="<?= base_url(); ?>assets//portfolio/4/4.jpg" alt="Morning Dew">
									</a>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?= base_url(); ?>assets//portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="<?= base_url(); ?>assets//portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/5.jpg" alt="Console Activity">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?= base_url(); ?>assets//portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Console Activity</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single-gallery.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/6.jpg" alt="Shake It!">
									</a>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?= base_url(); ?>assets//portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="<?= base_url(); ?>assets//portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="<?= base_url(); ?>assets//portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="<?= base_url(); ?>assets//portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/7.jpg" alt="Backpack Contents">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/8.jpg" alt="Sunset Bulb Glow">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?= base_url(); ?>assets//portfolio/full/8.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
									<span><a href="#">Graphics</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/9.jpg" alt="Bridge Side">
									</a>
									<div class="bg-overlay" data-lightbox="gallery">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?= base_url(); ?>assets//portfolio/full/9.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
											<a href="<?= base_url(); ?>assets//portfolio/full/9-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="<?= base_url(); ?>assets//portfolio/full/9-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
											<a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Bridge Side</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="portfolio-item">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="<?= base_url(); ?>assets//portfolio/4/10.jpg" alt="Study Table">
									</a>
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://vimeo.com/91973305" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
											<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Study Table</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">Media</a></span>
								</div>
							</div>
						</div>

					</div><!-- .portfolio-carousel end -->

				</div>
			</div>
		</section><!-- #content end -->