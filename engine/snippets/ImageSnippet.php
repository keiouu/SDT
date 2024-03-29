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
	 * @return string The html for this snippet
	 */
	public function render($page, $config, $params) {
		$src = dirname($config['page-url']) . "/" . $params->src;
		return View::load($config['theme-path'] . "snippets/Image/Image.php", array("src" => $src , "alt" => $params->alt));
	}
}
