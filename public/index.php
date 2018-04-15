<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Config instance
$config = new \DrMVC\Config();

// Application instance
$app = new \DrMVC\App($config);

// Set routes
$app->get('/', \MyApp\Controllers\Index::class);

// Run worker
echo $app->run();
