<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 * @author         TemplateMela
 * @version        Release: 1.0
 */
/**  Set Default options : Theme Settings  */

function tm_set_default_options_child()
{ 
	/*  General Settings  */	
	add_option("tmoption_revslider_alias",'tm_homeslider_kitchen');
				
	/*  Top Bar Settings  */	
	add_option("tmoption_topbar_bkg_color","00A9DF"); // topbar_bkg_color
	add_option("tmoption_topbar_bkg_opacity","1"); // Set your background opacity
	add_option("tmoption_topbar_text_color","b4ecfe"); // topbar_text_color
	add_option("tmoption_topbar_link_color","b4ecfe"); // topbar_link_color
	add_option("tmoption_topbar_link_hover_color","ffffff"); // topbar_link_hover_color
	add_option("tmoption_top_menu_bg_color","007CA3"); // Top menu background color		
	add_option("tmoption_top_menu_texthover_color","009BCC"); // Top menu text hover color
	add_option("tmoption_topbar_phone_text","Call Now"); // set contact text
	add_option("tmoption_button_hover_color","009bcc"); // button hover color
		
	/*  Header Settings  */	
	add_option("tmoption_header_back_repeat","no-repeat"); // header background repeate
	add_option("tmoption_header_back_position","top+left"); // header background position
	add_option("tmoption_header_back_attachment","scroll"); // header background attachment		
	add_option("tmoption_header_bkg_color","009BCC"); // header background color	
	add_option("tmoption_header_background_upload", ''); // set background image	
		
	/*  Content Settings  */
	add_option("tmoption_hoverlink_color","009BCC"); // link hover color
		
	/*  Footer Settings  */	
	add_option("tmoption_footerbkg_color","009bcc"); // footer background color	
	add_option("tmoption_footerlink_color","B4ECFE"); // footer link text color
	add_option("tmoption_footerhoverlink_color","ffffff"); // footer link hover text color
}	
add_action('init', 'tm_set_default_options_child'); 
function harvest_load_scripts_child() {		
	wp_enqueue_script( 'harvest_jquery_custom', get_stylesheet_directory_uri() . '/js/megnor/custom.js', array(), '', true);				 	
 }
add_action( 'wp_enqueue_scripts', 'harvest_load_scripts_child' );
?>