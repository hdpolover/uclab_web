        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">
        	<div class="container">

        		<!-- Footer Widgets
				============================================= -->
        		<div class="footer-widgets-wrap">

        			<div class="row col-mb-50">
        				<div class="col-lg-8">

        					<div class="row col-mb-50">
        						<div class="col-md-4">

        							<div class="widget clearfix">

        								<img src="<?= base_url(); ?>berkas/<?= $logo2; ?>" alt="Image" class="footer-logo">

        								<p><?= $web_description; ?></p>

        							</div>

        						</div>

        						<div class="col-md-4">

        							<div class="widget widget_links clearfix">

        								<h4>Sitemap</h4>

        								<ul>
        									<li><a href="https://opensea.io/Unisons_CryptoLab">Opensea page</a></li>
        									<li><a href="<?= base_url(); ?>">Home</a></li>
        									<li><a href="<?= site_url('gallery'); ?>">Gallery</a></li>
        									<li><a href="<?= site_url('new-collection'); ?>">Collection</a></li>
        								</ul>

        							</div>

        						</div>

        						<div class="col-md-4">

        							<div style="background: url('<?= base_url(); ?>assets/images/world-map.png') no-repeat center center; background-size: 100%;">
        								<address>
        									<strong>Address:</strong><br>
        									<?= $web_address; ?><br>
        								</address>
        								<abbr title="Phone Number"><strong>Phone:</strong></abbr> <?= $web_phone; ?><br>
        								<abbr title="Email Address"><strong>Email:</strong></abbr> <?= $web_mail; ?>
        							</div>
        						</div>
        					</div>

        				</div>
        			</div>

        		</div><!-- .footer-widgets-wrap end -->

        	</div>

        	<!-- Copyrights
			============================================= -->
        	<div id="copyrights">
        		<div class="container">

        			<div class="row col-mb-30">

        				<div class="col-md-6 text-center text-md-left">
        					Copyrights &copy; 2022 All Rights Reserved by Unisons cryptolab.
        				</div>

        				<div class="col-md-6 text-center text-md-right">

        					<div class="clear"></div>

        					<i class="icon-envelope2 mr-1"></i> <?= $web_mail; ?> <span class="middot">&middot;</span> <i class="icon-phone mr-1"></i> <?= $web_phone; ?>
        				</div>

        			</div>

        		</div>
        	</div><!-- #copyrights end -->
        </footer><!-- #footer end -->

        </div><!-- #wrapper end -->

        <!-- Go To Top
	============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>

        <!-- JavaScripts
	============================================= -->
        <script src="<?= base_url(); ?>assets/js/plugins.min.js"></script>

        <!-- Footer Scripts
	============================================= -->
        <script src="<?= base_url(); ?>assets/js/functions.js"></script>

        <script>
        	(function() {
        		var cx = '006140480002229796823:3f-_bji0d1w';
        		var gcse = document.createElement('script');
        		gcse.type = 'text/javascript';
        		gcse.async = true;
        		gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        			'//www.google.com/cse/cse.js?cx=' + cx;
        		var s = document.getElementsByTagName('script')[0];
        		s.parentNode.insertBefore(gcse, s);
        	})();
        </script>

        </body>

        </html>