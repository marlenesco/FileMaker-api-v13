<?php

// project-specific namespace prefix
$prefix = 'marlenesco\\filemaker-api-v13\\';
// base directory for the namespace prefix
$base_dir = __DIR__ . '/lib/';
// does the class use the namespace prefix?
$len = strlen($prefix);

$file = $base_dir . str_replace('\\', '/', $class);

if (file_exists($file)) {
    require $file;
}
