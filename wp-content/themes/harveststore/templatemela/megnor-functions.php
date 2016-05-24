<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 * @author         TemplateMela
 * @version        Release: 1.0
 */
add_image_size('gallery-thumbnail', 145, 145, true);
if ( ! isset( $content_width ) )
	$content_width = 1150;
/**  Set Default options : Theme Settings  */
function harvest_set_default_options()
{
	/*  General Settings  */
	add_option("tmoption_logo_image", get_stylesheet_directory_uri()."/images/megnor/logo.png"); // set logo image	
	add_option("tmoption_logo_image_alt",'Harvest'); // set logo image alt
	add_option("tmoption_showsite_description",'no'); // yes/no, control panel		
	add_option("tmoption_contact_email",'mahesh@templatemela.com'); // yes/no, control panel
	add_option("tmoption_control_panel",'no'); // yes/no, control panel	
	add_option("tmoption_responsive",'yes'); // yes/no, responsive		
	add_option("tmoption_background_upload",""); // Default, texture specified image
	add_option("tmoption_texture",'body-bg.png'); // Default, extra texture image
	add_option("tmoption_back_repeat","repeat"); // background repeate
	add_option("tmoption_back_position","top+left"); // background position
	add_option("tmoption_back_attachment","scroll"); // background attachment
	add_option("tmoption_bkg_color","FFFFFF"); // background color
	add_option("tmoption_bodyfont_color","333333"); // body font color
	add_option("tmoption_bodyfont",'Lato'); // Open Sans	
	add_option("tmoption_bodyfont_other",'Arial'); // Arial
	add_option("tmoption_Newsletter_title",'Sign Up For Newsletter'); // Newsletter title
	add_option("tmoption_button_color","FFFFFF"); // button color
	add_option("tmoption_button_hover_color","161B1E"); // button hover color
	add_option("tmoption_revslider_alias",'tm_homeslider');
	
	/*  Top Bar Settings  */
	add_option("tmoption_show_topbar","yes"); // show top bar
	add_option("tmoption_topbar_bkg_color","ffffff"); // topbar_bkg_color	
	add_option("tmoption_topbar_bkg_opacity","0.5"); // Set your background opacity		
	add_option("tmoption_topbar_text_color","333333"); // topbar_text_color
	add_option("tmoption_topbar_link_color","333333"); // topbar_link_color
	add_option("tmoption_topbar_link_hover_color","787878"); // topbar_link_hover_color
	add_option("tmoption_top_menu_bg_color","161B1E"); // Top menu background color
	add_option("tmoption_top_menu_opacity","1"); // Top menu background opacity
	
	add_option("tmoption_top_menu_text_color","ffffff"); // Top menu text color
	add_option("tmoption_top_menu_texthover_color","ffffff"); // Top menu text hover color
	
	add_option("tmoption_show_topbar_contact","yes"); // show contact informatio
	add_option("tmoption_topbar_phone_text","Call :- "); // set contact text
	add_option("tmoption_topbar_phone","00-0000-000"); // set contact number
	add_option("tmoption_custom_banner","no"); // Show Custom Banner
	add_option("tmoption_custom_text1","Free Delivery Worldwide"); // Custom Text 1	
	add_option("tmoption_custom_text2","Free Return For 90 Days"); // Custom Text 2	
	add_option("tmoption_custom_text3","Discount On Order Gift"); // Custom Text 3	
	

	/*  Header Settings  */	
	add_option("tmoption_header_background_upload", get_stylesheet_directory_uri()."/images/megnor/header-bg.png"); // header background image
	add_option("tmoption_header_back_repeat","repeat"); // header background repeate
	add_option("tmoption_header_back_position","top+center"); // header background position
	add_option("tmoption_header_back_attachment","scroll"); // header background attachment	
	add_option("tmoption_header_bkg_color","FFFFFF"); // header background color	
	add_option("tmoption_header_bkg_opacity","1"); // header background opacity	
	add_option("tmoption_navfont",'Open+Sans'); // navigation menu font
	add_option("tmoption_navfont_other",'Arial'); // navigation menu specified font
	/*  Content Settings  */
	add_option("tmoption_h1font",'Lato'); // h1 family google font
	add_option("tmoption_h1font_other",'Arial'); // h1 family specified font
	add_option("tmoption_h1color",'161b1e'); // h1 family font color	 
	add_option("tmoption_h2font",'Lato'); // h2 family google font
	add_option("tmoption_h2font_other",'Arial'); // h2 family specified font
	add_option("tmoption_h2color",'161b1e'); // h2 family font color	
	add_option("tmoption_h3font",'Lato'); // h3 family google font
	add_option("tmoption_h3font_other",'Arial'); // h3 family specified font
	add_option("tmoption_h3color",'161b1e'); // h3 family font color	
	add_option("tmoption_h4font",'Lato'); // h4 family google font
	add_option("tmoption_h4font_other",'Arial'); // h4 family specified font
	add_option("tmoption_h4color",'161b1e'); // h4 family font color	
	add_option("tmoption_h5font",'Lato'); // h5 family google font
	add_option("tmoption_h5font_other",'Arial'); // h5 family specified font 
	add_option("tmoption_h5color",'161b1e'); // h5 family font color	
	add_option("tmoption_h6font",'Lato'); // h6 family google font
	add_option("tmoption_h6font_other",'Arial'); // h6 family specified font 
	add_option("tmoption_h6color",'161B1E'); // h6 family font color	
	add_option("tmoption_link_color","333333"); // link color
	add_option("tmoption_hoverlink_color","787878"); // link hover color
	
	/*  Footer Settings  */	
	add_option("tmoption_footerbkg_color","161B1E"); // footer background color
	add_option("tmoption_footerlink_color","CCCCCC"); // footer link text color
	add_option("tmoption_footerhoverlink_color","ffffff"); // footer link hover text color
	add_option("tmoption_footerfont",'Lato'); // footer google font
	add_option("tmoption_footerfont_other",'Arial'); // footer specified font
	add_option("tmoption_footer_slog",'Templatemela.'); // copyright statement : Theme By templatemela
	add_option("tmoption_footer_link",'#'); // copyright statement : Theme By templatemela
	
	/* Shop page settings */	
	add_option("tmoption_shop_items","9"); 
	add_option("tmoption_shop_items_per_row","3"); 
	add_option("tmoption_related_items","9"); 
	add_option("tmoption_upsells_items","9"); 
	add_option("tmoption_crosssell_items","9"); 
	add_option("tmoption_single_sidebar","Yes");	 
		
}
add_action('init', 'harvest_set_default_options');
function harvest_get_logo() {
	if (trim(get_option('tmoption_logo_image_alt')) != '') $logo_alt = get_option('tmoption_logo_image_alt') ; else $logo_alt = esc_attr(get_bloginfo('name', 'display' ));
	if (trim(get_option('tmoption_logo_image')) != ''){ echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src="'.get_option('tmoption_logo_image').'" />';}
	           else{echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src=" '.get_template_directory_uri(). '/images/megnor/logo.png">';}
}
function harvest_get_sort_column() {
	$sort_column=''; 
	if(trim(get_option('tmoption_navigation_type'))=='categories'){
		if( trim(get_option('tmoption_navigation_sort_column')) =='id' || trim(get_option('tmoption_navigation_sort_column'))=='menu_order')
			$sort_column = 'ID';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='name' || trim(get_option('tmoption_navigation_sort_column'))=='post_title')
			$sort_column = 'name';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='count')
			$sort_column = 'count';
	}
	elseif(trim(get_option('tmoption_navigation_type'))=='pages'){
		if(trim(get_option('tmoption_navigation_sort_column'))=='id')
			$sort_column = 'ID';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='menu_order')
			$sort_column = 'menu_order';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='post_title' || trim(get_option('tmoption_navigation_sort_column'))=='name')
			$sort_column = 'post_title';
	}
	return $sort_column;
}
function harvest_get_sort_order() {
	$sort_order='';
	if(trim(get_option('tmoption_navigation_sort_order'))=='asc')
		return 'asc';
	if(trim(get_option('tmoption_navigation_sort_order'))=='desc')
		return 'desc';
	return $sort_order;
}
function harvest_get_all_categories() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$categories = wp_get_post_categories( $postid );
	$cats = ', ';
	foreach($categories as $c){
		$cat = get_category( $c );	
		$cats .= $cat->name. ',';
	}
	$cats=strtolower(rtrim($cats, " ,"));
	return $cats;
}
function harvest_get_all_tags() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$alltags = wp_get_post_tags( $postid );
	$tags = ', ';
	foreach($alltags as $tag){
		$tags .= $tag->name. ',';
	}
	$tags=strtolower(rtrim($tags, " ,"));
	return $tags;
}

//Load responsive.css file in the header
function harvest_responsive()
{
if(get_option('tmoption_responsive') == 'yes'):
	wp_enqueue_style('harvest_responsive', get_stylesheet_directory_uri() . '/responsive.css');
endif;
}
add_action('wp_enqueue_scripts','harvest_responsive');

add_action( "admin_enqueue_scripts", 'harvest_admin_scripts');
add_action( "admin_enqueue_scripts", 'harvest_admin_styles');
add_action( "admin_enqueue_scripts", 'harvest_admin_metabox_script');
add_action( "admin_enqueue_scripts", 'harvest_admin_metabox_styles');
function harvest_admin_scripts() {
	//Scripts	
	wp_enqueue_script( 'harvest_pscript_admin', get_template_directory_uri() . '/js/megnor/admin/pscript_admin.js');
	wp_enqueue_script( 'harvest_jscolor', get_template_directory_uri() . '/js/megnor/admin/jscolor/jscolor.js');
	wp_enqueue_script( 'harvest_jquery_easytabs_min', get_template_directory_uri() . '/js/megnor/admin/jquery.easytabs.min.js');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_template_directory_uri() . '/js/megnor/admin/custom.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');	
}
function harvest_admin_styles() { 
	//Styles
	wp_enqueue_style('tm_admin', get_template_directory_uri() . '/css/megnor/admin/tm_admin.css');
	wp_enqueue_style('tab', get_template_directory_uri() . '/css/megnor/admin/tab.css');
	wp_enqueue_style('thickbox');
}
function harvest_admin_metabox_script() { 
	//Scripts
	wp_enqueue_script( 'harvest_metabox_script', get_template_directory_uri() . '/js/megnor/admin/tm_metabox_script.js' );
}
function harvest_admin_metabox_styles() { 
	//Styles
	wp_enqueue_style('harvest_metabox_style', get_template_directory_uri() . '/css/megnor/admin/tm_metabox_style.css');
}

function harvest_theme_settings_page() {
	$locale_file = get_template_part('templatemela/admin/theme-setting');
	if (is_readable( $locale_file ))
		get_template_part( 'templatemela/admin/theme-setting');
}
function harvest_hook_manage_page() {
	$locale_file = get_template_part('templatemela/admin/theme-hook') ;
	if (is_readable( $locale_file ))
		get_template_part('templatemela/admin/theme-setting');
}
function harvest_add_admin_menu_separator($position) {
  global $menu;
  $index = 0;
  foreach($menu as $offset => $section) {
    if (substr($section[2],0,9)=='separator')
      $index++;
    if ($offset>=$position) {
      $menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
      break;
    }
  }
  ksort($menu);
}
if ( ! function_exists( 'harvest_admin_header_style' ) ) :
	function harvest_admin_header_style() {}
endif;
/**
 * Sets the post excerpt length to 40 characters.
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 * @return int
 */
function harvest_excerpt_length( $length ) {
	return 200;
}
remove_filter( 'excerpt_length', 'harvest_excerpt_length' ); 
add_filter( 'excerpt_length', 'harvest_excerpt_length' );
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
/**
 * Returns a "Continue Reading" link for excerpts
 * @return string "Continue Reading" link
 */
function harvest_continue_reading_link() {
	return ' <a class="read-more-link" href="'. get_permalink() . '">' . esc_html__( 'Read More', 'harvest' ) . '</a>';
}
add_filter( 'excerpt_length', 'harvest_excerpt_length' );
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and harvest_continue_reading_link().
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 * @return string An ellipsis
 */
function harvest_auto_excerpt_more( $more ) {
	return  '&hellip;' .harvest_continue_reading_link();
}
add_filter( 'excerpt_more', 'harvest_auto_excerpt_more' );
/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function harvest_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output = '&hellip;'. harvest_continue_reading_link();
	}
	return $output;
}
/**
 * Deprecated way to remove inline styles printed when the gallery shortcode is used.
 * This function is no longer needed or used. Use the use_default_gallery_style
 * filter instead, as seen above.
 * @deprecated Deprecated in TemplateMela for WordPress 3.1
 * @return string The gallery style filter, with the styles themselves removed.
 */
function harvest_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
// Backwards compatibility with WordPress 3.0.
if ( version_compare( $GLOBALS['wp_version'], '3.3.2', '<' ) )
	add_filter( 'gallery_style', 'harvest_remove_gallery_css' );
/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function harvest_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;
	return esc_url_raw( $matches[1] );
}
function harvest_get_widget($location = '') {
	if ( is_active_sidebar($location) ) { 
		dynamic_sidebar($location); 
	}
}
if (version_compare( $GLOBALS['wp_version'], '3.3', '>=' )) 
	get_template_part('templatemela/widgets');	
/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using TemplateMela in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default TemplateMela styling.
 *
 */
function harvest_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'harvest_remove_recent_comments_style' );
function harvest_get_pagination($range = 4){  
	// $paged - number of the current page  
	global $paged, $wp_query, $max_page;  
	// How much pages do we have?  
	if ( !$max_page ) {  
		$max_page = $wp_query->max_num_pages;  
	}  
	// We need the pagination only if there are more than 1 page  
	if($max_page > 1){  
		if(!$paged){  
			$paged = 1;  
		}  
		// On the first page, don't put the First page link  
		if($paged != 1){  
			echo '<a class="first" href=" '. get_pagenum_link(1) .' "> << </a>';  
		}
		// To the previous page  
		previous_posts_link(' < ');
		// We need the sliding effect only if there are more pages than is the sliding range  
		if($max_page > $range){  
		 // When closer to the beginning  
			 if($paged < $range){  
			   for($i = 1; $i <= ($range + 1); $i++){  
			   	 if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
			 // When closer to the end  
			 elseif($paged >= ($max_page - ceil(($range/2)))){  
			   for($i = $max_page - $range; $i <= $max_page; $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";   
			   }  
			 }  
			 // Somewhere in the middle  
			 elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){  
			   for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
		}  
		// Less pages than the range, no sliding effect needed  
		else{  
		 for($i = 1; $i <= $max_page; $i++){  
		  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
		   echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
		 }  
		}  
		// Next page  
		next_posts_link(' > ');  
		// On the last page, don't put the Last page link  
		if($paged != $max_page){  
		 echo '<a class="last" href=" '. get_pagenum_link($max_page) .' "> >> </a>';  
		}  
	}  
}  	
function harvest_posts_next_link_attributes($html){
	$html = str_replace('<a','<a class="next-post"',$html);
	return $html;
	}
	function harvest_posts_previous_link_attributes($html){
	$html = str_replace('<a','<a class="prev-post"',$html);
	return $html;
	}
add_filter('next_post_link','harvest_posts_next_link_attributes',10,1);
add_filter('previous_post_link','harvest_posts_previous_link_attributes',10,1);
function harvest_get_first_post_images($post_ID){
	global $post, $posts;
	$first_img_src = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if (isset($matches[1][0]))
	$first_img_src = $matches[1][0];
	if(empty($first_img_src)){ 
		return 0;
	}
	return $first_img_src;

}
function harvest_print_images_thumb($src,$alttext, $width=200,$height=200,$align='left')
{	
	$src = mr_image_resize($src, $width, $height, true, $align, false);
	if( empty ( $src ) || $src == 'image_not_specified' ):
		$src = get_template_directory_uri()."/images/megnor/placeholder.png";
		$src = mr_image_resize($src, $width, $height, true, $align, false);
	endif;
	$return = '';
	$return .= '<img src="'.$src.'"';
	$return .= " title='$alttext' alt='$alttext' width='$width' height='$height' />";	
	echo balanceTags($return);
}
function harvest_excerpt($limit) 
{
      $excerpt = explode(' ', harvest_strip_images(strip_tags(get_the_excerpt())), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'&nbsp;.<div class="read-more"><a class="read-more-link" href="'.get_permalink().'">Read More</a></div>';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}
function harvest_blog_post_excerpt($limit) 
{
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'&nbsp;...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}
function harvest_portfolio_excerpt($limit) 
{
    $contents = substr(harvest_strip_images(strip_tags(get_the_excerpt())),0,$limit);	
	$excerpt = $contents; if (strlen($contents) >= $limit){ $excerpt .= '&hellip;'; }
  	return $excerpt;
}
if ( ! function_exists( 'tm_go_top' ) ) :
function tm_go_top(){ ?>
<div class="backtotop"><a id="to_top" href="#"></a></div>
<?php } 
endif;
/* Favi Icon fucntion */
if ( ! function_exists( 'harvest_site_icon' ) ) {
	function harvest_site_icon() {
		if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
			echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri() .'/templatemela/favicon.ico" />';
		}
	}
}
add_action('wp_head','harvest_site_icon');
add_action('admin_head','harvest_site_icon');
add_action('wp_head','harvest_custom_css',15);

if ( ! function_exists( 'harvest_strip_images' ) ) :
function harvest_strip_images($content){	
   $content = preg_replace('/<img[^>]+./','',$content);
   return preg_replace('/<\/?a[^>]*>/','',$content);
}
endif;
/**
 * Remove inline styles printed when the gallery shortcode is used.
 * Galleries are styled by the theme in TemplateMela's style.css. This is just
 * a simple filter call that tells WordPress to not use the default styles.
 */
add_filter( 'use_default_gallery_style', '__return_false' );
// Control Panel Tags Function Includes //
get_template_part('templatemela/controlpanel/tm_control_panel'); 
get_template_part('templatemela/admin/hook-functions'); 
get_template_part('templatemela/example');  
get_template_part('mr-image-resize');
//Adds woocommerce functions if active
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	get_template_part('templatemela/woocommerce-functions');
endif;

/**
 * Enqueue Templatemela Fonts
 */
function harvest_load_fonts() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lato, translate this to 'off'. Do not translate
    * into your own language.
    */
    $lato = _x( 'on', 'Lato font: on or off', 'harvest' );   
	
	/* Translators: If there are characters in your language that are not
    * supported by Anton, translate this to 'off'. Do not translate
    * into your own language.
    */
    $anton = _x( 'on', 'Anton font: on or off', 'harvest' );				
 
    if ( 'off' !== $lato || 'off' !== $anton ) {
        $font_families = array();
 
        if ( 'off' !== $lato ) {
            $font_families[] = 'Lato:400,700,900';			
        }       
		if ( 'off' !== $anton ) {
            $font_families[] = 'Anton';						
        }		
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    } 
    return esc_url_raw( $fonts_url );
}
/*
Enqueue scripts and styles.
*/
function harvest_google_fonts() {
    wp_enqueue_style( 'harvest_google_fonts', harvest_load_fonts(), array(), '1.0.0' );
}
add_action( 'get_header', 'harvest_google_fonts' );


/**
 * Enqueue Templatemela Styles
 */
if ( ! function_exists( 'harvest_load_styles' ) ) :
function harvest_load_styles() {
	wp_enqueue_style('harvest_css_isotope', get_template_directory_uri() . '/css/isotop-port.css');
	wp_enqueue_style('harvest_custom', get_template_directory_uri() . '/css/megnor/custom.css');
	wp_enqueue_style('harvest_owl.carousel', get_template_directory_uri() . '/css/megnor/owl.carousel.css');
	wp_enqueue_style('harvest_owl.transitions', get_template_directory_uri() . '/css/megnor/owl.transitions.css');		
	wp_enqueue_style('harvest_shadowbox', get_template_directory_uri() . '/css/megnor/shadowbox.css');
	wp_enqueue_style('harvest_shortcode_style', get_template_directory_uri() . '/css/megnor/shortcode_style.css');
	wp_enqueue_style('harvest_animate_min', get_template_directory_uri() . '/css/megnor/animate.min.css');	
	//Adds front end control panel css
	if(get_option('tmoption_control_panel') == 'yes'):
		wp_enqueue_style('harvest__style', get_template_directory_uri() . '/css/megnor/tm-style.css');
	endif; 
	//Adds wocommerce style
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
		wp_enqueue_style('harvest_woocommerce_css', get_template_directory_uri() . '/css/megnor/woocommerce.css');
	endif;
}
endif;
add_action('get_header', 'harvest_load_styles');
/**
 * Enqueue Templatemela Scripts
 */
if ( ! function_exists( 'harvest_load_scripts' ) ) :
function harvest_load_scripts() {	
		wp_enqueue_script( 'harvest_jquery_jqtransform', get_template_directory_uri() . '/js/megnor/jquery.jqtransform.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_jqtransform_script', get_template_directory_uri() . '/js/megnor/jquery.jqtransform.script.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_custom_script', get_template_directory_uri() . '/js/megnor/jquery.custom.min.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_megnor', get_template_directory_uri() . '/js/megnor/megnor.min.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_carousel', get_template_directory_uri() . '/js/megnor/carousel.min.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_inview', get_template_directory_uri() . '/js/megnor/jquery.inview.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_easypiechart', get_template_directory_uri() . '/js/megnor/jquery.easypiechart.min.js', array(), '', false);
		wp_enqueue_script( 'harvest_jquery_custom', get_template_directory_uri() . '/js/megnor/custom.js', array(), '', false);
		wp_enqueue_script( 'harvest_jquery_owlcarousel', get_template_directory_uri() . '/js/megnor/owl.carousel.min.js', array(), '', false);
		wp_enqueue_script( 'harvest_jquery_formalize', get_template_directory_uri() . '/js/megnor/jquery.formalize.min.js', array(), '', false);
		wp_enqueue_script( 'harvest_jquery_respond', get_template_directory_uri() . '/js/megnor/respond.min.js', array(), '', false);
		wp_enqueue_script( 'harvest_jquery_validate', get_template_directory_uri() . '/js/megnor/jquery.validate.js', array(), '', false);
		wp_enqueue_script( 'harvest_jquery_shadowbox', get_template_directory_uri() . '/js/megnor/shadowbox.js', array(), '', false);		
		wp_enqueue_script( 'harvest_jquery_waypoints', get_template_directory_uri() . '/js/megnor/waypoints.min.js', array(), '', false);
		wp_enqueue_script( 'harvest_jquery_megamenu', get_template_directory_uri() . '/js/megnor/jquery.megamenu.js', array(), '', false);	
		wp_enqueue_script( 'harvest_easyResponsiveTabs', get_template_directory_uri() . '/js/megnor/easyResponsiveTabs.js', array(), '', true);
		wp_enqueue_script( 'harvest_jtree_min', get_template_directory_uri() . '/js/megnor/jquery.treeview.js', array(), '', true);	
		wp_enqueue_script( 'harvest_jquery_scroll-min', get_template_directory_uri() . '/js/megnor/jquery.jscroll.min.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_parallex', get_template_directory_uri() . '/js/megnor/parallex.js', array(), '', true);
		wp_enqueue_script( 'harvest_jquery_bxslider', get_template_directory_uri() . '/js/megnor/jquery.bxslider.js', array(), '', true);	
		wp_enqueue_script( 'harvest_jquery_countUp', get_template_directory_uri() . '/js/megnor/countUp.js', array(), '', true);	
	?>
<!--[if lt IE 9]>
	<?php wp_enqueue_script( 'harvest_html5', get_template_directory_uri() . '/js/html5.js', array(), '', true); ?>
	<![endif]-->
<?php }
endif;
add_action( 'wp_enqueue_scripts', 'harvest_load_scripts' );
/**
 * Enqueue Templatemela Control Panel Scripts
 */
if ( ! function_exists( 'harvest_load_controlpanel_script' ) ) :
function harvest_load_controlpanel_script() {		
	if(get_option('tmoption_control_panel') == 'yes') : ?>
		<script type="text/javascript">
			var tm_theme_path = "<?php echo get_template_directory_uri() ?>";			
		</script>
	<?php
        wp_enqueue_script( 'jquery_colorpicker', get_template_directory_uri() . '/js/megnor/colorpicker/colorpicker.js', array(), '', true);
		wp_enqueue_script( 'jquery_cookie', get_template_directory_uri() . '/js/megnor/colorpicker/jquery.cookie.js', array(), '', true);
		wp_enqueue_script( 'jquery_pscript', get_template_directory_uri() . '/js/megnor/colorpicker/pscript.js', array(), '', true);	
	endif;
}
endif;
add_action( 'wp_enqueue_scripts', 'harvest_load_controlpanel_script' );
if ( ! function_exists( 'harvest_breadcrumbs' ) ) :
function harvest_breadcrumbs() { ?>
<div class="breadcrumbs">
  <?php if ( function_exists('yoast_breadcrumb') ) { ?>
  <?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
  <?php } ?>
</div>
<?php }
endif;
function harvest_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="search-form" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . esc_html__( 'Search for:', 'harvest' ) . '</label>
    <input class="search-field" type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input class="search-submit" type="submit" id="searchsubmit" value="'. esc_html__( 'Go', 'harvest' ) .'" />
    </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'harvest_search_form' );
if ( ! function_exists( 'harvest_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own harvest_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function harvest_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
  <p>
    <?php esc_html_e( 'Pingback:', 'harvest' ); ?>
    <?php comment_author_link(); ?>
    <?php edit_comment_link( esc_html__( '(Edit)', 'harvest' ), '<span class="edit-link">', '</span>' ); ?>
  </p>
</li>
<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
  <div id="comment-<?php comment_ID(); ?>" class="comment-body">
    <div class="alignleft"> <?php echo get_avatar( $comment, 48 ); ?> </div>
    <div class="author-content">
      <h6><?php echo balanceTags($comment->comment_author); ?></h6>
      <?php edit_comment_link( esc_html__( 'Edit', 'harvest' ), ' ' ); ?>
      <div class="clearfix"></div>
      <abbr class="published" title=""><?php printf( esc_html__( '%1$s at %2$s', 'harvest' ), get_comment_date(),  get_comment_time() ); ?></abbr> </div>
    <div class="comment-content">
      <?php comment_text(); ?>
      <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
      </div>
    </div>
    <!--<div class="comment-author vcard">
			<?php //echo get_avatar( $comment, 40 ); ?>
			<?php //printf( esc_html__( '%s <span class="says">says:</span>', 'harvest' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
    <?php if ( $comment->comment_approved == '0' ) : ?>
    <em class="comment-awaiting-moderation">
    <?php esc_html_e( 'Your comment is awaiting moderation.', 'harvest' ); ?>
    </em> <br />
    <?php endif; ?>
  </div>
  <!-- #comment-##  -->
</li>
<?php
		break;
	endswitch; // end comment_type check
}
endif;
if ( ! function_exists( 'harvest_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own harvest_entry_meta() to override in a child theme.
 *
 * @since Templatemela 1.0
 *
 * @return void
 */
function harvest_entry_meta() {
}
endif;
if ( ! function_exists( 'harvest_get_topbar_contact' ) ) :
function harvest_get_topbar_contact() {
	
	$tmoption_topbar_phone = get_option('tmoption_topbar_phone');
	$tmoption_topbar_phone_text = get_option('tmoption_topbar_phone_text');
	
	
	$output = '';
	$output .= '<div class="topbar-contact">';	
		if (!empty($tmoption_topbar_phone)) :
		$output .= '<div class="phone-content content"><span class="cal-us">'.$tmoption_topbar_phone_text.'</span><span class="contact-phone">'.$tmoption_topbar_phone.'</span></div>';							
		endif;
	$output .= '</div>';
	echo balanceTags($output);
}
endif;
if ( ! function_exists( 'harvest_get_topbar_banner' ) ) :
function harvest_get_topbar_banner() {	
	$tmoption_custom_text1 = get_option('tmoption_custom_text1');
	
	$tmoption_custom_text2 = get_option('tmoption_custom_text2');
	
	$tmoption_custom_text3 = get_option('tmoption_custom_text3');
	
	$output = '';
	$output .= '<div class="top-banner-inner container">';
	$output .= '<ul class="top-banner-container">';
		if (!empty($tmoption_custom_text1)):
		$output .= '<li class="content1 content"><div class="content-inner"><i class="fa fa-money"></i><div class="cms-title">'.$tmoption_custom_text1.'</div></div></li>';	
		endif;
		if (!empty($tmoption_custom_text2)):
		$output .= '<li class="content2 content"><div class="content-inner"><i class="fa fa-rocket"></i><div class="cms-title">'.$tmoption_custom_text2.'</div></div></li>';	
		endif;
		if (!empty($tmoption_custom_text3)):
		$output .= '<li class="content3 content"><div class="content-inner"><i class="fa fa-usd"></i><div class="cms-title">'.$tmoption_custom_text3.'</div></div></li>';				
		endif;	
	$output .= '</ul>';	
	$output .= '</div>';
	echo balanceTags($output);
}
endif;
if ( ! function_exists( 'harvest_get_topbar_social' ) ) :
function harvest_get_topbar_social() {
	$tmoption_topbar_twitter = get_option('tmoption_topbar_twitter');
	$tmoption_topbar_facebook = get_option('tmoption_topbar_facebook');
	$tmoption_topbar_google_plus = get_option('tmoption_topbar_google_plus');
	$tmoption_topbar_linkedin = get_option('tmoption_topbar_linkedin');
	$tmoption_topbar_youtube = get_option('tmoption_topbar_youtube');
	$tmoption_topbar_rss = get_option('tmoption_topbar_rss');
	$tmoption_topbar_pinterest = get_option('tmoption_topbar_pinterest');
	$tmoption_topbar_skype = get_option('tmoption_topbar_skype');
	$output = '';
	$output .= '<div class="topbar-social">';
		if (!empty($tmoption_topbar_twitter))
		$output .= '<div class="social-twitter content"><a href="'.$tmoption_topbar_twitter.'" target="_Blank"><i class="fa fa-twitter"></i></a></div>';
		if (!empty($tmoption_topbar_facebook))
		$output .= '<div class="social-facebook content"><a href="'.$tmoption_topbar_facebook.'" target="_Blank"><i class="fa fa-facebook"></i></a></div>';
		if (!empty($tmoption_topbar_google_plus))
		$output .= '<div class="social-google-plus content"><a href="'.$tmoption_topbar_google_plus.'" target="_Blank"><i class="fa fa-google-plus"></i></a></div>';
		if (!empty($tmoption_topbar_linkedin))
		$output .= '<div class="social-linkedin content"><a href="'.$tmoption_topbar_linkedin.'" target="_Blank"><i class="fa fa-linkedin"></i></a></div>';
		if (!empty($tmoption_topbar_youtube))
		$output .= '<div class="social-youtube content"><a href="'.$tmoption_topbar_youtube.'" target="_Blank"><i class="fa fa-youtube"></i></a></div>';
		if (!empty($tmoption_topbar_rss))
		$output .= '<div class="social-rss content"><a href="'.$tmoption_topbar_rss.'" target="_Blank"><i class="fa fa-rss"></i></a></div>';
		if (!empty($tmoption_topbar_pinterest))
		$output .= '<div class="social-pinterest content"><a href="'.$tmoption_topbar_pinterest.'" target="_Blank"><i class="fa fa-pinterest"></i></a></div>';
		if (!empty($tmoption_topbar_skype))
		$output .= '<div class="social-skype content"><a href="'.$tmoption_topbar_skype.'" target="_Blank"><i class="fa fa-skype"></i></a></div>';
	$output .= '</div>';
	echo balanceTags($output);	
}
endif;
if ( ! function_exists( 'harvest_sticky_post' ) ) :
function harvest_sticky_post() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . esc_html__( 'Sticky', 'harvest' ) . '</span>';
}
endif;
if ( ! function_exists( 'harvest_categories_links' ) ) :
function harvest_categories_links() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( esc_html__( ', ', 'harvest' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links"><i class="fa fa-folder-o"></i>' . $categories_list . '</span>';
	}
}
endif;
if ( ! function_exists( 'harvest_tags_links' ) ) :
function harvest_tags_links() {
	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', esc_html__( ', ', 'harvest' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links"><i class="fa fa-tags"></i>' . $tag_list . '</span>';
	}
}
endif;
if ( ! function_exists( 'harvest_author_link' ) ) :
function harvest_author_link() {
	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( esc_html__( 'View all posts by %s', 'harvest' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;
if ( ! function_exists( 'harvest_comments_link' ) ) :
function harvest_comments_link() {
	//comments open
	if ( comments_open() && ! is_single() ) : ?>
<span class="comments-link"> <i class="fa fa-comment"></i>
<?php comments_popup_link( esc_html__( 'Leave a Comment', 'harvest' ), esc_html__( '1 Comment', 'harvest' ), esc_html__( '% Comments', 'harvest' ) ); ?>
</span>
<?php endif; 
}
endif;
if ( ! function_exists( 'harvest_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own harvest_entry_date() to override in a child theme.
 *
 * @since Templatemela 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function harvest_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'harvest' );
	else
		$format_prefix = '%2$s';
	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( esc_html__( 'Permalink to %s', 'harvest' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);
	if ( $echo )
		echo balanceTags($date);
	return $date;
}
endif;
if ( ! function_exists( 'harvest_post_entry_date' ) ) :
function harvest_post_entry_date( ) {
	$date = get_the_date();	
	$day = get_the_date('j'); 
	$month = get_the_date('M');
	$year = get_the_date('y');  
	$date = '<div class="entry-date"><div class="day"><a href="'.get_permalink().'">'.$day.'-'.$month.'-'.$year.'</a></div><span class="icon"></span></div>';
	echo balanceTags($date);
	return $date;
}
endif;
if ( ! function_exists( 'harvest_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Templatemela 1.0
 *
 * @return void
 */
function harvest_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since Templatemela 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'templatemela_attachment_size', array( 1000, 1000 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();
	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );
	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}
		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );
		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}
	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;
if ( ! function_exists( 'harvest_posts_short_description' ) ) :
function harvest_posts_short_description() {
	$harvest_posts_short_description = get_post_meta(get_the_ID(), 'harvest_posts_short_description', true);
	if(empty($harvest_posts_short_description))
		$harvest_posts_short_description = harvest_excerpt(60);
	return $harvest_posts_short_description;
}
endif;
if ( ! function_exists( 'harvest_posts_show_thumbnail' ) ) :
function harvest_posts_show_thumbnail() {
	$harvest_posts_show_thumbnail = get_post_meta(get_the_ID(), 'harvest_posts_show_thumbnail', true);
	if(empty($harvest_posts_show_thumbnail))
		$harvest_posts_show_thumbnail = '';
	return $harvest_posts_show_thumbnail;
}
endif;
if ( ! function_exists( 'tm_page_layout' ) ) :
function tm_page_layout() {
	$page_layout_class = '';
	global $wp_query;	
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	if(is_shop()):
		$page_id = woocommerce_get_page_id('shop');
	else:
		$page_id = $wp_query->get_queried_object_id();
	endif;
	}else{
		$page_id = $wp_query->get_queried_object_id();
	}
	$tm_page_layout = get_post_meta($page_id, 'tm_page_layout', true);
	if(empty($tm_page_layout))
		$tm_page_layout = '';
		
	if($tm_page_layout == "box"):
		$page_layout_class = "box-page";
	elseif($tm_page_layout == "wide"):
		$page_layout_class = "wide-page";
	endif;
	return $page_layout_class;
}
endif;

if ( ! function_exists( 'tm_sidebar_position' ) ) :
function tm_sidebar_position() {
  $sidebar_class = '';
  global $wp_query;  
  if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
  if(is_shop()):
    $page_id = woocommerce_get_page_id('shop');
  else:
    $page_id = $wp_query->get_queried_object_id();
  endif;
  }else{
    $page_id = $wp_query->get_queried_object_id();
  }
  $tm_sidebar_position = get_post_meta($page_id, 'tm_sidebar_position', true);
  if(empty($tm_sidebar_position))
    $tm_sidebar_position = '';
    
  if($tm_sidebar_position == "left"):
    $sidebar_class = "left-sidebar";
  elseif($tm_sidebar_position == "right"):
    $sidebar_class = "right-sidebar";
  elseif($tm_sidebar_position == "disabled"):
    $sidebar_class = "full-width";
  endif;
  return $sidebar_class;
}
endif;

if ( ! function_exists( 'harvest_blog_box_display' ) ) :
function harvest_blog_box_display() {
	$main_container = '';
	$harvest_blog_box_display = get_post_meta(get_the_ID(), 'harvest_blog_box_display', true);
	if(empty($harvest_blog_box_display))
		$harvest_blog_box_display = '';
	if($harvest_blog_box_display == 'masonry'):
		$main_container = 'masonry';
	elseif($harvest_blog_box_display == 'grid'):
		$main_container = 'grid';
	endif;
	return $main_container;
}
endif;
if ( ! function_exists( 'harvest_blog_box_columns_class' ) ) :
function harvest_blog_box_columns_class() {
	$columns_class = '';
	$tm_blog_box_columns = get_post_meta(get_the_ID(), 'tm_blog_box_columns', true);
	if(empty($tm_blog_box_columns))
		$tm_blog_box_columns = '';
	if($tm_blog_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_blog_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_blog_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'harvest_blog_box_columns_number' ) ) :
function harvest_blog_box_columns_number() {
	$columns_number = '';
	$tm_blog_box_columns = get_post_meta(get_the_ID(), 'tm_blog_box_columns', true);
	if(empty($tm_blog_box_columns))
		$tm_blog_box_columns = '';
	if($tm_blog_box_columns == 'two'):
		$columns_number = '2';
	elseif($tm_blog_box_columns == 'three'):
		$columns_number = '3';
	elseif($tm_blog_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'harvest_blog_box_posts_per_page' ) ) :
function harvest_blog_box_posts_per_page() {
	$harvest_blog_box_posts_per_page = get_post_meta(get_the_ID(), 'harvest_blog_box_posts_per_page', true);
	if(empty($harvest_blog_box_posts_per_page))
		$harvest_blog_box_posts_per_page = '';
	return $harvest_blog_box_posts_per_page;
}
endif;
if ( ! function_exists( 'harvest_blog_list_posts_per_page' ) ) :
function harvest_blog_list_posts_per_page() {
	$harvest_blog_list_posts_per_page = get_post_meta(get_the_ID(), 'harvest_blog_list_posts_per_page', true);
	if(empty($harvest_blog_list_posts_per_page))
		$harvest_blog_list_posts_per_page = '';
	return $harvest_blog_list_posts_per_page;
}
endif;
if ( ! function_exists( 'harvest_blog_filter_columns_class' ) ) :
function harvest_blog_filter_columns_class() {
	$columns_class = '';
	$tm_blog_filter_columns = get_post_meta(get_the_ID(), 'tm_blog_filter_columns', true);
	if(empty($tm_blog_filter_columns))
		$tm_blog_filter_columns = '';
	if($tm_blog_filter_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_blog_filter_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_blog_filter_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'harvest_blog_filter_columns_number' ) ) :
function harvest_blog_filter_columns_number() {
	$columns_number = '';
	$tm_blog_filter_columns = get_post_meta(get_the_ID(), 'tm_blog_filter_columns', true);
	if(empty($tm_blog_filter_columns))
		$tm_blog_filter_columns = '';
	if($tm_blog_filter_columns == 'two'):
		$columns_number = '2';
	elseif($tm_blog_filter_columns == 'three'):
		$columns_number = '3';
	elseif($tm_blog_filter_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'harvest_testimonial_box_posts_per_page' ) ) :
function harvest_testimonial_box_posts_per_page() {
	$harvest_testimonial_box_posts_per_page = get_post_meta(get_the_ID(), 'harvest_testimonial_box_posts_per_page', true);
	if(empty($harvest_testimonial_box_posts_per_page))
		$harvest_testimonial_box_posts_per_page = '';
	return $harvest_testimonial_box_posts_per_page;
}
endif;
if ( ! function_exists( 'harvest_testimonial_list_posts_per_page' ) ) :
function harvest_testimonial_list_posts_per_page() {
	$harvest_testimonial_list_posts_per_page = get_post_meta(get_the_ID(), 'harvest_testimonial_list_posts_per_page', true);
	if(empty($harvest_testimonial_list_posts_per_page))
		$harvest_testimonial_list_posts_per_page = '';
	return $harvest_testimonial_list_posts_per_page;
}
endif;
if ( ! function_exists( 'harvest_testimonial_box_columns_class' ) ) :
function harvest_testimonial_box_columns_class() {
	$columns_class = '';
	$tm_testimonial_box_columns = get_post_meta(get_the_ID(), 'tm_testimonial_box_columns', true);
	if(empty($tm_testimonial_box_columns))
		$tm_testimonial_box_columns = '';
	if($tm_testimonial_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_testimonial_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_testimonial_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'harvest_testimonial_box_columns_number' ) ) :
function harvest_testimonial_box_columns_number() {
	$columns_number = '';
	$tm_testimonial_box_columns = get_post_meta(get_the_ID(), 'tm_testimonial_box_columns', true);
	if(empty($tm_testimonial_box_columns))
		$tm_testimonial_box_columns = '';
	if($tm_testimonial_box_columns == 'two'):
		$columns_number = '2';
	elseif($tm_testimonial_box_columns == 'three'):
		$columns_number = '3';
	elseif($tm_testimonial_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'harvest_staff_box_posts_per_page' ) ) :
function harvest_staff_box_posts_per_page() {
	$harvest_staff_box_posts_per_page = get_post_meta(get_the_ID(), 'harvest_staff_box_posts_per_page', true);
	if(empty($harvest_staff_box_posts_per_page))
		$harvest_staff_box_posts_per_page = '';
	return $harvest_staff_box_posts_per_page;
}
endif;
if ( ! function_exists( 'harvest_staff_list_posts_per_page' ) ) :
function harvest_staff_list_posts_per_page() {
	$harvest_staff_list_posts_per_page = get_post_meta(get_the_ID(), 'harvest_staff_list_posts_per_page', true);
	if(empty($harvest_staff_list_posts_per_page))
		$harvest_staff_list_posts_per_page = '';
	return $harvest_staff_list_posts_per_page;
}
endif;
if ( ! function_exists( 'harvest_staff_box_columns_class' ) ) :
function harvest_staff_box_columns_class() {
	$columns_class = '';
	$tm_staff_box_columns = get_post_meta(get_the_ID(), 'tm_staff_box_columns', true);
	if(empty($tm_staff_box_columns))
		$tm_staff_box_columns = '';
	if($tm_staff_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_staff_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_staff_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	$columns_class;
	return $columns_class;
}
endif;
if ( ! function_exists( 'harvest_staff_box_columns_number' ) ) :
function harvest_staff_box_columns_number() {
	$columns_number = '';
	$tm_staff_box_columns = get_post_meta(get_the_ID(), 'tm_staff_box_columns', true);
	if(empty($tm_staff_box_columns))
		$tm_staff_box_columns = '';
	if($tm_staff_box_columns == 'two'):
		$columns_number = '2';
	elseif($tm_staff_box_columns == 'three'):
		$columns_number = '3';
	elseif($tm_staff_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'tm_content_position' ) ) :
function tm_content_position() {
	$tm_content_position = get_post_meta(get_the_ID(), 'tm_content_position', true);
	if(empty($tm_content_position))
		$tm_content_position = '';
	return $tm_content_position;
}
endif;
if ( ! function_exists( 'harvest_is_related_posts' ) ) :
function harvest_is_related_posts() {
	$harvest_is_related_posts = get_post_meta(get_the_ID(), 'tm_posts_show_related_posts', true);
	if(empty($harvest_is_related_posts))
		$harvest_is_related_posts = '';
	return $harvest_is_related_posts;
}
endif;
if ( ! function_exists( 'harvest_is_author_info' ) ) :
function harvest_is_author_info() {
	$harvest_is_author_info = get_post_meta(get_the_ID(), 'tm_posts_show_author_info', true);
	if(empty($harvest_is_author_info))
		$harvest_is_author_info = '';
	return $harvest_is_author_info;
}
endif;
if ( ! function_exists( 'harvest_shortcode_paging_nav' ) ) :
function harvest_shortcode_paging_nav() {
	$output ='';
	if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );
	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}
	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' =>  wp_kses( __( '<i class="fa fa-angle-left"></i>', 'harvest' ),harvest_allowed_html()),
		'next_text' =>  wp_kses( __( '<i class="fa fa-angle-right"></i>', 'harvest' ),harvest_allowed_html()),
	) );
	if ( $links ) :
	$output .= '<nav class="navigation paging-navigation" role="navigation">';
		$output .= '<div class="pagination loop-pagination">';
		$output .= $links;
		$output .= '</div>';
	$output .= '</nav>';
	endif; 
	}
	return $output;
}
endif;
if ( !defined( 'TEMPLATEMELA_THEME_DIR' ) ) {
	define( 'TEMPLATEMELA_THEME_DIR', get_template_directory() );
}
if ( !defined( 'TEMPLATEMELA_THEME_URI' ) ) {
	define( 'TEMPLATEMELA_THEME_URI', get_template_directory_uri() );
}
if ( !defined( 'TEMPLAETMELA_EXTENSIONS_DIR' ) ) {
	define( 'TEMPLAETMELA_EXTENSIONS_DIR', trailingslashit( TEMPLATEMELA_THEME_DIR ) . basename( dirname( __FILE__ ) ) );
}
if ( !defined( 'TEMPLATEMELA_EXTENSION_URI' ) ) {
	define( 'TEMPLATEMELA_EXTENSION_URI', trailingslashit( TEMPLATEMELA_THEME_URI ) . basename( dirname( __FILE__ ) ) );
}

	
// define global metaboxes array
global $TM_META_BOXES;
$TM_META_BOXES = array();
// include metaboxes
$metaboxes = array(
	'metaboxes-post.php',
	'metaboxes-common.php',
	'metaboxes-page.php',
	'metaboxes-testimonial.php',
	'metaboxes-staff.php'
);
foreach ( $metaboxes as $metabox ) {
	require_once get_template_directory() . '/templatemela/tm-meta-boxes' . '/' . $metabox ;		
}
/**
 * Register meta boxes
 *
 * @return void
 */
add_action( 'admin_init', 'rw_register_meta_box' );
function rw_register_meta_box()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) ) {
		return;
	}	
	global $TM_META_BOXES;	
	foreach ( $TM_META_BOXES as $meta_box ) {
		new RW_Meta_Box( $meta_box );
	}
}
/**
 * Localize meta boxes
 *
 * @return void
 */
function presscore_localize_meta_boxes() {
	global $TM_META_BOXES;
	$localized_meta_boxes = array();
	foreach ( $TM_META_BOXES as $meta_box ) {
		$localized_meta_boxes[ $meta_box['id'] ] = isset($meta_box['display_on'], $meta_box['display_on']['template']) ? (array) $meta_box['display_on']['template'] : array(); 
	}
	wp_localize_script( 'harvest_metabox_script', 'tmMetaboxes', $localized_meta_boxes );
}
add_action( 'admin_enqueue_scripts', 'presscore_localize_meta_boxes', 15 );
/* End Metabox */


// Adds custom image height X width for small thumbnails
add_image_size( 'blog-posts-list', 957, 430, true );
add_image_size( 'small-thumb', 50, 50, true );
//Create HTML list of nav menu items and allow HTML tags.
class Description_Walker extends Walker_Nav_Menu { 
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty ( $item->classes ) ? array () : (array) $item->classes;	 
		$class_names = join(' ', apply_filters(	'nav_menu_css_class', array_filter( $classes ), $item ) );	 
		! empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
		// Build default menu items
		$output .= "<li id='menu-item-$item->ID' $class_names>";
		$attributes = '';	 
		! empty( $item->attr_title )
		and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
		! empty( $item->target )
		and $attributes .= ' target="' . esc_attr( $item->target ) .'"';
		! empty( $item->xfn )
		and $attributes .= ' rel="' . esc_attr( $item->xfn ) .'"';
		! empty( $item->url )
		and $attributes .= ' href="' . esc_attr( $item->url ) .'"';
		// Build the description (you may need to change the depth to 0, 1, or 2)
		$description = ( ! empty ( $item->description ) and 1 == $depth ) ? '<span class="nav_desc">'. $item->description . '</span>' : '';		 
		$title = apply_filters( 'the_title', $item->title, $item->ID );		 
		$item_output = $args->before . "<a $attributes>" . $args->link_before . $title . '</a> ' . $args->link_after . $description . $args->after;
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id  );
	}
} 
// Allow HTML descriptions in WordPress Menu
remove_filter( 'nav_menu_description', 'strip_tags' );
function harvest_shop_body_classes( $classes ) {
if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'left'){
	$classes[] = 'shop-left-sidebar '; 
	}elseif(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'right'){
	$classes[] = 'shop-right-sidebar '; 
	}elseif(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'full'){
	$classes[] = 'shop-full-width ';	
	}else{
	$classes[] = 'shop-left-sidebar' ;
}
	return $classes;
}
add_filter( 'body_class', 'harvest_shop_body_classes' );
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) ||  (is_home()) ||  (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}
/* Related Product settings */
function harvest_related_products_args( $args ) {
  	$no = get_option("tmoption_related_items");	
	$args['posts_per_page'] = $no; 
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'harvest_related_products_args' );

/* Upsell Product settings */
function harvest_output_upsells() {
		$no1 = get_option("tmoption_upsells_items");	
	    woocommerce_upsell_display( $no1, 3); 
}
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'harvest_output_upsells', 15 );

/* crosssell Product settings */
function harvest_output_crosssell() {
		$no1 = get_option("tmoption_crosssell_items");	
	    woocommerce_cross_sell_display( $no1, 3); 
}
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10 );
add_action( 'woocommerce_after_cart', 'harvest_output_crosssell', 10 );

/* Move the price div*/
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 5 );

/* To display Wishlist in product block */
if ( in_array( 'yith-woocommerce-wishlist/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
if( ! function_exists( 'harvest_add_to_wishlist_in_product' ) ){
    function harvest_add_to_wishlist_in_product(){
        echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'harvest_add_to_wishlist_in_product', 11 );
endif;

/*	Product Navigation in shop page	 */
function harvest_product_navigation()
{		
		global $post , $previous ,$next;
		$current_url = get_permalink( $post->ID );
		$next_text = '';
		$previous_text = '';		
		
		// Get the previous and next product links
		$previous_link = get_permalink(get_adjacent_post(false,'',false)); 
		$next_link = get_permalink(get_adjacent_post(false,'',true));
		
		// Create the two links provided the product exists
		if ( $next_link != $current_url ) {
				$next = "<a href='" . $next_link . "'>" . $next_text . "</a>";
			}
			if ( $previous_link != $current_url ) {
				$previous = "<a href='" . $previous_link . "'>" . $previous_text . "</a>";
		}
		
		// Create the two links provided the product exists
			if ( $next_link != $current_url ) {
				$next_text = get_adjacent_post(false,'',true)->post_title;
				$next = "<a href='" . $next_link . "'>" . $next_text . "</a>";
			} 
			if ( $previous_link != $current_url ) {
				$previous_text = get_adjacent_post(false,'',false)->post_title;
				$previous = "<a href='" . $previous_link . "'>" . $previous_text . "</a>";
			}
			
		// Create HTML Output
		$output  = '<div class="tm_product_nav_buttons">'; 
		if ( $previous != '' )
			$output .= '<span class="previous"> ' . $previous . '</span>';
		if ( $next != '' )
			$output .= '<span class="next">' . $next .'</span>';
		$output .= '</div>';
		
		// Display the final output
		echo balanceTags($output);
}
add_action( 'woocommerce_single_product_summary', 'harvest_product_navigation', 5 );

/*	This function is used to convert hex color into rgb or rgba */

function harvest_hex_to_rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
		//Return default if no color provided
		if(empty($color))
          return $default; 
 
		//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        } 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        } 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        } 
        //Return rgb(a) color string
        return $output;
}

// Display the additional product images
function harvest_second_product_thumbnail() {
	global $product, $woocommerce;

	$attachment_ids = $product->get_gallery_attachment_ids();

	if ( $attachment_ids ) {
		$secondary_image_id = $attachment_ids['0'];
		echo wp_get_attachment_image( $secondary_image_id, 'shop_catalog', '', $attr = array( 'class' => 'secondary-image attachment-shop-catalog' ) );
	}
}
add_action( 'woocommerce_before_shop_loop_item_title', 'harvest_second_product_thumbnail');
	
/* for escaping i.e wp_kses( __()); the html element update to WP 4.3.1 */
function harvest_allowed_html() {
	 $harvest_allowed_html = array(
	'span' => array(
	 'class' => array(),
	 'style' => array(),
	),
	'div' => array(
	 'class' => array(),
	 'style' => array(),
	),
	'a' => array(
	 'href' => array(),
	),
	'i' => array(
	 'class' => array(),
	),
	);
return  $harvest_allowed_html;
}
/* Templatemela Plugin activation */
if( ! function_exists( 'harvest_plugins_activation' ) ){
	function harvest_plugins_activation()
	{
		$plugin_messages1 = array();
		
		if(!is_plugin_active( 'TemplatemelaShortcodes/TemplatemelaShortcodes.php' ))
		{			
			$plugin_messages1[] =esc_html__('This theme requires you to install the TemplatemelaShortcodes plugin, Please install and activate it.', 'harvest');		
		}
		if(!is_plugin_active( 'TemplatemelaCustomPost/TemplatemelaCustomPost.php' ))
		{
			$plugin_messages1[] =esc_html__('This theme requires you to install the TemplatemelaCustomPost plugin, Please install and activate it.', 'harvest');
		}
		if(!is_plugin_active( 'TemplatemelaMetaBox/meta-box.php' ))
		{
			$plugin_messages1[] =esc_html__('This theme requires you to install the TemplatemelaMetaBox plugin, Please install and activate it.', 'harvest');
		}				
		
		if(count($plugin_messages1) > 0)
		{		
				foreach($plugin_messages1 as $message1)
				{
					echo '<div id="message" class="notice error is-dismissible">';
					echo '<p><strong>'.$message1.'</strong></p>';									
					echo '</div>';				
				}		
		}
	}
}
add_action('admin_notices', 'harvest_plugins_activation');
?>