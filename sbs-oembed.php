<?php
/**
	Plugin Name: SBS oEmbed Service
	Plugin URI: http://feeds.sbs.nl/sbs-oembed-service/
	Description: Deze plugin maakt het mogelijk om op een makkelijke manier video's van KIJK.NL te embedden. Op KIJK.NL kan je alle video conten vinden van SBS6, Net5 en Veronica TV.
	Version: 0.4
	Author: Peter Philippo
	Author URI: http://feeds.sbs.nl
 *  
 */


/**
 * register the kijk.nl oembed provider
 */
function sbs_oembed_service()
{
	$oembedUrls = array(
		array(
			'format' => 'http://www.kijk.nl/video/*', 
			'provider' => 'http://oembed.kijk.nl',
			'regex' => false),
	);
	foreach ($oembedUrls as $oembed) {
		wp_oembed_add_provider( $oembed['format'], $oembed['provider'], $oembed['regex']);
	}
}


// Now tell WP about the service
add_action( 'init','sbs_oembed_service' );