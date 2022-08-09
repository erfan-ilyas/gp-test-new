<?php

class Nginx_Cache_Purger {

	protected $plugin_name;

	protected $version;

	public $plugin_textdomain;

	public $plugin_dir_path;

	public function __construct( $plugin_version, $plugin_dir_path, $plugin_dir_url, $plugin_name ) {

		$this->plugin_version    = $plugin_version;
		$this->plugin_dir_path   = $plugin_dir_path;
		$this->plugin_dir_url    = $plugin_dir_url;
		$this->plugin_name       = $plugin_name;
		$this->plugin_textdomain = $plugin_name;
	}

	public function init() {

		add_action( 'init', array( $this, 'instantiate' ) );

	}

	public function instantiate() {

		if ( is_admin() ) {

			require_once( $this->plugin_dir_path . 'src/class-gpcp-admin.php' );
			$this->admin = new Nginx_Cache_Purger_Admin;
			$this->admin->init();

		}
	}

}

function Nginx_Cache_Purger() {

	static $object;

	if ( null == $object ) {

		$object = new Nginx_Cache_Purger(
			GPCP_VERSION,
			GPCP_DIR_PATH,
			GPCP_DIR_URL,
			GPCP_TEXT_DOMAIN
		);
	}

	return $object;
}

add_action( 'plugins_loaded', array( Nginx_Cache_Purger(), 'init' ) );