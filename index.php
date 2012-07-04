<?php
/**
 * This file is passed a desired page, it then serves up that page by any means necessary!
 */

define("BASE_PATH", __DIR__ . "/");
define("THEME_PATH", __DIR__ . "/themes/");
define("SITE_PATH", __DIR__ . "/site/");
define("SITE_CACHE_PATH", __DIR__ . "/site-cache/");

// Make sure we have a page!
if (!isset($_GET['sdt-page'])) {
	$page = "/index.html";
} else {
	$page = $_GET['sdt-page'];
}

// If this URL doesnt have a file name, add index.html
if (strlen($page) <= 0 || substr($page, -1) == "/") {
	$page = $page . "index.html";
}

// See if this page is cached
$file = SITE_CACHE_PATH . $page;
if (file_exists($file)) {
	// Print the contents
	print file_get_contents($file);
} else {
	// Let the engine take care of this.
	require(BASE_PATH . "engine/bootstrap.php");
}
