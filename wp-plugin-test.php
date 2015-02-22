<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/**
 * Plugin Name: WP Plugin Test by D79
 * Plugin URI: https://github.com/d79/wp-plugin-test
 * Description: A brief description of the plugin.
 * Version: 0.0.7
 * Author: D79
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * License: GPL2
 */

function d79_test_admin_notice(){
	echo '
		<div class="updated">
			<p>I am a little green notice again.</p>
		</div>
	';
}
add_action('admin_notices', 'd79_test_admin_notice');

include_once 'WordPress-GitHub-Plugin-Updater/updater.php';

if (is_admin()) {
	$config = array(
		'slug' => plugin_basename(__FILE__),
		'proper_folder_name' => 'plugin-name',
		'api_url' => 'https://api.github.com/repos/d79/wp-plugin-test',
		'raw_url' => 'https://raw.githubusercontent.com/d79/wp-plugin-test/master',
		'github_url' => 'https://github.com/d79/wp-plugin-test',
		'zip_url' => 'https://github.com/d79/wp-plugin-test/zipball/master',
		'sslverify' => true,
		'requires' => '3.0',
		'tested' => '4.1',
		'readme' => 'README.md',
	);
	new WP_GitHub_Updater($config);
}
