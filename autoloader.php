<?php declare(strict_types=1);

const EXT = '.php';
const APP_NS = 'Framework';
const SRC = 'src' . DIRECTORY_SEPARATOR;
const VEN = 'vendor' . DIRECTORY_SEPARATOR;

spl_autoload_register(function (string $class) :void
{
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . EXT; // ns -> path
    $source = explode('\\', $class)[0] == APP_NS ? SRC : VEN;
    $classPath = $source . $classPath;
    if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $classPath)) { // file_exists finds file only by full path
        require $classPath; // require finds file by relative path
    } else {
        print 'no file: ' . $classPath;
    }
});
