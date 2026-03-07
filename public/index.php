<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = require base_path("{$class}.php");

    if (file_exists($path)) {
        require $path;
    }
});


require base_path("Core/router.php");
