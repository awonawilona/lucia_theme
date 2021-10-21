<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets() {
	// Remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	// Remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //

}

/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/

// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function luciatheme_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="https://bohanintl.com" target="_blank">BHI Consulting for Websites</a> on behalf of TD Reply Berlin for Oetker Stiftungen</span>.', 'luciatheme' );
}

// adding it to the admin area
add_filter('admin_footer_text', 'luciatheme_custom_admin_footer');

/**
 * Disable Privacy Tools plugin
 * @source: //wordpress.org/plugins/disable-privacy-tools/
 */
function ds_disable_core_privacy_tools( $caps, $cap ) {
	switch ( $cap ) {
		case 'export_others_personal_data':
		case 'erase_others_personal_data':
		case 'manage_privacy_options':
			$caps[] = 'do_not_allow';
			break;
	}

	return $caps;
}
add_filter( 'map_meta_cap', 'ds_disable_core_privacy_tools', 10, 2 );

/**
 * Short circuits the option for the privacy policy page to always return 0.
 *
 * The option is used by get_privacy_policy_url() among others.
 */
add_filter( 'pre_option_wp_page_for_privacy_policy', '__return_zero' );

