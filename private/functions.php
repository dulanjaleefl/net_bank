<?php

function url_for($script_path){
	//add the leading if not present
	if($script_path[0] != '/'){
		$script_path = "/" . $script_path;
	}
	return ROOT . $script_path;
}

function u($string=''){
	return urlencode($string);
}

function raw_u($string=""){
	return rawurldecode($string);
}

function h($string=""){
	return htmlspecialchars($string);
}

/* for modifying header info */
function error_404(){
	header($_SERVER['SERVER_PROTOCOL'] . "404 NOT FOUND");
	exit();
}

function error_500(){
	header($_SERVER['SERVER_PROTOCOL'] . "500 Internal Server Error");
	exit();
}

function redirect_to($location){
	header('Location:' . $location);
	exit();
}
?>