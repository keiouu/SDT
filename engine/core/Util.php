<?php
/**
 * This file is a central respository for any commonly used methods
 */

class Util
{
	public static function resolveWebPath($path, $relative_to) {
		// Is this a full URL?
		if (strpos($path, "http") !== false) return $path;
		
		// Does it begin with a slash? Always go back to base
		if (strpos($path, "/") === 0) return BASE_PATH . substr($path, 1);
		
		// Go back
		$parts = explode("/", dirname($path));
		$rel_parts = explode("/", dirname($relative_to));
		foreach ($parts as $part) {
			if ($part == "..") {
				$rel_parts = array_slice($rel_parts, 0, count($rel_parts) - 1);
			} else {
				break;
			}
		}
		return implode("/", $rel_parts) . "/" . basename($path);
	}
	
	public static function resolveFilePath($path, $relative_to) {
	}
}