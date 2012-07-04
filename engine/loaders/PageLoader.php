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
	}
	
	/**
	 * Process the page
	 * This involves returning our content
	 * 
	 * @return string Returns the page
	 */
	public function process() {
		return file_get_contents(SITE_PATH . $this->_path);
	}
}
