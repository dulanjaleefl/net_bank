<?php
ob_start(); //output buffering turned on

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH",  dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

define("ROOT" , 'http://netbank.dev');

require_once('functions.php');


?>