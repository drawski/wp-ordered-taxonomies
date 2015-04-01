<?php

namespace Wordpress\Plugins;


class OrderedTaxonomies {
	private static $instance;
	private static $urlRoot;

	public static function bootstrap($urlRoot) {
		if (static::$instance instanceof OrderedTaxonomies) {
			return;
		}
		static::$instance = new OrderedTaxonomies();
		static::$urlRoot = $urlRoot;
		add_action('admin_enqueue_scripts', array(static::$instance, 'adminScripts'));

	}

	public function getInstance() {
		return static::$instance;
	}

	public function adminScripts() {
		wp_enqueue_script('ot-script', static::$urlRoot . 'assets/admin.js', array('jquery'));
	}
}