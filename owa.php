<?php
class owaPlugin extends MantisPlugin {

	function register() {
		$this->name = plugin_lang_get( 'title' );
		$this->description = plugin_lang_get( 'description' );
		$this->page = 'config';

		$this->version = '1.01';
		$this->requires = array(
			'MantisCore' => '2.0.0',
		);

		$this->author = 'Cas Nuy';
		$this->contact = 'cas@nuy.info';
		$this->url = 'www.nuy.info';
	}

	function config() {
		return array(
			'owa_loc' => '/var/www/html/owa/',
			'site_id' => 0,
		);
	}

	function hooks() {
		return array(
			'EVENT_LAYOUT_BODY_BEGIN' => 'track_it',
		);
	}

	function track_it() {
		# Don't use analytics on login pages
		$t_file = $_SERVER['SCRIPT_FILENAME'];
		if ( strpos( basename( $t_file ), 'login' ) ) {
			return;
		}
		include 'plugins/owa/pages/tracking.php';
	}
}