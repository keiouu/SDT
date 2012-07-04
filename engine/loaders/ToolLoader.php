<?php
/**
 * This file contains a tool loader, which loads all tools for a given page/group
 */

class ToolLoader
{
	private $_config, $_media;
	
	/**
	 * Create a ToolLoader
	 *
	 * @param Array $config The site config
	 * @param MediaManager $media A MediaManager object
	 */
	public function __construct($config, $media) {
		$this->_config = $config;
		$this->_media = $media;
	}
	
	/**
	 * Render tools for this page
	 * 
	 * @param string $page The current page
	 * @return string Returns the new page
	 */
	private function renderTools($page) {
		$theme = $this->_config['theme'];
		
		$tools = array( new ToolbarTool(), new PropertiesTool() );
		foreach ($tools as $tool) {
			$tool->media($this->_media);
			$page = $tool->render($page, $this->_config);
		}
		
		return $page;
	}
	
	/**
	 * Process the page
	 * This involves going through all snippets and applying them to the page if necessary
	 * 
	 * @param string $page The current page
	 * @return string Returns the new page
	 */
	public function process($page) {
		// Parse Snippets
		$page = $this->renderTools($page);
		
		return $page;
	}
}
