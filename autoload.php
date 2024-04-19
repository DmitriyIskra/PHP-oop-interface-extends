<?php
declare(strict_types=1);

spl_autoload_register(function($class) : void
{
    $filename = str_replace("\\", DIRECTORY_SEPARATOR, $class).".php";
    require_once($filename);
});