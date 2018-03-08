<!-- GET HEADER -->
<?php get_header(); ?>
<!-- Page Title -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<!-- SLIDER AREA
	================================================== -->
	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2>Selamat Datang</h2>
			<p>
				La Tansa 2 sedang membuka pendaftaran santri baru untuk Tahun Akademik 2018/2019.
			</p>
			<a href="<?php echo get_permalink( get_page_by_title( 'Penerimaan Santri Baru' ) ); ?>" class="da-link" style="width:155px;">Klik Disini</a>
			<div class="da-img">
				<img class="image-style" src="<?php echo get_template_directory_uri(); ?>/default/default-image.jpg"  alt="">
			</div>
		</div>
		<?php
		if ( have_posts() ) : query_posts('category_name=lead&posts_per_page=5');
			while(have_posts()): the_post(); 
		?>
		<!--Slide 1-->
		<div class="da-slide">
			<h2> <?php the_title(); ?> </h2>
			<p>
				<?php echo get_the_excerpt(); ?>
			</p>
			<a href="<?php the_permalink(); ?>" class="da-link" style="width:100px;">Lihat</a>
			<div class="da-img">
				<img class="image-style" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('thumbnail');}?>" onerror="this.src='<?php echo get_template_directory_uri(); ?>/default/default-image.jpg'"  alt="">
			</div>
		</div>
		<?php
			endwhile;
		endif;
		?>
		<?php wp_reset_query(); ?>
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</div>
</div>
<!-- UNDER SLIDER - BLACK AREA
================================================== -->
<div class="undersliderblack">
	<div class="grid latansa-b">
		<div class="row space-bot">
			<div class="c12">
				<!--Box 1-->
				<div class="c4 introbox introboxfirst">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-bolt"></i>
						</span> La Tansa 2 menerima satri baru<br />
						SMP - SMU Tahun Ajaran 2018-2019<br />
						(Program 3 Tahun)
					</div>
				</div>
				<!--Box 2-->
				<div class="c4 introbox introboxmiddle">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-info-sign"></i>
						</span> Informasi Pendaftaran Santri Baru.<br />
						WA: +62 81384411690<br />
						Email: info@latansa2.sch.id
					</div>
				</div>
				<!--Box 3-->
				<div class="c4 introbox introboxlast">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-map-marker"></i>
						</span>
						Jl. Soekarno-Hatta No.1, Lebak - Banten<br />
						Telpon: +62 81384411690<br />
						Surel: info@latansa2.sch.id 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shadowunderslider">
</div>

<!-- START content area
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--INTRO-->
		<div class="c12">
			<div class="royalcontent">
				<h1 class="royalheader">Selamat Datang di Pondok Pesantren La Tansa 2</h1>
				<h1 class="title" style="text-transform:none;">"<?php echo get_bloginfo('description'); ?>"</h1>
			</div>
		</div>
	</div>
	<div class="row space-top">
		<div class="c8 space-top">
			<h1 class="maintitle">
			<?php if ( have_posts() ) : query_posts('category_name=artikel&posts_per_page=1') ?>
			<span>TERBARU</span>
			</h1>	
			<div class="c12">
				<!-- BEGIN TEAM STYLE 2
				================================================== -->
					<?php while ( have_posts() ) : the_post(); ?>
				
					<!-- For Facebook -->
					<meta property="og:title" content="<?php the_title(); ?>" />
					<meta property="og:type" content="article" />
					<meta property="og:image" content="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('thumbnail');}else{echo get_template_directory_uri().'/default/default-image-thumb.jpg'; }?>" />
					<meta property="og:url" content="<?php the_permalink(); ?>" />
					<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />

					<div class="c6">
						<p>
							<img class="latansa-thumb" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('thumbnail');}?>" onerror="this.src='<?php echo get_template_directory_uri(); ?>/default/default-image-thumb.jpg'"  style="border-bottom: 5px solid #eee;" alt="">
						</p>
					</div>
					<div class="c6">
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p>
							<?php $content = get_the_excerpt(); echo preg_replace('/<img[^>]+./','',$content); ?>
						</p>
						<p>
						</p>
						<ul class="social-links">
							<li class="twitter-link">
							<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=Aku Membagikan <?php the_title(); ?>&hashtags=latansa2" class="twitter has-tip" target="_blank" title="Bagikan ke Twitter">Twitter</a>
							</li>
							<li class="facebook-link">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebook has-tip fb-xfbml-parse-ignore" target="_blank" title="Bagikan ke Facebook">Facebook</a>
							</li>
							<li class="google-link">
							<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="google has-tip" title="Google +" target="_blank">Google</a>
							</li>
							<li class="linkedin-link">
							<a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="linkedin has-tip" title="LinkedIn" target="_blank">LinkedIn</a>
							</li>
						</ul>
						<div class="clear"></div>
						<p>
						</p>
					</div>
					<!-- END TEAM STYLE 1
					================================================== -->
					<?php endwhile; ?>
	<?php else: echo 0; endif; ?>
			</div>
		</div>
		<div class="c4 space-top">
			<h1 class="maintitle ">
			<span>Sambutan</span>
			</h1>
			<div id="testimonials">
				<div>
					<div class="testimonial">
						<img src="<?php echo get_template_directory_uri().'/default/testimony_1.jpg'; ?>" class="avatarspic" alt=""> "Saya merasa bangga bisa ikut membantu mengembangkan Website ini. Selanjutnya Anda dapat mengisi tujuan dan harapan serta testimoni lainnya yang berkaitan dengan Sekolah / Madrasah. Bisa berupa sambutan maupun harapan"
					</div>
					<div class="author-wrapper">
						<div class="arrow">
						</div>
						<div class="testimonial-name">
								Moch. Diki Widianto <span>Web Developer</span>
						</div>
					</div>
				</div>
				<div>
					<div class="testimonial">
						<img src="http://placehold.it/90x90" class="avatarspic" alt=""> "Isi tujuan dan harapan serta testimoni lainnya yang berkaitan dengan Sekolah / Madrasah. Bisa berupa sambutan maupun harapan"
					</div>
					<div class="author-wrapper">
						<div class="arrow">
						</div>
						<div class="testimonial-name">
								Cancan Firman W. <span>Manajer Situs</span>
						</div>
					</div>
				</div>				
				<div>
					<div class="testimonial">
						<img src="http://placehold.it/90x90" class="avatarspic" alt=""> "Isi tujuan dan harapan serta testimoni lainnya yang berkaitan dengan Sekolah / Madrasah. Bisa berupa sambutan maupun harapan"
					</div>
					<div class="author-wrapper">
						<div class="arrow">
						</div>
						<div class="testimonial-name">
								Abdul Hakim <span>Manajer Projek</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if ( have_posts() ) : query_posts('category_name=artikel&posts_per_page=8');
			global $wp_query; 
			if($wp_query->found_posts < 4){
	?>

	<?php
			}else{
	?>
	<div class="row space-top">
		<div class="c12 space-top">
			<h1 class="maintitle ">
			<span>ARTIKEL LAINNYA</span>
			</h1>
		</div>
	</div> 
	<div class="row space-bot">
		<div class="c12">
			<div class="list_carousel">
				<div class="carousel_nav">
					<a class="prev" id="car_prev" href="#"><span>prev</span></a>
					<a class="next" id="car_next" href="#"><span>next</span></a>
				</div>
				<div class="clearfix">
				</div>
				<ul id="recent-projects">
					<?php
						while(have_posts()): the_post(); 
					?>
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('thumbnail');}?>" onerror="this.src='<?php echo get_template_directory_uri(); ?>/default/default-image-thumb.jpg'" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<p>
								 <?php echo get_the_excerpt(); ?>
							</p>
						</div>
					</div>					
					</li>
					<?php 
						endwhile;
					?>
				</ul>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
	<?php
	}endif;
	?>
</div>
<!-- GET FOOTER -->
<?php get_footer(); ?>