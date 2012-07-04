<?php
/**
 * This is a simple Image snippet
 */

class ImageSnippet extends Snippet
{
	/**
	 * Render all instances of this snippet on a given page
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @param Array $params The snippet parameters
	 * @return string The new page
	 */
	public function render($page, $config, $params) {
		return '<img src="' . $params->src . '" alt="' . $params->alt . '" />';
	}
}
