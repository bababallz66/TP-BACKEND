<?php
// public/index.php

// Autoload Composer
require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;

$router = new Router();
$router->handleRequest();
