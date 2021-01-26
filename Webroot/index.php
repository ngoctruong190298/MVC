<?php
require_once __DIR__ . '/../../mvc/vendor/autoload.php';

use mvc\Dispatcher;
use mvc\Config\core;

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));


$dispatch = new Dispatcher();
$dispatch->dispatch();

?>