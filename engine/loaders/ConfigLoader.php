<?php
/**
 * This file contains a config loader, which loads the configuration for each site
 */

class ConfigLoader
{
	/**
	 * Return the site config as an array when given a path
	 * 
	 * @param string $path The path to the file we want config for
	 * @return Array An array of configuration (empty if we couldnt find any config)
	 */
	public static function getSiteConfig($path) {		
		// Get the foldername, starting with the base config dir
		$config_path = BASE_PATH . "config";
		
		// Go through all the folders in the path and find config files until we can no longer find any!
		foreach(explode("/", dirname($path)) as $dir) {
			if (file_exists($config_path . "/" . $dir . "/config.php")) {
				$config_path .= "/" . $dir;
			}
		}
		
		// Load and return the config file
		require_once($config_path . "/config.php");
		
		$config = isset($config) ? $config : array();
		
		$config['page-path'] = Util::sitePathToWebPath(SITE_PATH . $path);
		
		return $config;
	}
}
