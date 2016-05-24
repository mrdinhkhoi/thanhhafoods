<?php
/** Adding TM Menu in admin panel. */
function harvest_theme_setting_menu() {	
	add_theme_page( esc_html__('Theme Settings','harvest'), esc_html__('TM Theme Settings','harvest'), 'manage_options', 'tm_theme_settings', 'harvest_theme_settings_page' );		
	add_theme_page( esc_html__('Hook Manager','harvest'), esc_html__('TM Hook Manager','harvest'), 'manage_options', 'tm_hook_manage', 'harvest_hook_manage_page');	
}
?>