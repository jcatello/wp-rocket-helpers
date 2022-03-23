<?php
/**
 * Plugin Name: WP Rocket | Disable Page Caching
 * Description: Disables WP Rocket’s page cache while preserving other optimization features.
 * Plugin URI:  https://github.com/wp-media/wp-rocket-helpers/tree/master/cache/wp-rocket-no-cache/
 * Author:      WP Rocket Support Team
 * Author URI:  http://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2018
 */

namespace WP_Rocket\Helpers\cache\no_cache;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();

/**
 * Disable page caching in WP Rocket.
 * BigScoots - 6Ct76O02OCG
 * @link http://docs.wp-rocket.me/article/61-disable-page-caching
 */
add_filter( 'do_rocket_generate_caching_files', '__return_false' );
add_filter( 'rocket_generate_advanced_cache_file', '__return_false' );
add_filter( 'rocket_disable_htaccess', '__return_false' );
add_filter( 'pre_get_rocket_option_sitemap_preload', '__return_zero' );
add_filter( 'pre_get_rocket_option_sitemap_preload_url_crawl', '__return_zero' );
add_filter( 'pre_get_rocket_option_sitemaps', '__return_zero' );
add_filter( 'pre_get_rocket_option_manual_preload', '__return_zero' );
