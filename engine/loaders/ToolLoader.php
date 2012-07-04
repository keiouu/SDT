<?php
/**
 * This file contains a tool loader, which loads all tools for a given page/group
 */

class ToolLoader
{
	private $_config;
	
	/**
	 * Create a ToolLoader
	 *
	 * @param Array $config The site config
	 */
	public function __construct($config) {
		$this->_config = $config;
	}
	
	/**
	 * Render tools for this page
	 * 
	 * @param string $page The current page
	 * @return string Returns the new page
	 */
	private function renderTools($page) {
		$theme = $this->_config['theme'];
		
		return $page;
	}
	
	/**
	 * Process the page
	 * This involves going through all snippets and applying them to the page if necessary
	 * 
	 * @param string $page The current page
	 * @return string Returns the new page
	 */
	public function process($page) {
		// Parse Snippets
		$page = $this->renderTools($page);
		
		return $page;
	}
}
