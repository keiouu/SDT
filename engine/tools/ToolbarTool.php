<?php
/**
 * This is a toolbar for publishers/developers
 */

class ToolbarTool extends Tool
{
	/**
	 * Render this tool
	 * 
	 * @param string $page The current page
	 * @param Array $config The page's config
	 * @return string The new page
	 */
	public function render($page, $config) {
		
		return '<div style="position: fixed; top: 0; left: 0;">
			Site Development Tool
		</div>';
	}
}
