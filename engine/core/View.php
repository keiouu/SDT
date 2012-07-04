<?php
/**
 * A View is a class to load HTML for a snippet, whilst allowing PHP
 */

class View
{
	/**
	 * Load a view
	 * 
	 * @param string $filename The filename to load
	 * @param Array $params A multi-dimensional list of parameters to pass to the file (to be picked up by PHP in the file)
	 */
	public static function load($filename, $params = array()) {
		ob_start();
		extract($params);
		include($filename);
		$html = ob_get_clean();
		foreach ($params as $name => $val) {
			$html = str_replace("{".$name."}", $val, $html);
		}
		return $html;
	}
}
