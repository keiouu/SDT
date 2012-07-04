<?php
/**
 * This is a toolbar for publishers/developers
 */

class ToolbarTool extends Tool
{
	/**
	 * Add any media files this Snippet uses to a MediaManager
	 * 
	 * @param MediaManager $media A MediaManager object
	 */
	public function media($media) {
		$media->addFile(ASSETS_PATH . "SDT/less/core.less");
		$media->addFile(ASSETS_PATH . "SDT/less/toolbar.less");
		$media->addFile(ASSETS_PATH . "common/js/jquery-1.7.2.js");
		$media->addFile(ASSETS_PATH . "SDT/js/core.js");
		$media->addFile(ASSETS_PATH . "SDT/js/toolbar.js");
	}
	
	/**
	 * Render this tool
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @return string The new page
	 */
	public function render($page, $config) {
		$html = View::load(ASSETS_PATH . "SDT/html/toolbar.php");
		return str_replace("<body>", "<body>" . $html, $page);
	}
}
