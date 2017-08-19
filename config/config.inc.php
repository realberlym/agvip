<?php

version_compare(PHP_VERSION, '5.5.0') <= 0 ? error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED & E_ERROR) 
:error_reporting(E_WARNING & ~E_NOTICE & ~E_DEPRECATED  & E_ERROR & ~E_STRICT);


define('DB_TYPE', 'mysql');
define('DB_NAME', 'agvip');
define('DB_USER', 'root');
define('DB_PASSWORD', 'p@ssw0rd');
define('DB_HOST', 'localhost');