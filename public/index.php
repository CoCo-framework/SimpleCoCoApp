<?php

// comment out the following two lines when deployed to production
//defined('COCO_DEBUG') or define('COCO_DEBUG', true);
//defined('COCO_ENV') or define('COCO_ENV', 'dev');

// include composer autoload
require(__DIR__ . '/../vendor/autoload.php');

// new and run a CoCo public application
$app = new coco\web\Application(dirname(__DIR__));
$app->run();
