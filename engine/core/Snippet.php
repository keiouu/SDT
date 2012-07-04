<?php
/**
 * This is an abstract snippet
 */

abstract class Snippet
{
	/**
	 * Returns any media files this Snippet uses
	 * 
	 * @return Array An array of media this snippet uses
	 */
	public function media() {
		return array();
	}
	
	/**
	 * Render all instances of this snippet on a given page
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @param Array $params The snippet parameters
	 * @return string The new page
	 */
	public abstract function render($page, $config, $params);
}
