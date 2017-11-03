<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_readable($path)) {
        /** @noinspection PhpIncludeInspection */
        require $path;
    }
});