<?php
ob_start(); //output buffering turned on

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH",  dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

define("ROOT" , '//url_to_the_root_folder_here');

require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');

$db = db_connect();
?>