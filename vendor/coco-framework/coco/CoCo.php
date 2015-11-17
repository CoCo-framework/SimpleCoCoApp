<?php

// default charset is utf-8
header('Content-type:text/html;charset=utf-8');

// set timezone
date_default_timezone_set('Asia/Shanghai');

// session
session_start();

// CoCo version
const COCO_VERSION = 'v0.2';

//default debug model false
defined('COCO_DEBUG') or define('COCO_DEBUG', false);

//default environment is production
defined('COCO_ENV') or define('COCO_ENV', 'pro');

require_once __DIR__.'/ClassLoader.php';
ClassLoader::$fileExt = '.php';
$frameworkPath = dirname(__DIR__);
ClassLoader::$basePath = $frameworkPath;
ClassLoader::$prefixMap = [
    'app\\'=>'../../app/',
    'coco\\'=>'coco/'
];
spl_autoload_register("ClassLoader::autoload");

new \app\controllers\IndexController();


echo 'Welcome to use CoCo Framework!';
