<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PW', '');
define('DB_DB', 'supercms');

define('SERVER_ADDRESS',$NewURL);

define('LogFolder', 'LOG'.DS, true);

set_include_path(get_include_path().PATH_SEPARATOR."CLASS");
set_include_path(get_include_path().PATH_SEPARATOR."CLASS/Managers");
set_include_path(get_include_path().PATH_SEPARATOR."LIBRAY");

function __autoload($className){
    @include_once ($className.".class.php");
}
