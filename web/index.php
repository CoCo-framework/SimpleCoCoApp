<?php

// comment out the following two lines when deployed to production
defined('COCO_DEBUG') or define('COCO_DEBUG', true);
defined('COCO_ENV') or define('COCO_ENV', 'dev');

// include composer autoload
require(__DIR__ . '/../vendor/autoload.php');

// CoCo entrance
require(__DIR__ . '/../vendor/coco-framework/coco/CoCo.php');

// include this application main config file
$config = require(__DIR__ . '/../config/web.php');

// new and run a CoCo web application
(new coco\web\Application($config))->run();