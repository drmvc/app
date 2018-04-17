<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Load dotenv?
if (file_exists(__DIR__ . '/../.env')) {
    (new Dotenv\Dotenv(__DIR__ . '/../'))->load();
}

// Config instance
$config = new \DrMVC\Config();

// Application instance
$app = new \DrMVC\App($config);

// Set routes
$app->get('/', \MyApp\Controllers\Index::class);

// Run worker
echo $app->run();
