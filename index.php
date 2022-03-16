<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)));

require ROOT.DS.'vendor/autoload.php';

$view = new \Tuezy\View(ROOT.DS.'views',ROOT.DS.'views/@cache');

$view->addNamespace('index', ROOT.DS.'views');

$title = "Hoang Tu";
echo $view->make('index::index', [ 'meta' => $title]);