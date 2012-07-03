<?php
/**
 * This file contains a page loader, which loads the template and mixes in the page
 */

class PageLoader
{
	private $_path, $_config;
	
	/**
	 * Create a PageLoader
	 *
	 * @param string $path The filename of the page
	 * @param Array $config The site config
	 */
	public function __construct($path, $config) {
		$this->_path = $path;
		$this->_config = $config;
		
		$this->loadSnippets();
	}
	
	/**
	 * Load the theme
	 */
	
	/**
	 * Load snippets for this template's theme
	 */
	private function loadSnippets() {
		$theme = $this->_config['theme'];
	}
}
