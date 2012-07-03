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
	 * @param PageLoader $page The PageLoader object for this process
	 * @param TemplateLoader $template The TemplateLoader object for this process
	 * @param ThemeLoader $theme The ThemeLoader object for this process
	 */
	public function __construct($page, $template, $theme) {
		$this->_page = $page;
		$this->_template = $template;
		$this->_theme = $theme;
	}
	
	/**
	 * Mix & Render
	 */
	public function render() {
		$page = $this->_page->process();
		$page = $this->_template->process($page);
		$page = $this->_theme->process($page);
		return $page;
	}
}
