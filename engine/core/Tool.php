<?php
/**
 * This is an abstract class for Tools
 */

abstract class Tool
{
	/**
	 * Add any media files this Snippet uses to a MediaManager
	 * 
	 * @param MediaManager $media A MediaManager object
	 */
	public function media($media) {
		// Blank
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
