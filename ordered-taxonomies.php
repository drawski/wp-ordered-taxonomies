<?php
/*
Plugin Name: Ordered Taxonomies
Plugin URI: https://github.com/drawski/ordered-taxonomies
Description: WordPress plugin to support ordering of the taxonomy terms in posts
Author: Damian Rawski
Author URI: http://github.com/drawski
Version: 0.1
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if (!class_exists('\\WordPress\\Plugins\\OrderedTaxonomies')) {
	require_once(__DIR__ . '/class/OrderedTaxonomies.php');
}

\WordPress\Plugins\OrderedTaxonomies::bootstrap();
