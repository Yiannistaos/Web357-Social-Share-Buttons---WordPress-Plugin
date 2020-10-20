<?php
/**
 * Plugin Name:       Web357 Social Share Buttons
 * Plugin URI:        https://www.web357.com/
 * Description:       A shortcode of the two most popular social media share buttons.
 * Version:           1.0.0
 * Author:            Web357
 * Author URI:        https://www.web357.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       w357-social-share-buttons
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
if ( !defined( 'W357_SOCIAL_SHARE_BUTTONS_VERSION' ) ) {
	define( 'W357_SOCIAL_SHARE_BUTTONS_VERSION', 'WP_PLUGIN_VERSION' );
}


// [w357_social_share_buttons]
add_shortcode( 'w357_social_share_buttons', 'w357_social_share_buttons_func' );
function w357_social_share_buttons_func( $atts ){

    global $wp;

    $tweet_btn_html = '<div style="display:inline-block;overflow:hidden;margin-right:15px;"><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><a alt="Tweet" target="_blank" href="https://twitter.com/intent/tweet?via=web357&url='.urlencode(get_permalink($post->ID)).'&text='.(get_the_title()).'&hashtags=joomla,wordpress,web357" class="twitter-share-button">Tweet</a></div>';

    $facebook_btn_html = '<div style="display:inline-block;">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=571063946354319&autoLogAppEvents=1" nonce="wkGRjzj7"></script>
  
    <!-- Your like button code -->
    <div class="fb-like" data-href="'.home_url( $wp->request ).'" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div></div>';

    $html = '<div>' . $tweet_btn_html . '' . $facebook_btn_html . '</div>';

	return $html;
}
