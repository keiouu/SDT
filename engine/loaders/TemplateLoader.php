<?php
/**
 * This file contains a template loader, which loads a template
 */

class TemplateLoader
{
	private $_config;
	
	/**
	 * Create a TemplateLoader
	 *
	 * @param Array $config The site config
	 */
	public function __construct($config) {
		$this->_config = $config;
	}
}
