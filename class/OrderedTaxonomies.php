<?php

namespace Wordpress\Plugins;


class OrderedTaxonomies {
	private static $instance;

	public static function bootstrap() {
		if (static::$instance instanceof OrderedTaxonomies) {
			return;
		}
		static::$instance = new OrderedTaxonomies();
		add_action('admin_enqueue_scripts', array(static::$instance, 'adminScripts'));

	}

	public function getInstance() {
		return static::$instance;
	}

	public function adminScripts() {
		wp_enqueue_script('ot-script', plugin_dir_url('assets/admin.js'), array('jquery'));
	}
}