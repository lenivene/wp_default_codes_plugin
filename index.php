<?php
/* Plugin Name: Default codes plugin WordPress
 * Plugin URI: https://github.com/lenivene/wp_default_codes_plugin
 * Description: Fusce lobortis ex vitae lectus imperdiet, et mattis elit molestie. Pellentesque eget neque volutpat, scelerisque nulla ac, gravida magna. Vivamus faucibus lorem in eros sollicitudin, vel pharetra ligula auctor.
 * Version: 0.0.1
 * Author: Lenivene Bezerra
 * Author URI: https://github.com/lenivene
 * License: GPLv2 or later
 * Text Domain: lenivene
**/
if( !defined( 'ABSPATH' ) ) { header( 'Location: /' ); exit; }
define( 'LENIVENE__DIR', plugin_dir_path( __FILE__ ) );
define( 'LENIVENE__URL', plugin_dir_url( __FILE__ ) );
define( 'LENIVENE__MIN_WP_VERSION', '4.0' ); // number version