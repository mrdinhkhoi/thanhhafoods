<?php
/*
  Plugin Name: Templatemela Custom Widgets
  Plugin URI: http://www.templatemela.com
  Description: Templatemela Default Homepage Slide Show for templatemela wordpress themes.
  Version: 1.0
  Author: Templatemela
  Author URI: http://www.templatemela.com
  @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
  @license    http://www.templatemela.com/license/
 */
?>
<?php 
//  Creating Widget 
// Reference : http://codex.wordpress.org/Widgets_API
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override harvest_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 
 * @uses register_sidebar
 */
function templatemela_register_sidebars() {
	register_sidebar( array(
		'name' => esc_html__( 'Header Area', 'harvest' ),
		'id' => 'header-widget',
		'description' => esc_html__( 'The primary widget area on header', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'First Footer Widget Area', 'harvest' ),
		'id' => 'first-footer-widget-area',
		'description' => esc_html__( 'The first footer widget area', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer Widget Area', 'harvest' ),
		'id' => 'second-footer-widget-area',
		'description' => esc_html__( 'The second footer widget area', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Third Footer Widget Area', 'harvest' ),
		'id' => 'third-footer-widget-area',
		'description' => esc_html__( 'The third footer widget area', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Fourth Footer Widget Area', 'harvest' ),
		'id' => 'forth-footer-widget-area',
		'description' => esc_html__( 'The forth footer widget area', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Fifth Footer Widget Area', 'harvest' ),
		'id' => 'fifth-footer-widget-area',
		'description' => esc_html__( 'The fifth footer widget area', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Sixth Footer Widget Area', 'harvest' ),
		'id' => 'sixth-footer-widget-area',
		'description' => esc_html__( 'The sixth footer widget area', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Header Search Widget Area', 'harvest' ),
		'id' => 'header-search',
		'description' => esc_html__( 'The header search widget area', 'harvest' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Top NewsLetter Area', 'harvest' ),
		'id' => 'footer-top-area',
		'description' => esc_html__( 'Footer Top Area', 'harvest' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Footer Top CMS Area', 'harvest' ),
		'id' => 'footer-top-cms',
		'description' => esc_html__( 'Footer Top CMS', 'harvest' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Product Page Side-bar Area', 'harvest' ),
		'id' => 'single-product-side-widget-area',
		'description' => esc_html__( 'The Single Product Side widget area', 'harvest' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
/**
 * Register sidebars by running harvest_widgets_init() on the widgets_init hook. 
 */
add_action( 'widgets_init', 'templatemela_register_sidebars' );

get_template_part('templatemela/widgets/tm-follow-us');
get_template_part('templatemela/widgets/tm-footer-contactus');
get_template_part('templatemela/widgets/tm-static-links');
get_template_part('templatemela/widgets/tm-left-banner');
?>