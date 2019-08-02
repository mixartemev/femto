<?php declare(strict_types=1);
const EXT = '.php';
const SRC = 'src' . DIRECTORY_SEPARATOR;
const VEN = 'vendor' . DIRECTORY_SEPARATOR;
const PRE = __DIR__ . DIRECTORY_SEPARATOR;
spl_autoload_register(function (string $class) :void
{
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . EXT; // ns -> path
    if (file_exists(PRE . SRC . $classPath)) { // file_exists finds file only by full path
        require SRC . $classPath; // require finds file by relative path
    } elseif (file_exists(PRE . VEN . $classPath)) {
        require VEN . $classPath;
    } else {
        require SRC . $classPath;
        print 'no file: ('.SRC.'|'.VEN.')' . $classPath;
    }
});
