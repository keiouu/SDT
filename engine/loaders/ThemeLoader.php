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
	}
	
	/**
	 * Render snippets for this page
	 * 
	 * @param string $page The current page
	 * @return string Returns the new page
	 */
	private function renderSnippets($page) {
		$theme = $this->_config['theme'];
		
		// Go through all snippet tags
		preg_match_all('/(\<(\w+)Snippet\b[^>]*\>)(.*?)(\<\/\\2Snippet\>)/is', $page, $matches, PREG_SET_ORDER);
		foreach ($matches as $match) {
			$snippet = $match[2] . "Snippet";
			$data = $match[3];
			$snippet_object = new $snippet();
			$output = $snippet_object->render($page, $this->_config, json_decode($data));
			$page = str_replace("<" . $snippet . ">" . $data . "</" . $snippet . ">", $output, $page);
		}
		
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
		$page = $this->renderSnippets($page);
		
		// Replace media tag with the required media
		$page = str_replace("{{media}}", "", $page);
		
		return $page;
	}
}
