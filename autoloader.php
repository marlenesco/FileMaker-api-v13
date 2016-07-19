<?php

spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/lib/';

    $file = $base_dir . str_replace('\\', '/', $class);

    if (file_exists($file)) {
        require $file;
    }
});