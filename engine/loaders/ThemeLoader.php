<?php
/**
 * This file contains a theme loader, which loads a theme including all snippets
 */

class ThemeLoader
{
	private $_config, $_snippets;
	
	/**
	 * Create a ThemeLoader
	 *
	 * @param Array $config The site config
	 */
	public function __construct($config) {
		$this->_config = $config;
		
		$this->loadSnippets();
	}
	
	/**
	 * Load snippets for this template's theme
	 */
	private function loadSnippets() {
		$theme = $this->_config['theme'];
	}
}
