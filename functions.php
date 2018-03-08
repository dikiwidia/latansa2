<?php

if(!function_exists('themegu_widgets')) {
	function themegu_widgets() {  
	  register_sidebar( array(
		'name' 			=> 'Front-Page : Video',
		'id' 			=> 'video',
		'description' 	=> 'Video Youtube',
		'before_widget' => '',
		'after_widget' 	=> '',
		'before_title' 	=> '',
		'after_title' 	=> '',
	  ) );
	}
}
add_action( 'widgets_init', 'themegu_widgets' );


if(!function_exists('searchfilter')) {
	function searchfilter($query) {
		if ($query->is_search && !is_admin() ) {
			$query->set('post_type',array('post'));
		}
	return $query;
	}
}
add_filter('pre_get_posts','searchfilter');

if(!function_exists('top_menu')) {
	function top_menu() {
		require get_template_directory() . '/wp_bootstrap_navwalker.php';
		//require get_template_directory() . '/custom_walker_class.php';
		register_nav_menus( array(
			'primary' 	=> __( 'Navigasi Utama', 'collage' ),
			'secondary' => __( 'Navigasi Kaki', 'collage' ),
		) );
	}
	top_menu();// function called immediately
}
//
//require get_template_directory() . '/wp_bootstrap_pagination.php';

//
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
	return '</p><p><a class="btn btn-primary pull-right readmore" href="' . get_permalink() . '">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>';
}
//Walker Custom Categories
/*
class Walker_Custom extends Walker_Category {  
	function start_lvl(&$output, $depth=1, $args=array()) {  
	$output .= "\n<ul class=\"dropdown-menu\">\n";  
	}  

	function end_lvl(&$output, $depth=0, $args=array()) {  
	$output .= "</ul>\n";  
	}  

	function start_el(&$output, $item, $depth=0, $args=array()) { 
	  //jumlah child
	$cats = get_categories('child_of='.$item->cat_ID);
	  // print_r($cats);

	$cat_name = esc_attr( $item->name );
	$cat_c = esc_attr( $item->category_count );
	if(strlen($cat_c)<2){
		$cat_count = '0'.$cat_c;
	} else {
		$cat_count = $cat_c;
	}
	if($item->parent==1){
	  $output .= "<li>"; //default <li class=\"dropdown\">
		//jika jumlah child lebih besar dari 0
	  if(count($cats)>0)
		$link = '<a class="dropdown-toggle" data-toggle="dropdown" href="#" >' . $cat_name . '<b class="caret"></b></a>';
	  else
		  // $link = '<a class="dropdown-toggle" data-toggle="dropdown" href="#" >' . $cat_name . '</a>';
		$link = '<a class="dropdown-toggle" data-toggle="dropdown" href="' . esc_url( get_term_link($item) ) . '" >' . $cat_name . '<span class="badge">' . $cat_count . '</span></a>';
	}
	else{
	  $output .= "<li>";
	  $link = '<a  href="' . esc_url( get_term_link($item) ) . '" >' . $cat_name . '<span class="badge">' . $cat_count . '</span></a>';
	}
	$output.=$link;
	}  
	function end_el(&$output, $item, $depth=0, $args=array()) {  
	$output .= "</li>\n";  
	}  
}  
*/
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'highlight-active-page';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// custom excerpt length
function themify_custom_excerpt_length( $length ) {
   return 50;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );

//Thumb
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(360,225); // 50 pixels wide by 50 pixels tall, crop mode 

// add more link to excerpt
function themify_custom_excerpt_more($more) {
   global $post;
   //return '[...]<br /><br /><a class="btn" href="'. get_permalink($post->ID) . '">'. __('Read More', 'themify') .'</a>';
   return ' ...';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');

//fungsi potong more di menu
// add more link to excerpt
function potong($p,$q) {
	if($p == ''){
		$a = "";
	} else {
		$b = substr($p,0,250);
		$a = $b.' ...';
	}   
   return $a;
}

//
function wp_bs_pagination($pages = '', $range = 4)
 
{  
 
     $showitems = ($range * 2) + 1;  
 
 
 
     global $paged;
 
     if(empty($paged)) $paged = 1;
 
 
 
     if($pages == '')
 
     {
 
         global $wp_query; 
 
		 $pages = $wp_query->max_num_pages;
 
         if(!$pages)
 
         {
 
             $pages = 1;
 
         }
 
     }   
 
 
 
     if(1 != $pages)
 
     {
		echo '<div id="page">';
		echo '<div class="pagination">';
		//<li class="disabled"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>';
 
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"page\" href='".get_pagenum_link(1)."' aria-label='First'>First</a>";
 
         if($paged > 1 && $showitems < $pages) echo "<a class=\"page\"href='".get_pagenum_link($paged - 1)."' aria-label='Previous'>Prev</a>";
 
 
 
         for ($i=1; $i <= $pages; $i++)
 
         {
 
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
 
             {
 
                 echo ($paged == $i)? "<a class=\"page active\">".$i."</a>":"<a class=\"page\" href='".get_pagenum_link($i)."'>".$i."</a>";
 
             }
 
         }
 
 
 
         if ($paged < $pages && $showitems < $pages) echo "<a class=\"page\"  href=\"".get_pagenum_link($paged + 1)."\">Next</a>";  
 
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class=\"page\" href='\"".get_pagenum_link($pages)."\">Last</a>";
 
         echo "</div></div>";
     }
 
}
?>