<?php
error_reporting(E_ALL | E_STRICT);
ini_set('max_execution_time', '600000');
/**
 * Setup imports
 */
require_once __DIR__. '/bootstrap/assets/lib/Helpers.php';
require_once __DIR__. '/bootstrap/routes/routes.php';
require_once __DIR__. '/bootstrap/routes/index.php';
/***
 * Setup config
 */
Helpers::cors();
$app = new Router();
/**
 * setup routes closures
 */
//$app->debugger();
//$app->post('/send', $routes['xlsxToHtml']);
//$app->post('/insert', $routes['insertToXlsx']);
//$app->post('/consiliar', $routes['consiliar']);
//$app->get('/teste', $routes['teste']);
//$app->get('/', $routes['indexView']);
$app->get('/check', $routes['check']);
$app->get('/fields', $routes['getFields']);
$app->get('/count', $routes['count']);
$app->get('/', $routes['test']);

$app->run();

