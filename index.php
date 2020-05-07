<?php
declare(strict_types=1);
//declare(encoding='UTF-8');

if(phpversion()<'7.1.0') die('Versión mínima de PHP 7.1.0');


define('ROOT',__DIR__);

// glob ( string $pattern [, int $flags = 0 ] ) : array
foreach(glob(ROOT.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'*.php') as $file)
    require_once($file);

new App();