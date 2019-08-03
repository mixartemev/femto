<?php declare(strict_types=1);

const EXT = '.php';
const APP_NS = 'Framework';
const SRC = 'src' . DIRECTORY_SEPARATOR;
const VEN = 'vendor' . DIRECTORY_SEPARATOR;

spl_autoload_register(function (string $class) :void
{
    $source = explode('\\', $class)[0] == APP_NS ? SRC : VEN;
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . EXT; // ns -> path
    require $source . $class;
});
