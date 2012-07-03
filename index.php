<?php
/**
 * This file is passed a desired page, it then serves up that page by any means necessary!
 */

// Make sure we have a page!
if (!isset($_GET['sdt-page'])) {
	$page = "/403.html";
} else {
	$page = $_GET['sdt-page'];
}

// If this URL doesnt have a file name, add index.html
if (strlen($page) <= 0 || substr($page, -1)) {
	$page = $page . "index.html";
}

// See if this page is cached
$file = realpath("./site-cache") . $page;
if (file_exists($file)) {
	print file_get_contents($file);
} else {
	// Let the engine take care of this.
	require(realpath("./engine/bootstrap.php"));
}
