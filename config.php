<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PW', '');
define('DB_DB', 'supercms');

//define('DS', '/', true);
//define('ClassFolder', 'CLASS'.DS, true);
//define('ManagerFolder', 'CLASS'.DS.'Managers'.DS, true);
//define('LogFolder', 'LOG'.DS, true);

set_include_path(get_include_path().PATH_SEPARATOR."CLASS");
set_include_path(get_include_path().PATH_SEPARATOR."CLASS/Managers");

function __autoload($className){
    @include_once ($className.".class.php");
}
