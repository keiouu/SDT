<?php
/**
 * This file contains a render manager, which mixes the theme, template and page together to create the final output
 */

class RenderManager
{
	private $_page, $_template, $_theme;
	/**
	 * Create a RenderManager
	 *
	 * @param string $path The filename of the page
	 * @param Array $config The site config
	 */
	public function __construct($page, $template, $theme) {
		$this->_page= $page;
		$this->_template = $template;
		$this->_theme = $theme;
	}
	
	/**
	 * Mix & Render
	 */
	public function render() {
		
	}
}
