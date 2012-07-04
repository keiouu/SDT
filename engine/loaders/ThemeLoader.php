<?php
/**
 * This file contains a theme loader, which loads a theme including all snippets
 */

class ThemeLoader
{
	private $_config, $_media, $_snippets;
	
	/**
	 * Create a ThemeLoader
	 *
	 * @param Array $config The site config
	 * @param MediaManager $media A MediaManager object
	 */
	public function __construct($config, $media) {
		$this->_config = $config;
		$this->_media = $media;
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
			
			// Create the snippet object, allow it to add media if it wants too
			$snippet_object = new $snippet();
			$snippet_object->media($this->_media);
			$snippet_data = json_decode($data);
			$snippet_data_array = json_decode($data, true);
			
			// SDT - Snippet span tag wrapper
			$sdt_wrapper = '<span class="sdt-snippet" ';
			foreach ($snippet_data_array as $name => $val) {
				if (!is_array($val))
					$sdt_wrapper .= "data-" . $name . '="'.$val.'" ';
			}
			$sdt_wrapper .= '>';
			
			// Get the Snippet HTML and replace in to page
			$output = $snippet_object->render($page, $this->_config, $snippet_data);
			$page = str_replace("<" . $snippet . ">" . $data . "</" . $snippet . ">", $sdt_wrapper . $output . '</span>', $page);
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
		$theme = $this->_config['theme'];
		
		// Load the theme
		include($this->_config['theme-path'] . "theme.php");
		$obj_name = $theme . "Theme";
		$obj = new $obj_name();
		$obj->media($this->_media);
		
		// Parse Snippets
		$page = $this->renderSnippets($page);
		
		return $page;
	}
}
