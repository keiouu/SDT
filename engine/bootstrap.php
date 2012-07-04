<?php
/**
 * This file is called by index.php is it cannot find a cached page
 */

define("ENGINE_PATH", __DIR__ . "/");
require_once(ENGINE_PATH . "autoload.php");

// Get the site config
$config = ConfigLoader::getSiteConfig($page);

// Load the theme
$theme = new ThemeLoader($config);

// Load the template
$template = new TemplateLoader($config);

// Load the template engine
$page = new PageLoader($page, $config);

// Load the tools
$tools = new ToolLoader($config);

// Render the page
$engine = new RenderManager($page, $template, $theme, $tools);
print $engine->render();
