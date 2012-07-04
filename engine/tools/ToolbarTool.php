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
		$media->addFile(ASSETS_PATH . "SDT/less/toolbar.less");
	}
	
	/**
	 * Render this tool
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @return string The new page
	 */
	public function render($page, $config) {
		$html = '<div id="sdt-toolbar">
			Site Development Tool
		</div>';
		return str_replace("<body>", $html, $page);
	}
}
