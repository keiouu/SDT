<?php
/**
 * This is an abstract class for Tools
 */

abstract class Tool
{
	/**
	 * Returns any media files this Tool uses
	 * 
	 * @return Array An array of media this tool uses
	 */
	public function media() {
		return array();
	}
	
	/**
	 * Render this tool
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @return string The new page
	 */
	public abstract function render($page, $config);
}
