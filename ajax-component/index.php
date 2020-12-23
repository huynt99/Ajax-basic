<?php
//error_reporting('E_ALL');
//ini_set('display_errors',1);
define("DIR_PATH", dirname(__FILE__));
define("DIR_URL", "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));

require_once "vendor/autoload.php";
require_once "src/Cores/Bootstrap.php";