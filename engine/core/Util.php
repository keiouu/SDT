<?php
/**
 * This file is a central respository for any commonly used methods
 */

class Util
{	
	public static function sitePathToWebPath($path) {
		$base = dirname($_SERVER['PHP_SELF']);
		if (substr($base, -1) !== "/")
			$base = $base . "/";
		return str_replace(SITE_PATH, $base . "site/", $path);
	}
}