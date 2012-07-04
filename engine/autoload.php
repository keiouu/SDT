<?php
/**
 * Autoloader
 */

spl_autoload_register(function ($class) {
	if (strpos($class, "Loader") > 0) {
    	include_once(ENGINE_PATH . 'loaders/' . $class . '.php');
		return;
	}
	if (strpos($class, "Snippet") > 0) {
    	include_once(ENGINE_PATH . 'snippets/' . $class . '.php');
		return;
	}
    include_once(ENGINE_PATH . 'core/' . $class . '.php');
});
