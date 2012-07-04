<?php
/**
 * This is a properties panel for displaying/editing snippet properties
 */

class PropertiesTool extends Tool
{
	/**
	 * Add any media files this Snippet uses to a MediaManager
	 * 
	 * @param MediaManager $media A MediaManager object
	 */
	public function media($media) {
		$media->addFile(ASSETS_PATH . "SDT/less/properties.less");
	}
	
	/**
	 * Render this tool
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @return string The new page
	 */
	public function render($page, $config) {
		$html = View::load(ASSETS_PATH . "SDT/html/properties.php");
		return str_replace("<body>", "<body>" . $html, $page);
	}
}
