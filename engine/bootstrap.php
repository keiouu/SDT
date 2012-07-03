<?php
/**
 * This file is called by index.php is it cannot find a cached page
 */

define("ENGINE_PATH", __DIR__ . "/");

// Get the site config
require_once(ENGINE_PATH . "loaders/ConfigLoader.php");
$config = ConfigLoader::getSiteConfig($page);

