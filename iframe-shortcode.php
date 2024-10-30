<?php
/*
Plugin Name: iframe Shortcode
Plugin URI: http://wordpress.org/extend/plugins/iframe-shortcode/
Description: Simple plugin to allow pasting iframe embed codes into the visual editor.
Author: Terrier Tenacity
Version: 2.0
Author URI: https://terriertenacity.com
*/

$IframeShortcode = new IframeShortcode;

class IframeShortcode {
	
	function __construct() {
		add_shortcode( 'iframe', array( &$this, 'iframe_shortcode' ) );
	}
	
	function iframe_shortcode( $atts, $content = null ) {
	    $char = array( '&#8216;', '&#8217;', '&#8220;', '&#8221;', '&#8242;', '&#8243;' );
	    $replace = array( "'", "'", '"', '"', "'", '"' );
	    return html_entity_decode( str_replace( $char, $replace, $content ) );
	}
	
}