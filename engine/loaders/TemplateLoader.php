<?php
/**
 * This file contains a template loader, which loads a template
 */

class TemplateLoader
{
	private $_config;
	
	/**
	 * Create a TemplateLoader
	 *
	 * @param Array $config The site config
	 */
	public function __construct($config) {
		$this->_config = $config;
	}
	
	/**
	 * Returns the template we are to use
	 *
	 * @return string The template we should use
	 */
	private function getTemplate() {
		$theme = $this->_config['theme'];
		$template = $this->_config['template'];
		$path = THEME_PATH . $theme . "/templates/" . $template . ".tpl.html";
		if (!file_exists($path)) {
			die("Template does not exist: " . $path);
		}
		return file_get_contents($path);
	}
	
	/**
	 * Extract the title of a page
	 * 
	 * @param string $page The HTML of the page
	 * @return string The title to use
	 */
	private function getTitle($page) {
		if (!preg_match('/<h1>(.+?)<\/h1>/', $page, $matches)) {
			die("TemplateLoader could not find a h1 tag in the page!");
		}
		return $matches[1];
	}
	
	/**
	 * Process the page
	 * This involves adding in the template and mixing the current page in
	 */
	public function process($page) {
		$template = $this->getTemplate();
		
		// Replace title tag with the first h1 in the page
		$template = str_replace("{{title}}", $this->getTitle($page), $template);
		
		// Replace body tag with the page
		$template = str_replace("{{body}}", $page, $template);
		
		return $template;
	}
}
