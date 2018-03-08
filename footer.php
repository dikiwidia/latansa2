<!-- FOOTER
================================================== -->
<div id="wrapfooter">
	<div class="grid">
		<div class="row" id="footer">
			<!-- to top button  -->
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<!-- 1st column -->
			<div class="c3">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" style="padding-top: 20px;" alt="">
			</div>
			<!-- 2nd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-twitter"></i> Follow us</h2>
				<hr class="footerstress">
				<div id="ticker" class="query">
				</div>
			</div>
			<!-- 3rd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-envelope-alt"></i> Alamat</h2>
				<hr class="footerstress">
				<dl>
					<dt>Jl. Soekarno-Hatta No.1, Lebak - Banten</dt>
					<dd><span>Telpon:</span>+62 81384411690</dd>
					<dd>Surel: <a href="mailto:info@latansa2.sch.id">info@latansa2.sch.id</a></dd>
				</dl>
				<ul class="social-links" style="margin-top:15px;">
					<li class="twitter-link smallrightmargin">
					<a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link smallrightmargin">
					<a href="#" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
					<li class="google-link smallrightmargin">
					<a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
					</li>
					<li class="instagram-link smallrightmargin">
					<a href="https://www.instagram.com/latansa2ponpes/" class="instagram has-tip" title="Instagram" target="_blank">Instagram</a>
					</li>
					<li class="pinterest-link smallrightmargin">
					<a href="#" class="pinterest has-tip" title="Pinterest" target="_blank">Pinterest</a>
					</li>
				</ul>
			</div>
			<!-- 4th column -->
			<div class="c3">
				<h2 class="title"><i class="icon-link"></i> Tautan</h2>
				<hr class="footerstress">
				<?php wp_nav_menu( 
					array(
						'menu'              => 'secondary',
						'theme_location'    => 'secondary',
						'depth'             => 1,
						'container'         => 'false',
					)
				); ?>
			</div>
			<!-- end 4th column -->
		</div>
	</div>
</div>
<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 Pondok Pesantren La Tansa 2 &copy; <?php echo date('Y'); ?>. All Rights Reserved.
			</div>
			<div class="c6">
				<span class="right">
				Developed by <a href="https://www.linkedin.com/in/mochdikiwidianto">Moch. Diki Widianto</a></span>
			</div>
		</div>
	</div>
</div>

</div>
<!-- JAVASCRIPTS
================================================== -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.9.0.min.js"></script>
<!-- all -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<!-- slider -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>
</body>
</html>