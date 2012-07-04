<?php
/**
 * This is an abstract snippet
 */

abstract class Snippet
{
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
