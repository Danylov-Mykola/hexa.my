<?php
/**
 * This file is a part of {PROJECT_NAME} project.
 * Author: Mykola Danylov (n.danylov@gmail.com)
 * Date: 20.10.2016
 * Time: 18:06
 */

define('SITE_ROOT', __DIR__);
define('ASSETS_DIR', '/assets/');
define('STORAGE_DIR_NAME', '/storage/');
define('VIEW_DIR', SITE_ROOT . '/Classes/View/');
define('STORAGE_PATH', SITE_ROOT . '/' . STORAGE_DIR_NAME . '/');

require_once "vendor/autoload.php";

/** @var Application $application */
$application = Application::getInstance();
$application->run();