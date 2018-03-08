<?php get_header(); ?>
<!-- Page Title -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Info Lengkap</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Hubungi +62 813 844 11690</h1>
			</div>
		</div>
	</div>
</div>
<div class="row space-top">
	<div class="c8 space-top">
		<h1 class="maintitle">
		<?php if ( have_posts() ) : ?>
		<span><?php echo single_cat_title(); ?></span>
		</h1>	
		<div class="c12">
			<!-- BEGIN TEAM STYLE 2
			================================================== -->
				<?php while ( have_posts() ) : the_post(); ?>
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
			<div class="pageline"></div>	
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_bs_pagination(); ?>
		</div>
	</div>
	<div class="c4 space-top">
		<h1 class="maintitle ">
		<span>Pencarian</span>
		</h1>
		<form class="form-wrapper cf" action="<?php echo home_url(); ?>" method="get" autocomplete="off">
			<input type="text" name="s" placeholder="Apa yang Anda cari ?" maxlength="10" required/>
			<button type="submit">Cari</button>
		</form>
		<br />
		<h1 class="maintitle ">
		<span>Kategori</span>
		</h1>
		<dl class="faqs nopadding noborder">
			<?php
				$args = array(
				'show_option_all'    => '',
				'show_count'         => 1,
				'orderby'            => 'name',
				'order'              => 'ASC',
				'style'              => 'list',
				'title_li'           => false,
				'show_option_none'   => __( '' ),
				'number'             => null,
				'echo'               => 1,
				'taxonomy'           => 'category',
				'parent'			 => 0
				);
				$categories = get_categories($args);
				foreach($categories as $category) { 
					echo '<dt><a href="'. get_category_link( $category->term_id ).'" title="'. sprintf( __( "Lihat Kategori %s" ), $category->name ).'">'. $category->name.'</a></dt>';
				} 
				//wp_list_categories( $args );
			?>
		</dl>
		<br />
		<h1 class="maintitle ">
		<span>Terbaru</span>
		</h1>
		<dl class="faqs nopadding noborder">
			<?php
				$args = array(
					'numberposts' => 5,
					'offset' => 0,
					'category' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'include' => '',
					'exclude' => '',
					'meta_key' => '',
					'meta_value' =>'',
					'post_type' => 'post',
					'post_status' => 'draft, publish, future, pending, private',
					'suppress_filters' => true
				);

				$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
				foreach( $recent_posts as $recent ){
					echo '<dt><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </dt> ';
				}
				wp_reset_query();
			?>
		</dl>
	</div>
</div>
<?php get_footer(); ?>