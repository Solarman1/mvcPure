<?php
define('WEBROOT', str_replace("core/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("core/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require(ROOT . 'app/config/configCore.php');

require(ROOT . 'app/router/route.php');
require(ROOT . 'app/router/request.php');
require(ROOT . 'core/routDispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();
?>