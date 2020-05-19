<?php
declare(strict_types=1);
//declare(encoding='UTF-8');
error_reporting(E_ALL);

if(phpversion()<'7.1.0') die('Versión mínima de PHP 7.1.0');


define('ABSPATH',__DIR__);
define('DIR','');
//define('DIR','/englishpanish');
define('HOST', $_SERVER["HTTP_HOST"].DIR);  //ej --> localhost
define('PROTOCOL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://"); // ej --> http://
define('URLBASE', PROTOCOL.HOST); //ejemplo --> http://localhost/contacto.php


define('DB_HOST','localhost');
define('DB_DBNAME','blog');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_CHARSET','UTF8');

// glob ( string $pattern [, int $flags = 0 ] ) : array
foreach(glob(ABSPATH.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'*.php') as $file)
    require_once($file);

new App();