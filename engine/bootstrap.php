<?php
/**
 * This file is called by index.php is it cannot find a cached page
 */

define("ENGINE_PATH", __DIR__ . "/");

// Get the site config
require_once(ENGINE_PATH . "loaders/ConfigLoader.php");
$config = ConfigLoader::getSiteConfig($page);

// Load the theme
require_once(ENGINE_PATH . "loaders/ThemeLoader.php");
$theme = new ThemeLoader($config);

// Load the template
require_once(ENGINE_PATH . "loaders/TemplateLoader.php");
$template = new TemplateLoader($config);

// Load the template engine
require_once(ENGINE_PATH . "loaders/PageLoader.php");
$page = new PageLoader($page, $config);

// Render the page
require_once(ENGINE_PATH . "core/RenderManager.php");
$engine = new RenderManager($page, $template, $theme);
print $engine->render();
