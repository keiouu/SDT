<?php
/**
 * This is an abstract snippet
 */

abstract class Snippet
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
	 * Render all instances of this snippet on a given page
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @param Array $params The snippet parameters
	 * @return string The html for this snippet
	 */
	public abstract function render($page, $config, $params);
}
