<?php
/**
 * This file is a central respository for any commonly used methods
 */

class Util
{	
	public static function sitePathToWebPath($path) {
		$base = dirname($_SERVER['PHP_SELF']);
		return str_replace(SITE_PATH, $base . "/site/", $path);
	}
}