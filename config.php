<?php

ob_start();
$AbsoluteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http//';//scisłe porównanie !==
$dirCat = dirname($_SERVER['PHP_SELF']);
$AbsoluteURL .= $_SERVER['HTTP_HOST'];
$AbsoluteURL .= $dirCat !== '\\' ? $dirCat : '';
$slash = substr($AbsoluteURL, -1);

$NewURL = $slash !== '/' ? $AbsoluteURL . '/' : $AbsoluteURL;//spacje między znakiem konkatenacji

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PW', '');
define('DB_DB', 'supercms');

define('SERVER_ADDRESS', $NewURL);//spacja za przecinkiem

define('LogFolder', 'LOG' . DS, true);//stała DS nie jest zdefiniowana

set_include_path(get_include_path().PATH_SEPARATOR . 'CLASS');
set_include_path(get_include_path().PATH_SEPARATOR . 'CLASS/Managers');
set_include_path(get_include_path().PATH_SEPARATOR . 'LIBRAY');

function __autoload($className)
{//nawias w nowej linni (PSR)
    @include $className . '.class.php';//dla takiego autolouda lepiej uży bez once, generalnie poczytaj w PSR odnonie autoload class
}
