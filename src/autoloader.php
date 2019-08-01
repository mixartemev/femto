<?php
spl_autoload_register(function ($class) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class); // ns -> path
    require $path . '.php'; // includes from current dir by relative way
});
