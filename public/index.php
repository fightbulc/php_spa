<?php

require __DIR__ . '/../vendor/autoload.php';

// handle SPA
define('HAS_SPA', isset($_SERVER['HTTP_X_PHP_SPA']) && $_SERVER['HTTP_X_PHP_SPA'] === 'on');

// start frontend
\Simplon\Frontend\Frontend::start(
    require __DIR__ . '/../src/App/Config/config.common.php'
);