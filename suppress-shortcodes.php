<?php
/*
Plugin Name: Suppress Shortcodes
Plugin URI: https://wordpress.org/plugins/suppress-shortcodes/
Description: Suppress shortcodes from being interpreted
Version: 1.0.1
Author: David Artiss
Author URI: http://www.artiss.co.uk
Text Domain: suppress-shortcodes
Domain Path: /languages
*/

/**
* Plugin initialisation
*
* Loads the plugin's translated strings
*
* @since	1.0
*/

function noin_plugin_init() {
    
	global $wp_version;

	if ( ( float ) $wp_version < 4.6 ) {      

        $language_dir = plugin_basename( dirname( __FILE__ ) ) . '/languages/';

        load_plugin_textdomain( 'suppress-shortcodes', false, $language_dir );
    }
}

add_action( 'init', 'noin_plugin_init' );

if ( is_admin() && !( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {

	/**
	* Add meta to plugin details
	*
	* Add options to plugin meta line
	*
	* @since	1.0
	*
	* @param	string  $links	Current links
	* @param	string  $file	File in use
	* @return   string			Links, now with settings added
	*/

	function noin_set_plugin_meta( $links, $file ) {

		if ( strpos( $file, 'suppress-shortcodes.php' ) !== false ) {
			$links = array_merge( $links, array( '<a href="http://wordpress.org/support/plugin/suppress-shortcodes">' . __( 'Support', 'suppress-shortcodes' ) . '</a>' ) );
			$links = array_merge( $links, array( '<a href="http://www.artiss.co.uk/donate">' . __( 'Donate', 'suppress-shortcodes' ) . '</a>' ) );
		}

		return $links;
	}

	add_filter( 'plugin_row_meta', 'noin_set_plugin_meta', 10, 2 );

} else {

	/**
	* Set up shortcode
	*
	* Shortcode function to suppress other shortcodes from being processed
	*
	* @since	1.0
	*
	* @param	string	$paras		Shortcode parameters
	* @param	string	$content	Content to be suppressed
	* @return	string				Output code
	*/

	function noin_shortcode( $paras = '', $content = '' ) {
		return $content;
	}

	add_shortcode( 'noin', 'noin_shortcode' );
}
?>